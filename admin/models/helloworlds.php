<?php
defined('_JEXEC') or die('Restricted access');

class HelloworldModelHelloWorlds extends JModelList
{
	
	public function __construct($config = array())
	{
		
		if(empty($config['filter_fields'])) {			
			$config['filter_fields'] = array(
			'name', 'name',
			'detail', 'detail'
			);
		}
		parent::__construct($config);
		
	}
	
	protected function populateState($ordering = null, $direction = null)
	{
		
		$search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);
		
		parent::populateState('id', 'asc');
	}
	protected function getListQuery()
	{
		
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query->select('*')->from('#__helloworld_hello');
		
		if($this->getState('filter.search') !== '') {
			
			$token = $db->Quote('%'.$db->escape($this->getState('filter.search')).'%');
			
			$searches = array();
			$searches[] = 'name LIKE'.$token;
			$searches[] = 'detail LIKE'.$token;
			
			$query->where('('.implode(' OR ', $searches).')');
			
		}
		$query->order($db->escape($this->getState('list.ordering', 'id')).' '.$db->escape($this->getState('list.direction', 'ASC')));
			
			return $query;
		}
}

?>	


