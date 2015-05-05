<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rate'), ['action' => 'edit', $rate->rate_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rate'), ['action' => 'delete', $rate->rate_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rate->rate_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Depths'), ['controller' => 'Depths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Depth'), ['controller' => 'Depths', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rates view large-10 medium-9 columns">
    <h2><?= h($rate->rate_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Currency') ?></h6>
            <p><?= $rate->has('currency') ? $this->Html->link($rate->currency->currency_name, ['controller' => 'Currencies', 'action' => 'view', $rate->currency->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Source') ?></h6>
            <p><?= $rate->has('source') ? $this->Html->link($rate->source->source_name, ['controller' => 'Sources', 'action' => 'view', $rate->source->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($rate->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Time') ?></h6>
            <p><?= h($rate->time) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Depths') ?></h4>
    <?php if (!empty($rate->depths)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Asks') ?></th>
            <th><?= __('Bids') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Contract Type') ?></th>
            <th><?= __('Rate Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($rate->depths as $depths): ?>
        <tr>
            <td><?= h($depths->id) ?></td>
            <td><?= h($depths->asks) ?></td>
            <td><?= h($depths->bids) ?></td>
            <td><?= h($depths->date) ?></td>
            <td><?= h($depths->contract_type) ?></td>
            <td><?= h($depths->rate_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Depths', 'action' => 'view', $depths->depths_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Depths', 'action' => 'edit', $depths->depths_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Depths', 'action' => 'delete', $depths->depths_id], ['confirm' => __('Are you sure you want to delete # {0}?', $depths->depths_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
