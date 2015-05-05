<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ticker'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tickers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('ticker_name') ?></th>
            <th><?= $this->Paginator->sort('from_currency_id') ?></th>
            <th><?= $this->Paginator->sort('to_currency_id') ?></th>
            <th><?= $this->Paginator->sort('source_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tickers as $ticker): ?>
        <tr>
            <td><?= $this->Number->format($ticker->id) ?></td>
            <td><?= h($ticker->ticker_name) ?></td>
            <td><?= h($ticker->from_currency_id) ?></td>
            <td><?= h($ticker->to_currency_id) ?></td>
            <td>
                <?= $ticker->has('source') ? $this->Html->link($ticker->source->source_name, ['controller' => 'Sources', 'action' => 'view', $ticker->source->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ticker->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticker->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticker->id)]) ?>
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
