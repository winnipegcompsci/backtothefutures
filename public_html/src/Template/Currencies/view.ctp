<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Currency'), ['action' => 'edit', $currency->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Currency'), ['action' => 'delete', $currency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $currency->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Currencies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Spotprices'), ['controller' => 'Spotprices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spotprice'), ['controller' => 'Spotprices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="currencies view large-10 medium-9 columns">
    <h2><?= h($currency->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Currency Name') ?></h6>
            <p><?= h($currency->currency_name) ?></p>
            <h6 class="subheader"><?= __('Abbreviation') ?></h6>
            <p><?= h($currency->abbreviation) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($currency->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Spotprices') ?></h4>
    <?php if (!empty($currency->spotprices)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Currency Id') ?></th>
            <th><?= __('Source Id') ?></th>
            <th><?= __('Low') ?></th>
            <th><?= __('High') ?></th>
            <th><?= __('Last') ?></th>
            <th><?= __('Buy') ?></th>
            <th><?= __('Sell') ?></th>
            <th><?= __('Volume') ?></th>
            <th><?= __('Timestamp') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($currency->spotprices as $spotprices): ?>
        <tr>
            <td><?= h($spotprices->id) ?></td>
            <td><?= h($spotprices->currency_id) ?></td>
            <td><?= h($spotprices->source_id) ?></td>
            <td><?= h($spotprices->low) ?></td>
            <td><?= h($spotprices->high) ?></td>
            <td><?= h($spotprices->last) ?></td>
            <td><?= h($spotprices->buy) ?></td>
            <td><?= h($spotprices->sell) ?></td>
            <td><?= h($spotprices->volume) ?></td>
            <td><?= h($spotprices->timestamp) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Spotprices', 'action' => 'view', $spotprices->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Spotprices', 'action' => 'edit', $spotprices->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Spotprices', 'action' => 'delete', $spotprices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spotprices->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
