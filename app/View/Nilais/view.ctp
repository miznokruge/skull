<div class="nilais view">
<h2><?php echo __('Nilai'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nilai['Nilai']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siswa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nilai['Siswa']['id'], array('controller' => 'siswas', 'action' => 'view', $nilai['Siswa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mapel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nilai['Mapel']['id'], array('controller' => 'mapels', 'action' => 'view', $nilai['Mapel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semester'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nilai['Semester']['id'], array('controller' => 'semesters', 'action' => 'view', $nilai['Semester']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nilai'); ?></dt>
		<dd>
			<?php echo h($nilai['Nilai']['nilai']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nilai'), array('action' => 'edit', $nilai['Nilai']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nilai'), array('action' => 'delete', $nilai['Nilai']['id']), array(), __('Are you sure you want to delete # %s?', $nilai['Nilai']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nilais'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nilai'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Siswas'), array('controller' => 'siswas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Siswa'), array('controller' => 'siswas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mapels'), array('controller' => 'mapels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mapel'), array('controller' => 'mapels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semesters'), array('controller' => 'semesters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Semester'), array('controller' => 'semesters', 'action' => 'add')); ?> </li>
	</ul>
</div>
