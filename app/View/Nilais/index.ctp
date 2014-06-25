<div class="nilais index">
    <h2><?php echo __('Nilais'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('siswa_id'); ?></th>
                <th><?php echo $this->Paginator->sort('mapel_id'); ?></th>
                <th><?php echo $this->Paginator->sort('semester_id'); ?></th>
                <th><?php echo $this->Paginator->sort('nilai'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nilais as $nilai): ?>
                <tr>
                    <td><?php echo h($nilai['Nilai']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($nilai['Siswa']['nama'], array('controller' => 'siswas', 'action' => 'view', $nilai['Siswa']['id'])); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($nilai['Mapel']['kode'], array('controller' => 'mapels', 'action' => 'view', $nilai['Mapel']['id'])); ?>
                    </td>
                    <td>
                        <?php echo $this->Html->link($nilai['Semester']['kode'], array('controller' => 'semesters', 'action' => 'view', $nilai['Semester']['id'])); ?>
                    </td>
                    <td><?php echo h($nilai['Nilai']['nilai']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $nilai['Nilai']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nilai['Nilai']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nilai['Nilai']['id']), array(), __('Are you sure you want to delete # %s?', $nilai['Nilai']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Nilai'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Siswas'), array('controller' => 'siswas', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Siswa'), array('controller' => 'siswas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Mapels'), array('controller' => 'mapels', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Mapel'), array('controller' => 'mapels', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Semesters'), array('controller' => 'semesters', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Semester'), array('controller' => 'semesters', 'action' => 'add')); ?> </li>
    </ul>
</div>
