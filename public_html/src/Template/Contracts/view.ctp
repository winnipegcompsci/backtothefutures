<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contract'), ['action' => 'edit', $contract->contract_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contract'), ['action' => 'delete', $contract->contract_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->contract_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contract Types'), ['controller' => 'ContractTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract Type'), ['controller' => 'ContractTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contracts view large-10 medium-9 columns">
    <h2><?= h($contract->contract_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Contract Name') ?></h6>
            <p><?= h($contract->contract_name) ?></p>
            <h6 class="subheader"><?= __('Bond') ?></h6>
            <p><?= h($contract->bond) ?></p>
            <h6 class="subheader"><?= __('Source Contract Id') ?></h6>
            <p><?= h($contract->source_contract_id) ?></p>
            <h6 class="subheader"><?= __('Contract Type') ?></h6>
            <p><?= $contract->has('contract_type') ? $this->Html->link($contract->contract_type->contract_type_id, ['controller' => 'ContractTypes', 'action' => 'view', $contract->contract_type->contract_type_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Freeze') ?></h6>
            <p><?= h($contract->freeze) ?></p>
            <h6 class="subheader"><?= __('Profit') ?></h6>
            <p><?= h($contract->profit) ?></p>
            <h6 class="subheader"><?= __('Unprofit') ?></h6>
            <p><?= h($contract->unprofit) ?></p>
            <h6 class="subheader"><?= __('Rights') ?></h6>
            <p><?= h($contract->rights) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Contract Id') ?></h6>
            <p><?= $this->Number->format($contract->contract_id) ?></p>
            <h6 class="subheader"><?= __('Balance') ?></h6>
            <p><?= $this->Number->format($contract->balance) ?></p>
            <h6 class="subheader"><?= __('Available') ?></h6>
            <p><?= $this->Number->format($contract->available) ?></p>
        </div>
    </div>
</div>
