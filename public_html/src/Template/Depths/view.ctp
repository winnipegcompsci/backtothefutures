<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Depth'), ['action' => 'edit', $depth->depths_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Depth'), ['action' => 'delete', $depth->depths_id], ['confirm' => __('Are you sure you want to delete # {0}?', $depth->depths_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Depths'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Depth'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rates'), ['controller' => 'Rates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rate'), ['controller' => 'Rates', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="depths view large-10 medium-9 columns">
    <h2><?= h($depth->depths_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($depth->date) ?></p>
            <h6 class="subheader"><?= __('Contract Type') ?></h6>
            <p><?= h($depth->contract_type) ?></p>
            <h6 class="subheader"><?= __('Rate') ?></h6>
            <p><?= $depth->has('rate') ? $this->Html->link($depth->rate->rate_id, ['controller' => 'Rates', 'action' => 'view', $depth->rate->rate_id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Depths Id') ?></h6>
            <p><?= $this->Number->format($depth->depths_id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Asks') ?></h6>
            <?= $this->Text->autoParagraph(h($depth->asks)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Bids') ?></h6>
            <?= $this->Text->autoParagraph(h($depth->bids)); ?>

        </div>
    </div>
</div>
