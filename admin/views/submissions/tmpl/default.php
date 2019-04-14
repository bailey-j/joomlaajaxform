<?php
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));

?>

<form action="<?php echo JRoute::_('index.php?option=com_helloworld&view=submission');?>" method="post" name="adminForm" id="adminForm">
<div id="j-sidebar-container" class="span2">
<?php echo JHtmlSidebar::render();?> <!--Render the Sidebar Menu Container -->
</div>

<div id="j-main-container" class="span10 ">

	<div id="filter-bar" class="btn-toolbar row-fluid">
		<div class="filter-search btn-group pull-left">
			<input type="text" name="filter_search" id="filter_search" placeholder="Search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" />
		</div>
		<div class="btn-group pull-left">
			<button type="submit" class="btn tip" title="Search Submissions"><i class="icon-search"></i></button>
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
		<th width="5%" class="nowrap left">
			<?php echo JHtml::_('grid.sort', 'Full Name', 'lastname', $listDirn, $listOrder); ?>
		</th>
		<th width="5%" class="nowrap left">
			<?php echo JHtml::_('grid.sort', 'Age', 'firstname', $listDirn, $listOrder); ?>
		</th>
		<th width="5%" class="nowrap left">
			<?php echo JHtml::_('grid.sort', 'Employment Status', 'midname', $listDirn, $listOrder); ?>
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
		<?php 
		foreach($this->item as $i => $item){ 
		$url = JRoute::_('index.php?option=com_helloworld&task=submission.edit&id='.$item->id);
		?>
		<tr>
			<td class="center">
				<?php echo $i + 1; ?>
			</td>
			<td class="left">
				<?php echo JHtml::_('grid.id', $i, $item->id); ?>
			</td>
			<td class="left">
				<a href="<?php echo $url; ?>">
				<?php echo $item->firstname; echo " ";?>
				<?php echo $item->lastname; ?>
				</a>
				<div class="small">
				<!--<?php echo JText::_('JCATEGORY') . ': ' . $this->escape($item->category_title);?>-->
				</div>
			</td>
			<td class="left">
				<?php echo $item->dob; ?>
			</td>
			<td class="left">
				<?php echo $item->empstatus; ?>
			</td>
		</tr>
		<?php } ?>		
	</tbody>
	
</table>
</div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<!--<input type="hidden" name="c" value="submission" />-->
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		
		<?php echo JHtml::_('form.token'); ?>
</div>
</form>

<script>
function submitbutton(pressbutton) {
    // Check if it's your button
    if(pressbutton == 'submissions.exportcsv') {
        // Call your method with something like this:
        window.location = 'index.php?option=com_helloworld&task=submissions.exportcsv'
        // That should be it, this way you don't set the task value for future clicks
    } else {
      // If not follow the normal path
      document.adminForm.task.value=pressbutton;
      submitform(pressbutton);
    }
}
</script>