<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Currency'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Spotprices'), ['controller' => 'Spotprices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spotprice'), ['controller' => 'Spotprices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="currencies index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('currency_name') ?></th>
            <th><?= $this->Paginator->sort('abbreviation') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($currencies as $currency): ?>
        <tr>
            <td><?= $this->Number->format($currency->id) ?></td>
            <td><?= h($currency->currency_name) ?></td>
            <td><?= h($currency->abbreviation) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $currency->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $currency->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $currency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $currency->id)]) ?>
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