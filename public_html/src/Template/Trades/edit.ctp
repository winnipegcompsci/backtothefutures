<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trade->trade_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trade->trade_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Trades'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="trades form large-10 medium-9 columns">
    <?= $this->Form->create($trade); ?>
    <fieldset>
        <legend><?= __('Edit Trade') ?></legend>
        <?php
            echo $this->Form->input('amount');
            echo $this->Form->input('date');
            echo $this->Form->input('price');
            echo $this->Form->input('tid');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
