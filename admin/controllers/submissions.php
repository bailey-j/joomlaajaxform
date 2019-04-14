<?php

defined('_JEXEC') or die('Restricted access');

class HelloWorldControllerSubmissions extends JControllerAdmin
{
	public function getModel($name = 'Submission', $prefix = 'HelloWorldModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
	
	
	public function exportcsv()
	{
		
		header("Content-type: application/csv; charset=utf-8"); 
		header("Content-Disposition: attachment; filename=submission.csv"); 
		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		
		ob_end_clean();
		
		$app 	= JFactory::getApplication();
		$input 	= $app->input; 
		
		echo "Last Name, First Name, Middle Name, Address, DOB, Sex, Nat. ID, Other ID, NIS#, Home Phone, Mob. Phone, Email, Mother, Father, Guardian, NoK Address, NoK Home #, NoK Mob., NoK Email,  Education, CCSLC, CSEC,  Emp. Status, Unemploy Length, Challenges, Child?, Num. of Child, Age of Child, Programme, Public Assist.?, Other Inst., Other Prog, Date \n";
		
//////////////////////////////////				
		$pks = $input->get('id', array(), 'array');	
		//var_dump($pk);
		//$pks = ['id',  'lastname', 'firstname', 'midname'];
		$model	= $this->getModel('Submission');
		$tmp = $model->getExportData($pks);
			
		//Outputs each column value in the relevant column	
		foreach ($tmp as $row)
		 { print implode(',', $row)."\n";  }
		 
/////////////////////////////////
		
		$fp = fopen("php://output", "w"); 
		
		// //Outputs each column value in the relevant column
		// foreach ($tmp as $fields) { 
			// fputcsv($fp, $fields); 
		// } 
		
		fclose($fp);
		
		$app->close();
		
		//Redirect to List
		$this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=submissions', true));
	}
}