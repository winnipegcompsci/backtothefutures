<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Order Types'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="orderTypes form large-10 medium-9 columns">
    <?= $this->Form->create($orderType); ?>
    <fieldset>
        <legend><?= __('Add Order Type') ?></legend>
        <?php
            echo $this->Form->input('order_type_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
