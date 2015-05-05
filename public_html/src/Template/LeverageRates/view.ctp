<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Leverage Rate'), ['action' => 'edit', $leverageRate->leverage_rate_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Leverage Rate'), ['action' => 'delete', $leverageRate->leverage_rate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $leverageRate->leverage_rate_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Leverage Rates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leverage Rate'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="leverageRates view large-10 medium-9 columns">
    <h2><?= h($leverageRate->leverage_rate_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Leverage Rate Name') ?></h6>
            <p><?= h($leverageRate->leverage_rate_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($leverageRate->id) ?></p>
            <h6 class="subheader"><?= __('Value') ?></h6>
            <p><?= $this->Number->format($leverageRate->value) ?></p>
        </div>
    </div>
</div>
