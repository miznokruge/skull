<div class="siswas view">
<h2><?php echo __('Siswa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($siswa['Siswa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nis'); ?></dt>
		<dd>
			<?php echo h($siswa['Siswa']['nis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($siswa['Siswa']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($siswa['Siswa']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tanggal Lahir'); ?></dt>
		<dd>
			<?php echo h($siswa['Siswa']['tanggal_lahir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jenis Kelamin'); ?></dt>
		<dd>
			<?php echo h($siswa['Siswa']['jenis_kelamin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Siswa'), array('action' => 'edit', $siswa['Siswa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Siswa'), array('action' => 'delete', $siswa['Siswa']['id']), array(), __('Are you sure you want to delete # %s?', $siswa['Siswa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Siswas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Siswa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Nilais'); ?></h3>
	<?php if (!empty($siswa['Nilai'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Siswa Id'); ?></th>
		<th><?php echo __('Mapel Id'); ?></th>
		<th><?php echo __('Semester Id'); ?></th>
		<th><?php echo __('Nilai'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($siswa['Nilai'] as $nilai): ?>
		<tr>
			<td><?php echo $nilai['id']; ?></td>
			<td><?php echo $nilai['siswa_id']; ?></td>
			<td><?php echo $nilai['mapel_id']; ?></td>
			<td><?php echo $nilai['semester_id']; ?></td>
			<td><?php echo $nilai['nilai']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'nilais', 'action' => 'view', $nilai['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'nilais', 'action' => 'edit', $nilai['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'nilais', 'action' => 'delete', $nilai['id']), array(), __('Are you sure you want to delete # %s?', $nilai['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
