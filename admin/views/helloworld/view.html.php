<?php 
defined('_JEXEC') or die('Restricted access');

class HelloworldViewHelloWorld extends JViewLegacy
{	
	protected $form = null;
	
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Set the toolbar
		$this->addToolBar();
		// Display the template
		parent::display($tpl);
	}
	
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;
		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);
		$isNew = ($this->item->id == 0);
		if ($isNew)
		{
			$title = JText::_('New Form');
		}
		else
		{
			$title = JText::_('Edit Form');
		}
		JToolbarHelper::title($title, 'helloworld');
		JToolbarHelper::save('helloworld.save');
		JToolbarHelper::cancel(
			'helloworld.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}
}
?>