<div class="mapels form">
<?php echo $this->Form->create('Mapel'); ?>
	<fieldset>
		<legend><?php echo __('Add Mapel'); ?></legend>
	<?php
		echo $this->Form->input('kode');
		echo $this->Form->input('nama');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mapels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
