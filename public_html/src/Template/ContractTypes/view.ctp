<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contract Type'), ['action' => 'edit', $contractType->contract_type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contract Type'), ['action' => 'delete', $contractType->contract_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractType->contract_type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contract Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract Type'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contractTypes view large-10 medium-9 columns">
    <h2><?= h($contractType->contract_type_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Contract Type Name') ?></h6>
            <p><?= h($contractType->contract_type_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Contract Type Id') ?></h6>
            <p><?= $this->Number->format($contractType->contract_type_id) ?></p>
        </div>
    </div>
</div>
