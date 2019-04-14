<?php

defined('_JEXEC') or die('Restricted access');

class HelloWorldControllerExport extends JControllerForm
{
	public function exportcsv()
	{
		//ob_end_clean();
		
		$app 	= JFactory::getApplication();
		$input 	= $app->input; 
		
		echo "ID, Last Name, First Name, Middle Name \n";
		
		
//////////////////////////////////				
		$pks = $input->get('cid', array(), 'array');	
		//var_dump($pk);
		
		$model	= $this->getModel('Submission');
		$tmp = $model->getExportData($pks);
		//$items 	= $this->getModel('Submission');
		//$submissions = $items->getExportData();
		//$tmp  = array();
		
		// //$tmp = $items->getExportData($pks);
		// //echo $tmp;
		
		foreach ($tmp as $row)
		 { print implode(';', $row)."\n";  }

		// // foreach($submissions as $sub)
		// // {
			// // $item = $items->getItem($sub); 			
			// // $tmp[$item->id]['id'] = $item->id;
		// // }
		
		// foreach($submissions as $submission) {
			// echo $submission->lastname . ", " . $submission->firstname. "\r\n";
		// }
		
		
		
/////////////////////////////////
		
		header("Content-type: application/csv; charset=utf-8"); 
		header("Content-Disposition: attachment; filename=submission.csv"); 
		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		
		$fp = fopen("php://output", "w"); 

		foreach ($tmp as $fields) { 
			fputcsv($fp, $fields); 
		} 
		fclose($fp);
		
		$app->close();
		//Redirect to List
		$this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=submissions', true));
	}
}