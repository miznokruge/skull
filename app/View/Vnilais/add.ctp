<div class="vnilais form">
<?php echo $this->Form->create('Vnilai'); ?>
	<fieldset>
		<legend><?php echo __('Add Vnilai'); ?></legend>
	<?php
		echo $this->Form->input('nis');
		echo $this->Form->input('nama_siswa');
		echo $this->Form->input('kode_semester');
		echo $this->Form->input('kode');
		echo $this->Form->input('nama_mata_pelajaran');
		echo $this->Form->input('nilai');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vnilais'), array('action' => 'index')); ?></li>
	</ul>
</div>
