<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FixedLeveragePosition Entity.
 */
class FixedLeveragePosition extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'buy_amount' => true,
        'buy_available' => true,
        'buy_bond' => true,
        'buy_flatprice' => true,
        'buy_price_avg' => true,
        'contract_id' => true,
        'contract_type_id' => true,
        'date_created' => true,
        'sell_amount' => true,
        'sell_available' => true,
        'sell_bond' => true,
        'sell_flatprice' => true,
        'sell_profit_loss_ratio' => true,
        'sell_price_avg' => true,
        'sell_price_real' => true,
        'symbol' => true,
        'leverage_rate_id' => true,
        'fixed_leverage_position' => true,
        'contract' => true,
        'contract_type' => true,
        'leverage_rate' => true,
    ];
}
