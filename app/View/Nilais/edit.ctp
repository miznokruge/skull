<div class="nilais form">
<?php echo $this->Form->create('Nilai'); ?>
	<fieldset>
		<legend><?php echo __('Edit Nilai'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('siswa_id');
		echo $this->Form->input('mapel_id');
		echo $this->Form->input('semester_id');
		echo $this->Form->input('nilai');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Nilai.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Nilai.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Siswas'), array('controller' => 'siswas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Siswa'), array('controller' => 'siswas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mapels'), array('controller' => 'mapels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mapel'), array('controller' => 'mapels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semesters'), array('controller' => 'semesters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semester'), array('controller' => 'semesters', 'action' => 'add')); ?> </li>
	</ul>
</div>
