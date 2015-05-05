<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $futuresIndex->futures_index_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $futuresIndex->futures_index_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Futures Indexes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="futuresIndexes form large-10 medium-9 columns">
    <?= $this->Form->create($futuresIndex); ?>
    <fieldset>
        <legend><?= __('Edit Futures Index') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('from_currency_id');
            echo $this->Form->input('to_currency_id');
            echo $this->Form->input('value');
            echo $this->Form->input('source_id', ['options' => $sources, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
