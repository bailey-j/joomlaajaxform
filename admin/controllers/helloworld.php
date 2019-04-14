<?php

defined('_JEXEC') or die('Restricted access');

class HelloWorldControllerHelloWorld extends JControllerForm
{
	protected function allowAdd($data = array())
	{
		return parent::allowAdd($data);
	}
	
	protected function allowEdit($data = array(), $key = 'id')
	{
		$id = isset( $data[ $key ] ) ? $data[ $key ] : 0;
		if( !empty( $id ) )
		{
			return JFactory::getUser()->authorise( "core.edit", "com_helloworld.helloworld." . $id );
		}
	}
}
?>


<?php
// defined('_JEXEC') or die('Restricted access');

// class HelloworldControllerHelloWorld extends JControllerLegacy
// {
	// function display($cachable = false, $urlparams = array())
	// {		
		// JRequest::setVar('view','helloworlds');
		// parent::display($cachable, $urlparams);
	// }

	// function save()
	// {		
		// JRequest::checkToken() or die('Invalid Token');
		
		// $data  = $this->input->post->get('jform', array(), 'array');
		// $model = $this->getModel('helloworlds');
		
		// if($model->save($data)) {
			// $this->setMessage('Save successfully');
		// } else {
			// JError::raiseWarning('', 'Save failed<br />'.implode('<br />', $model->getErrors()));
		// }
		
		// $this->setRedirect(JRoute::_('index.php?option=com_helloworld&c=hello'));
	// }
	
	// function add()
	// {
		// JRequest::setVar('view', 'helloworlds');
		// parent::display();

	// }
	
	// function edit()
	// {
		// JRequest::setVar('view', 'helloworlds');
		// parent::display();
	// }
	
	// function delete()
	// {
		// JRequest::checkToken() or die('Invalid Token');
		
		// $cid = JRequest::getVar('cid');
		// $model = $this->getModel('helloworlds');
		
		// foreach($cid as $id){
			// if($model->delete($id)){
				// $this->setMessage('Delete successfully');
			// } else {
				// JError::raiseWarning('', 'Delete failed<br />'.implode('<br />', $model->getErrors()));
			// }
		// }
		// $this->setRedirect(JRoute::_('index.php?option=com_helloworld&layout=edit'));

	// }
// }

// ?>