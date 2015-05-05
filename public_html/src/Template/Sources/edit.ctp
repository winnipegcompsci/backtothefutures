<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $source->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Spotprices'), ['controller' => 'Spotprices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spotprice'), ['controller' => 'Spotprices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="sources form large-10 medium-9 columns">
    <?= $this->Form->create($source); ?>
    <fieldset>
        <legend><?= __('Edit Source') ?></legend>
        <?php
            echo $this->Form->input('source_name');
            echo $this->Form->input('apikey');
            echo $this->Form->input('secretkey');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
