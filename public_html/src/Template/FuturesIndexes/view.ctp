<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Futures Index'), ['action' => 'edit', $futuresIndex->futures_index_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Futures Index'), ['action' => 'delete', $futuresIndex->futures_index_id], ['confirm' => __('Are you sure you want to delete # {0}?', $futuresIndex->futures_index_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Futures Indexes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Futures Index'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="futuresIndexes view large-10 medium-9 columns">
    <h2><?= h($futuresIndex->futures_index_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= h($futuresIndex->value) ?></p>
            <h6 class="subheader"><?= __('Source') ?></h6>
            <p><?= $futuresIndex->has('source') ? $this->Html->link($futuresIndex->source->source_name, ['controller' => 'Sources', 'action' => 'view', $futuresIndex->source->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Futures Index Id') ?></h6>
            <p><?= $this->Number->format($futuresIndex->futures_index_id) ?></p>
            <h6 class="subheader"><?= __('From Currency Id') ?></h6>
            <p><?= $this->Number->format($futuresIndex->from_currency_id) ?></p>
            <h6 class="subheader"><?= __('To Currency Id') ?></h6>
            <p><?= $this->Number->format($futuresIndex->to_currency_id) ?></p>
        </div>
    </div>
</div>
