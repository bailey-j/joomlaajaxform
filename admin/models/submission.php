<?php
defined('_JEXEC') or die('Restricted access');

class HelloworldModelSubmission extends JModelAdmin
{
	public function getTable($type = 'Submission', $prefix = 'HelloWorldTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_helloworld.submission', 'submission',
			array('control' => 'jform','load_data' => $loadData )	);
		if (empty($form))
		{
			return false;
		}
		return $form;
		parent::__construct($config);
	}
		
	// function delete($id)
	// {
		// $db = JFactory::getDbo();
		// $query = $db->getQuery(true);
		
		// try {
			// $query->delete('#__helloworld_submission')
				// ->where($db->quoteName('id').'='.$db->quote($id));
			// $db->setQuery($query);
			// $db->execute();
		// } catch (RuntimeException $exc) {
				// $this->setError($exc->getMessage());
				// return false;
		// }
		// return true;
	// }
	
	// public function getItem()
	// {
		// $pk = JRequest::getVar('cid');
		
		// if(is_array($pk)) {
			// $pk = $pk[0];
		// } 
		
		// if($pk == '') {
			// return false;
		// }
			
		// $db = JFactory::getDbo();
		
		// $query = $db->getQuery(true);
		
		// $query->select('*')
			// ->from('vvrq6_helloworld_submission')
			// ->where($db->quoteName('id').'='.$db->quote($pk));
		// $db->setQuery($query);
		// $db->query();
		
		// return $db->loadObject();
	// }
	
	protected function loadFormData()
	{
		$data = $this->getItem();
		return $data;
	}
		
	public function getExportData($pks)
	{
		$pklist = implode(',', $pks);
		
		$db	= JFactory::getDBO();
		$query	= $db->getQuery(true);
		$query	-> select('lastname, firstname, midname, address, dob, gender, nid, otherid, nis, homenum, mobilenum, email, mother, father, guardian, addressnok, 
		nokhomenum, nokmobnum, nokemail, educlevel, numccslc, numcsec, empstatus, unemptime, challenges, childyesno, childnum, childage, programchoice, publicassist, 
		otherinstitute, otherprogramme, date')
			-> from('#__helloworld_submission');
			//-> where($db->quoteName('id IN ('.$pklist.')'));
		$db	-> setQuery((string)$query);
		$rows	= $db->loadRowList();
		
		// $options  = array();	//header with column names //$options  = array();
		// $options  = array_merge( $options,  $rows);
		
		// return $options;
		
		return $rows;
	}
}




?>