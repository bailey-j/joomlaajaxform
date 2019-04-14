<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');

?>

<form action="<?php echo JRoute::_('index.php?option=com_helloworld&layout=edit&id=' . (int) $this->item->id); ?>" 
	name="adminForm" id="adminForm" method="post" class="formvalidate form-horizontal">

<fieldset>
<?php foreach($this->form->getFieldset('yate_form') as $field) { ?>
<div class="control-group">
<div class="control-label">
<?php echo $field->label; ?>
</div>
<div class="controls">
<?php echo $field->input; ?>
</div>
</div>
<?php } ?>
 
	<input type="hidden" name="task"/>
	<?php echo JHtml::_('form.token');?>
</fieldset>

</form>	


