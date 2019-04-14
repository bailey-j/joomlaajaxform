<?php
defined('_JEXEC') or die('Restricted access');

class HelloworldModelSubmissions extends JModelList
{
	
	public function __construct($config = array())
	{
		
		if(empty($config['filter_fields'])) {			
			$config['filter_fields'] = array(
			'lastname', 'lastname',
			'firstname', 'firstname',
			'midname', 'midname'
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
		
		$query->select('*')->from('#__helloworld_submission'); //use '#_' as wildcard for joomla database table
		
		if($this->getState('filter.search') !== '') {
			
			$token = $db->Quote('%'.$db->escape($this->getState('filter.search')).'%');
			
			$searches = array();
			$searches[] = 'lastname LIKE'.$token;
			$searches[] = 'firstname LIKE'.$token;
			$searches[] = 'midname LIKE'.$token;
			
			$query->where('('.implode(' OR ', $searches).')');
		}

		$query->order($db->escape($this->getState('list.ordering', 'id')).' '.$db->escape($this->getState('list.direction', 'ASC')));
			return $query;
	}

}

?>	


