<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ticker'), ['action' => 'edit', $ticker->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticker'), ['action' => 'delete', $ticker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticker->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticker'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tickers view large-10 medium-9 columns">
    <h2><?= h($ticker->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Ticker Name') ?></h6>
            <p><?= h($ticker->ticker_name) ?></p>
            <h6 class="subheader"><?= __('From Currency Id') ?></h6>
            <p><?= h($ticker->from_currency_id) ?></p>
            <h6 class="subheader"><?= __('To Currency Id') ?></h6>
            <p><?= h($ticker->to_currency_id) ?></p>
            <h6 class="subheader"><?= __('Source') ?></h6>
            <p><?= $ticker->has('source') ? $this->Html->link($ticker->source->source_name, ['controller' => 'Sources', 'action' => 'view', $ticker->source->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($ticker->id) ?></p>
        </div>
    </div>
</div>
