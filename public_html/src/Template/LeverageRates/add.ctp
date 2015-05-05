<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Leverage Rates'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="leverageRates form large-10 medium-9 columns">
    <?= $this->Form->create($leverageRate); ?>
    <fieldset>
        <legend><?= __('Add Leverage Rate') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('leverage_rate_name');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
