<?php
defined('_JEXEC') or die('Restricted access');

class HelloWorldViewHelloWorld extends JViewLegacy
{	
	protected $form = null;
	
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		//$this->script = $this->get('Script'); 
		
		// Check for errors.
		// if (count($errors = $this->get('Errors')))
		// {
			// JError::raiseError(500, implode('<br />', $errors));
			// return false;
		// }
		
		// Display the template
		parent::display($tpl);
		//$this->setDocument();
	}

	/**
	 * Method to set up the html document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('YATE Application Form'));
		$document->addScript(JURI::root() . $this->script);
		$document->addScript(JURI::root() . "/components/com_helloworld"
		                                  . "/views/submission/submitbutton.js");
		JText::script('Try Again');
	}
	
}