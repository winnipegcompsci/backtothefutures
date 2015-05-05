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
        'contract_name' => true,
        'balance' => true,
        'available' => true,
        'bond' => true,
        'source_contract_id' => true,
        'contract_type_id' => true,
        'freeze' => true,
        'profit' => true,
        'unprofit' => true,
        'rights' => true,
        'contract' => true,
        'source_contract' => true,
        'contract_type' => true,
    ];
}
