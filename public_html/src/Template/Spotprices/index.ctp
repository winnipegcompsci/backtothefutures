<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Spotprice'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="spotprices index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('currency_id') ?></th>
            <th><?= $this->Paginator->sort('source_id') ?></th>
            <th><?= $this->Paginator->sort('low') ?></th>
            <th><?= $this->Paginator->sort('high') ?></th>
            <th><?= $this->Paginator->sort('last') ?></th>
            <th><?= $this->Paginator->sort('buy') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($spotprices as $spotprice): ?>
        <tr>
            <td><?= $this->Number->format($spotprice->id) ?></td>
            <td><?= $this->Number->format($spotprice->currency_id) ?></td>
            <td><?= $this->Number->format($spotprice->source_id) ?></td>
            <td><?= $this->Number->format($spotprice->low) ?></td>
            <td><?= $this->Number->format($spotprice->high) ?></td>
            <td><?= $this->Number->format($spotprice->last) ?></td>
            <td><?= $this->Number->format($spotprice->buy) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $spotprice->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $spotprice->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $spotprice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spotprice->id)]) ?>
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
