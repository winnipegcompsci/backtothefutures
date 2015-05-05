<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rate'), ['action' => 'edit', $rate->rate_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rate'), ['action' => 'delete', $rate->rate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rate->rate_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rates view large-10 medium-9 columns">
    <h2><?= h($rate->rate_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Currency') ?></h6>
            <p><?= $rate->has('currency') ? $this->Html->link($rate->currency->currency_name, ['controller' => 'Currencies', 'action' => 'view', $rate->currency->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Source') ?></h6>
            <p><?= $rate->has('source') ? $this->Html->link($rate->source->source_name, ['controller' => 'Sources', 'action' => 'view', $rate->source->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Rate Id') ?></h6>
            <p><?= $this->Number->format($rate->rate_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Time') ?></h6>
            <p><?= h($rate->time) ?></p>
        </div>
    </div>
</div>
