<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Spotprice'), ['action' => 'edit', $spotprice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Spotprice'), ['action' => 'delete', $spotprice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spotprice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Spotprices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spotprice'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="spotprices view large-10 medium-9 columns">
    <h2><?= h($spotprice->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($spotprice->id) ?></p>
            <h6 class="subheader"><?= __('Currency Id') ?></h6>
            <p><?= $this->Number->format($spotprice->currency_id) ?></p>
            <h6 class="subheader"><?= __('Source Id') ?></h6>
            <p><?= $this->Number->format($spotprice->source_id) ?></p>
            <h6 class="subheader"><?= __('Low') ?></h6>
            <p><?= $this->Number->format($spotprice->low) ?></p>
            <h6 class="subheader"><?= __('High') ?></h6>
            <p><?= $this->Number->format($spotprice->high) ?></p>
            <h6 class="subheader"><?= __('Last') ?></h6>
            <p><?= $this->Number->format($spotprice->last) ?></p>
            <h6 class="subheader"><?= __('Buy') ?></h6>
            <p><?= $this->Number->format($spotprice->buy) ?></p>
            <h6 class="subheader"><?= __('Sell') ?></h6>
            <p><?= $this->Number->format($spotprice->sell) ?></p>
            <h6 class="subheader"><?= __('Volume') ?></h6>
            <p><?= $this->Number->format($spotprice->volume) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Timestamp') ?></h6>
            <p><?= h($spotprice->timestamp) ?></p>
        </div>
    </div>
</div>
