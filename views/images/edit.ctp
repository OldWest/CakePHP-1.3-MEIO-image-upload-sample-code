<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
 		<legend><?php __('Edit Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('gallery_id');
		echo $this->Form->input('name');
		echo $this->Form->input('img_file');
		
		
		
		echo $form->input('Image.img_file.remove',  array('type' => 'checkbox', 'label' => 'Delete Image'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Image.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Image.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
	</ul>
</div>