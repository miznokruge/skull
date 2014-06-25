<div class="vnilais index">
	<h2><?php echo __('Vnilais'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nis'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_siswa'); ?></th>
			<th><?php echo $this->Paginator->sort('kode_semester'); ?></th>
			<th><?php echo $this->Paginator->sort('kode'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_mata_pelajaran'); ?></th>
			<th><?php echo $this->Paginator->sort('nilai'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vnilais as $vnilai): ?>
	<tr>
		<td><?php echo h($vnilai['Vnilai']['nis']); ?>&nbsp;</td>
		<td><?php echo h($vnilai['Vnilai']['nama_siswa']); ?>&nbsp;</td>
		<td><?php echo h($vnilai['Vnilai']['kode_semester']); ?>&nbsp;</td>
		<td><?php echo h($vnilai['Vnilai']['kode']); ?>&nbsp;</td>
		<td><?php echo h($vnilai['Vnilai']['nama_mata_pelajaran']); ?>&nbsp;</td>
		<td><?php echo h($vnilai['Vnilai']['nilai']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vnilai['Vnilai']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vnilai['Vnilai']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vnilai['Vnilai']['id']), array(), __('Are you sure you want to delete # %s?', $vnilai['Vnilai']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vnilai'), array('action' => 'add')); ?></li>
	</ul>
</div>
