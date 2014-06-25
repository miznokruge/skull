<div class="mapels form">
<?php echo $this->Form->create('Mapel'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mapel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('kode');
		echo $this->Form->input('nama');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mapel.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mapel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mapels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
