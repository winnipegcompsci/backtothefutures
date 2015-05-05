<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Position Entity.
 */
class Position extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'force_liquidation_price' => true,
        'buy_amount' => true,
        'buy_available' => true,
        'buy_price_avg' => true,
        'buy_profit_real' => true,
        'contract_id' => true,
        'contract_type' => true,
        'date_created' => true,
        'leverage_rate_id' => true,
        'sell_amount' => true,
        'sell_available' => true,
        'sell_price_avg' => true,
        'sell_price_real' => true,
        'result' => true,
        'position' => true,
        'contract' => true,
        'leverage_rate' => true,
    ];
}
