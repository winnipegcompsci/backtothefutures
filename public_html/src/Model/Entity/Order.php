<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity.
 */
class Order extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'amount' => true,
        'contract_id' => true,
        'create_date' => true,
        'deal_amount' => true,
        'fee' => true,
        'leverage_rate_id' => true,
        'source_order_id' => true,
        'price' => true,
        'price_average' => true,
        'status' => true,
        'symbol' => true,
        'order_type_id' => true,
        'order' => true,
        'contract' => true,
        'leverage_rate' => true,
        'source_order' => true,
        'order_type' => true,
    ];
}
