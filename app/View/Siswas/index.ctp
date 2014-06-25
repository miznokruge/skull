<div class="siswas index">
	<h2><?php echo __('Siswas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nis'); ?></th>
			<th><?php echo $this->Paginator->sort('nama'); ?></th>
			<th><?php echo $this->Paginator->sort('alamat'); ?></th>
			<th><?php echo $this->Paginator->sort('tanggal_lahir'); ?></th>
			<th><?php echo $this->Paginator->sort('jenis_kelamin'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($siswas as $siswa): ?>
	<tr>
		<td><?php echo h($siswa['Siswa']['id']); ?>&nbsp;</td>
		<td><?php echo h($siswa['Siswa']['nis']); ?>&nbsp;</td>
		<td><?php echo h($siswa['Siswa']['nama']); ?>&nbsp;</td>
		<td><?php echo h($siswa['Siswa']['alamat']); ?>&nbsp;</td>
		<td><?php echo h($siswa['Siswa']['tanggal_lahir']); ?>&nbsp;</td>
		<td><?php echo h($siswa['Siswa']['jenis_kelamin']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $siswa['Siswa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $siswa['Siswa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $siswa['Siswa']['id']), array(), __('Are you sure you want to delete # %s?', $siswa['Siswa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Siswa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
