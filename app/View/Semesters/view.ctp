<div class="semesters view">
<h2><?php echo __('Semester'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($semester['Semester']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kode'); ?></dt>
		<dd>
			<?php echo h($semester['Semester']['kode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tahun'); ?></dt>
		<dd>
			<?php echo h($semester['Semester']['tahun']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semester'); ?></dt>
		<dd>
			<?php echo h($semester['Semester']['semester']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Semester'), array('action' => 'edit', $semester['Semester']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Semester'), array('action' => 'delete', $semester['Semester']['id']), array(), __('Are you sure you want to delete # %s?', $semester['Semester']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Semesters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semester'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Nilais'); ?></h3>
	<?php if (!empty($semester['Nilai'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Siswa Id'); ?></th>
		<th><?php echo __('Mapel Id'); ?></th>
		<th><?php echo __('Semester Id'); ?></th>
		<th><?php echo __('Nilai'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($semester['Nilai'] as $nilai): ?>
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
