<div class="siswas form">
<?php echo $this->Form->create('Siswa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Siswa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nis');
		echo $this->Form->input('nama');
		echo $this->Form->input('alamat');
		echo $this->Form->input('tanggal_lahir');
		echo $this->Form->input('jenis_kelamin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Siswa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Siswa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Siswas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
