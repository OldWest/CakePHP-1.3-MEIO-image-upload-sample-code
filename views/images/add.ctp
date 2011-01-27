<div class="images form">
<?php // echo $this->Form->create('Image');?>
<?php echo $form->create('Image',array('type' => 'file')); ?>
	<fieldset>
 		<legend><?php __('Add Image'); ?></legend>
	<?php
		echo $this->Form->input('gallery_id');
		echo $this->Form->input('name');
		//echo $this->Form->input('img_file');
		echo $form->input('img_file', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
	</ul>
</div>