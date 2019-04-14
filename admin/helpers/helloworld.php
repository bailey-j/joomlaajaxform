<?php

defined('_JEXEC') or die;

abstract class HelloWorldHelper extends JHelperContent
{
	public static function addSubmenu($submenu) 
	{
		JHtmlSidebar::addEntry(
			JText::_('Forms'),
			'index.php?option=com_helloworld&view=helloworlds',
			$submenu == 'Forms'
		);

		JHtmlSidebar::addEntry(
			JText::_('Submissions'),
			'index.php?option=com_helloworld&view=submissions',
			$submenu == 'Submissions'
		);

		// // Set some global property
		// $document = JFactory::getDocument();
		// $document->addStyleDeclaration('.icon-48-helloworld ' .
										// '{background-image: url(../media/com_helloworld/images/tux-48x48.png);}');
		// if ($submenu == 'submissions') 
		// {
			// $document->setTitle(JText::_('COM_HELLOWORLD_ADMINISTRATION_SUBMISSIONS'));
		// }
	}
}
	