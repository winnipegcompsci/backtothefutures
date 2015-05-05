<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contractType->contract_type_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contractType->contract_type_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contract Types'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contractTypes form large-10 medium-9 columns">
    <?= $this->Form->create($contractType); ?>
    <fieldset>
        <legend><?= __('Edit Contract Type') ?></legend>
        <?php
            echo $this->Form->input('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
