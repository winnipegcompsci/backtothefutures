<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticker->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticker->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tickers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tickers form large-10 medium-9 columns">
    <?= $this->Form->create($ticker); ?>
    <fieldset>
        <legend><?= __('Edit Ticker') ?></legend>
        <?php
            echo $this->Form->input('ticker_name');
            echo $this->Form->input('from_currency_id');
            echo $this->Form->input('to_currency_id');
            echo $this->Form->input('source_id', ['options' => $sources]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
