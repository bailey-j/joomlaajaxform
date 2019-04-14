<?php
defined('_JEXEC') or die('Restricted access');

class HelloWorldModelHelloworld extends JModelAdmin
{
	public function getTable($type = 'Submission', $prefix = 'HelloWorldTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	public function getForm($data = array(), $loadData = true)
	{
		$app = JFactory::getApplication('site');
		
		// Get the form.
		$form = $this->loadForm(
			'com_helloworld.helloworld', 'helloworld',
			array(
				'control' => 'jform',
				'load_data' => true//$loadData 
			)	
		);
		if (empty($form))
		{
			return false;
		}
		return $form;
		//parent::__construct($config);
	}
		
	
	protected function loadFormData()
	{
		// $data = JFactory::getApplication()->getUserState(
			// 'com_helloworld.edit.helloworld.data',
			// array()
		// );
		$data = $this->getItem();

		return $data;
	}
	
	
	// public function getScript() 
	// {
		// return 'components/com_helloworld/views/submission/submitbutton.js';
	// }
	
	
	// ///////////////////////////////////////////////////////////////////////////////////////////////
	// public function uploadForm()
	// {
		// $app = JFactory::getApplication('site');
		
		// // database columns to import
		// $colnames	= array("lastname", "firstname", "midname");
		// $lname = $app->get('lastname', '', 'cmd');
		// $fname = $app->get('firstname', '', 'cmd');
		// $mname = $app->get('midname', '', 'cmd');
		
		// $values = array($lname, $fname, $mname);
			
		// $db	= JFactory::getDbo();
		
		// $query
			 // ->insert($db->quoteName('#__helloworld_submission'))
			 // ->columns($db->quoteName($columns))
			 // ->values(implode(',', $values));
		
		// $db->setQuery($query);
		// $db->execute();
			
		
	// }
	
	
	
}