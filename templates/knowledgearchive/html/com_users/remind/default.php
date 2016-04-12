<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="com-users remind">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>

	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=remind.remind'); ?>" method="post" class="form-validate form-horizontal">

		<?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
		<p><?php echo JText::_($fieldset->label); ?></p>

		<fieldset>
			<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field) : ?>
				<div id="<?php echo $field->fieldname; ?>-field" class="form-field">
					<?php echo $field->label; ?>
					<div class="form-field-input">
						<?php echo $field->input; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</fieldset>
		<?php endforeach; ?>
		
		<div id="buttons-field" class="form-field">
			<button type="submit">
				<?php echo JText::_('JSUBMIT'); ?>				
			</button>
		</div>
		
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
