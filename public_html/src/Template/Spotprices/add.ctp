<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Spotprices'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="spotprices form large-10 medium-9 columns">
    <?= $this->Form->create($spotprice); ?>
    <fieldset>
        <legend><?= __('Add Spotprice') ?></legend>
        <?php
            echo $this->Form->input('currency_id');
            echo $this->Form->input('source_id');
            echo $this->Form->input('low');
            echo $this->Form->input('high');
            echo $this->Form->input('last');
            echo $this->Form->input('buy');
            echo $this->Form->input('sell');
            echo $this->Form->input('volume');
            echo $this->Form->input('timestamp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
