<div class="vnilais form">
<?php echo $this->Form->create('Vnilai'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vnilai'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vnilai.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vnilai.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vnilais'), array('action' => 'index')); ?></li>
	</ul>
</div>
