<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Trade'), ['action' => 'edit', $trade->trade_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trade'), ['action' => 'delete', $trade->trade_id], ['confirm' => __('Are you sure you want to delete # {0}?', $trade->trade_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Trades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trade'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="trades view large-10 medium-9 columns">
    <h2><?= h($trade->trade_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Amount') ?></h6>
            <p><?= h($trade->amount) ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= h($trade->price) ?></p>
            <h6 class="subheader"><?= __('Tid') ?></h6>
            <p><?= h($trade->tid) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($trade->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($trade->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($trade->date) ?></p>
        </div>
    </div>
</div>
