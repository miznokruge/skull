<div class="mapels view">
<h2><?php echo __('Mapel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mapel['Mapel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kode'); ?></dt>
		<dd>
			<?php echo h($mapel['Mapel']['kode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($mapel['Mapel']['nama']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mapel'), array('action' => 'edit', $mapel['Mapel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mapel'), array('action' => 'delete', $mapel['Mapel']['id']), array(), __('Are you sure you want to delete # %s?', $mapel['Mapel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mapels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mapel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('controller' => 'nilais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('controller' => 'nilais', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Nilais'); ?></h3>
	<?php if (!empty($mapel['Nilai'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Siswa Id'); ?></th>
		<th><?php echo __('Mapel Id'); ?></th>
		<th><?php echo __('Semester Id'); ?></th>
		<th><?php echo __('Nilai'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mapel['Nilai'] as $nilai): ?>
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
