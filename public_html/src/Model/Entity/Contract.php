<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contract Entity.
 */
class Contract extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'contract_name' => true,
        'balance' => true,
        'available' => true,
        'bond' => true,
        'source_contract_num' => true,
        'contract_type_id' => true,
        'freeze' => true,
        'profit' => true,
        'unprofit' => true,
        'rights' => true,
        'source_contract' => true,
        'contract_type' => true,
        'fixed_leverage_positions' => true,
        'orders' => true,
        'positions' => true,
    ];
}
