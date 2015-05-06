<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contract Types'), ['controller' => 'ContractTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract Type'), ['controller' => 'ContractTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixed Leverage Positions'), ['controller' => 'FixedLeveragePositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixed Leverage Position'), ['controller' => 'FixedLeveragePositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contracts form large-10 medium-9 columns">
    <?= $this->Form->create($contract); ?>
    <fieldset>
        <legend><?= __('Add Contract') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('contract_name');
            echo $this->Form->input('balance');
            echo $this->Form->input('available');
            echo $this->Form->input('bond');
            echo $this->Form->input('source_contract_id');
            echo $this->Form->input('contract_type_id', ['options' => $contractTypes, 'empty' => true]);
            echo $this->Form->input('freeze');
            echo $this->Form->input('profit');
            echo $this->Form->input('unprofit');
            echo $this->Form->input('rights');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
