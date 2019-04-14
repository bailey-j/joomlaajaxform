<?php
defined('_JEXEC') or die('Restricted access');

class HelloworldModelHelloWorld extends JModelAdmin
{
	public function getTable($type = 'HelloWorld', $prefix = 'HelloWorldTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm(
			'com_helloworld.helloworld', 'helloworld',
			array(
				'control' => 'jform',
				'load_data' => $loadData
			)
		);
		if (empty($form))
		{
			return false;
		}
		return $form;
	}
	
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState(
			'com_helloworld.edit.helloworld.data',
			array()
		);
		if (empty($data))
		{
			$data = $this->getItem();
		}
		return $data;
	}
	
	
	
	
	
	
	
	
	// // function getForm($data = array(), $loadData = true) ///disableA
	// // {
		 // // $options = array('control' => 'jform', 'load_data' => $loadData);
		
		 // // $form = $this->loadForm('com_helloworld.helloworld', 'helloworld', $options);
		
		 // // if(empty($form)){
			 // // return false; 
		 // // }
		 // // return $form;
		 // // parent::__construct($config);
	// // }
	// public function getForm($data = array(), $loadData = true)
	// {
		// // Get the form.
		// $form = $this->loadForm(
			// 'com_helloworld.helloworld',
			// 'helloworld',
			// array(
				// 'control' => 'jform',
				// 'load_data' => $loadData
			// )
		// );
		// if (empty($form))
		// {
			// return false;
		// }
		// return $form;
	// }
	
	
	
	
	// // function save($data) ///disableA
	// // {
		// // $db = JFactory::getDbo();
		// // $obj = (object) $data;
		
		// // try {
			// // if($obj->id){
				// // $db->updateObject('vvrq6_helloworld_hello', $obj, 'id');
			// // } else {
				// // $db->insertObject('vvrq6_helloworld_hello', $obj, 'id');
			// // }
		// // } catch (RuntimeException $exc) {
				// // $this->setError($exc->getMessage());
				// // return false;
		// // }
		// // return true;
		
	// // }
	
	// function save()
	// {		
		// JRequest::checkToken() or die('Invalid Token');
		
		// $data  = $this->input->post->get('jform', array(), 'array');
		// $model = $this->getModel('helloworld');
		
		// if($model->save($data)) {
			// $this->setMessage('Save successfully');
		// } else {
			// JError::raiseWarning('', 'Save failed<br />'.implode('<br />', $model->getErrors()));
		// }
		
		// $this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=helloworlds'));
	// }
	
	
	// function delete($id)
	// {
		// $db = JFactory::getDbo();
		// $query = $db->getQuery(true);
		
		// try {
			// $query->delete('vvrq6_helloworld_hello')
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
			// ->from('vvrq6_helloworld_hello')
			// ->where($db->quoteName('id').'='.$db->quote($pk));
		// $db->setQuery($query);
		// $db->query();
		
		// return $db->loadObject();
	// }
	
	// protected function loadFormData()
	// {
		// //$data = $this->getItem();
		// $data = JFactory::getApplication()->getUserState(
			// 'com_helloworld.default.helloworld.data',
			// array()
		// );
		// if (empty($data))
		// {
			// $data = $this->getItem();
		// }
		// return $data;
	// }
	
	
	
	
}
?>