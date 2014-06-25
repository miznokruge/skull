<div class="semesters form">
<?php echo $this->Form->create('Semester'); ?>
	<fieldset>
		<legend><?php echo __('Add Semester'); ?></legend>
	<?php
		echo $this->Form->input('kode');
		echo $this->Form->input('tahun');
		echo $this->Form->input('semester');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Semesters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
