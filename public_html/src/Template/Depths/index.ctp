<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Depth'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rates'), ['controller' => 'Rates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rate'), ['controller' => 'Rates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="depths index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date') ?></th>
            <th><?= $this->Paginator->sort('contract_type') ?></th>
            <th><?= $this->Paginator->sort('rate_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($depths as $depth): ?>
        <tr>
            <td><?= $this->Number->format($depth->id) ?></td>
            <td><?= h($depth->date) ?></td>
            <td><?= h($depth->contract_type) ?></td>
            <td>
                <?= $depth->has('rate') ? $this->Html->link($depth->rate->rate_id, ['controller' => 'Rates', 'action' => 'view', $depth->rate->rate_id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $depth->depths_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $depth->depths_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $depth->depths_id], ['confirm' => __('Are you sure you want to delete # {0}?', $depth->depths_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
