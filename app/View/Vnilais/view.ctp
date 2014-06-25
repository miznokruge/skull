<div class="vnilais view">
<h2><?php echo __('Vnilai'); ?></h2>
	<dl>
		<dt><?php echo __('Nis'); ?></dt>
		<dd>
			<?php echo h($vnilai['Vnilai']['nis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Siswa'); ?></dt>
		<dd>
			<?php echo h($vnilai['Vnilai']['nama_siswa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kode Semester'); ?></dt>
		<dd>
			<?php echo h($vnilai['Vnilai']['kode_semester']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kode'); ?></dt>
		<dd>
			<?php echo h($vnilai['Vnilai']['kode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Mata Pelajaran'); ?></dt>
		<dd>
			<?php echo h($vnilai['Vnilai']['nama_mata_pelajaran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nilai'); ?></dt>
		<dd>
			<?php echo h($vnilai['Vnilai']['nilai']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vnilai'), array('action' => 'edit', $vnilai['Vnilai']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vnilai'), array('action' => 'delete', $vnilai['Vnilai']['id']), array(), __('Are you sure you want to delete # %s?', $vnilai['Vnilai']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vnilais'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vnilai'), array('action' => 'add')); ?> </li>
	</ul>
</div>
