<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Rate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rates index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('rate_id') ?></th>
            <th><?= $this->Paginator->sort('time') ?></th>
            <th><?= $this->Paginator->sort('currency_id') ?></th>
            <th><?= $this->Paginator->sort('source_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($rates as $rate): ?>
        <tr>
            <td><?= $this->Number->format($rate->rate_id) ?></td>
            <td><?= h($rate->time) ?></td>
            <td>
                <?= $rate->has('currency') ? $this->Html->link($rate->currency->currency_name, ['controller' => 'Currencies', 'action' => 'view', $rate->currency->id]) : '' ?>
            </td>
            <td>
                <?= $rate->has('source') ? $this->Html->link($rate->source->source_name, ['controller' => 'Sources', 'action' => 'view', $rate->source->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $rate->rate_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rate->rate_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rate->rate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rate->rate_id)]) ?>
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
