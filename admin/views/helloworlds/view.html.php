<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class HelloworldViewHelloWorlds extends JViewLegacy
{
	
	function display($tpl = null)
	{
		
		$this->item = $this->get('Items');
		
		$this->pagination = $this->get('Pagination');
		
		$this->state = $this->get('State');
		
		$this->addToolbar();
		// Set the submenu
		HelloWorldHelper::addSubmenu('helloworlds');
		$this->sidebar = JHtmlSidebar::render(); //shows menu titles
		
		parent::display($tpl);
		
	}
	
	function addToolbar()
	{
		
		JToolbarHelper::title('Form Manager');
		
		//JToolbarHelper::addNew('helloworld.add');
		
		JToolbarHelper::editList('helloworld.edit');
		//JToolBarHelper::editList('form.edit');
		
		//JToolbarHelper::deleteList('Are you sure?', 'delete');
		
		//JToolbarHelper::publish('forms.publish', 'JTOOLBAR_PUBLISH', true);
        //JToolbarHelper::unpublish('forms.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		JToolbarHelper::publish('publish', 'JTOOLBAR_PUBLISH', true);
        JToolbarHelper::unpublish('unpublish', 'JTOOLBAR_UNPUBLISH', true);
        
	}
}
