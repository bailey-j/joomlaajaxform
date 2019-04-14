<?php
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

class JFormFieldHelloWorld extends JFormFieldList
{
	protected $type = 'HelloWorld';
	
	protected function getOptions()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		
		$query->select('vvrq6_helloworld_hello.id as id, name, vvrq6_categories.title as category, catid');
		$query->from('#__helloworld_hello');
			
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options = array();
		if ($messages)
		{
			foreach($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->name );
			}
		}
		$options = array_merge(parent::getOptions(), $options);
			
			return $options;
		}
}

?>	


