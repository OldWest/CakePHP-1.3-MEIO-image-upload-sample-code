<div class="galleries view">
<h2><?php  __('Gallery');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gallery['Gallery']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gallery['Gallery']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gallery', true), array('action' => 'edit', $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Gallery', true), array('action' => 'delete', $gallery['Gallery']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Images');?></h3>
	<?php if (!empty($gallery['Image'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Gallery Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Img File'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($gallery['Image'] as $image):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $image['id'];?></td>
			<td><?php echo $image['gallery_id'];?></td>
			<td><?php echo $image['name'];?></td>
			<!--<td><?php echo $image['img_file'];?></td>-->
			
			<td><?php  echo $html->image('uploads' . DS . 'images' . DS . $image['img_file'], array('alt' => 'Gallery Image')); ?></td>
			
			
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'images', 'action' => 'delete', $image['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
