<?php 
defined('_JEXEC') or die('Restricted access');

class HelloworldViewSubmission extends JViewLegacy
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
			$title = JText::_('New Submission');
		}
		else
		{
			$title = JText::_('Edit Submission');
		}
		JToolbarHelper::title($title, 'submission');
		JToolbarHelper::save('submission.save');
		JToolbarHelper::cancel(
			'submission.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}
}
?>