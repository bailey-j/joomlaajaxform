<?php
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));

?>

<form action="<?php echo JRoute::_('index.php?option=com_helloworld&view=helloworld');?>" method="post" name="adminForm" id="adminForm">
<div id="j-sidebar-container" class="span2">
<?php echo JHtmlSidebar::render();?> <!--Render the Sidebar Menu Container -->
</div>

<div id="j-main-container" class="span10 ">

	<div id="filter-bar" class="btn-toolbar row-fluid">
		<div class="filter-search btn-group pull-left">
		
			<input type="text" name="filter_search" id="filter_search" placeholder="Search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" />
		</div>
		<div class="btn-group pull-left">
			<button type="submit" class="btn tip" title="Search"><i class="icon-search"></i></button>
			<button type="button" class="btn tip" onclick="document.id('filter_search').value'';$this.forms.submit();"><i class="icon-remove"></i></button>
		</div>
	</div> 
	
	<div class="clearfix">
	</div>
<div>
<table class="table table-striped">
	<thead>
		<tr>
		<th width="1%" class="nowrap center">
			#
		</th>
		<th width="1%" class="nowrap left">
			<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)"	/>
		</th>
		<th width="15%" class="nowrap left">
			<?php echo JHtml::_('grid.sort', 'Name', 'name', $listDirn, $listOrder); ?>
		</th>
		<th width="15%" class="nowrap left">
			<?php echo JHtml::_('grid.sort', 'Detail', 'detail', $listDirn, $listOrder); ?>
		</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="4">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		
		</tr>
	</tfoot>
	<tbody>
	<?php if (!empty($this->item)) : ?>
		<?php foreach ($this->item as $i => $item) :
		$url = JRoute::_('index.php?option=com_helloworld&task=helloworld.edit&id=' . $item->id);
		?>
		<tr>
			<td class="left">
			<?php echo $this->pagination->getRowOffset($i); ?>
			</td>
			<td class="left">
				<?php echo JHtml::_('grid.id', $i, $item->id); ?>
			</td>
			<td class="left">
				<a href="<?php echo $url; ?>" title="<?php echo JText::_('Form Edit'); ?>">
					<?php echo $item->name; ?>
				</a>
			</td>
			
			<td align="left">
				<?php echo $item->detail; ?>
			</td>
		</tr>
		<?php endforeach; ?>
	<?php endif; ?>		
	</tbody>
	
</table>
</div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="c" value="helloworld" />
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		
		<?php echo JHtml::_('form.token'); ?>
</div>
</form>


