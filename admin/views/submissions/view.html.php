<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class HelloworldViewSubmissions extends JViewLegacy
{
	
	function display($tpl = null)
	{
		
		$this->item = $this->get('Items');
		
		$this->pagination = $this->get('Pagination');
		
		$this->state = $this->get('State');
		
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$this->addToolbar();
		
		// Set the submenu
		HelloWorldHelper::addSubmenu('helloworlds');
		$this->sidebar = JHtmlSidebar::render(); //shows menu titles
		
		parent::display($tpl);
		
	}
	
	function addToolbar()
	{
		JToolbarHelper::title('Submissions Manager');
		JToolbarHelper::addNew('submission.add');
		
		JToolbarHelper::editList('submission.edit');
		
		JToolbarHelper::deleteList('Are you sure?', 'submissions.delete');
		
		//Custom Button - Export CSV
		JToolBarHelper::custom('submissions.exportcsv', 'download.png', 'download_f2.png', 'Export to CSV', false);
		
	}
}
