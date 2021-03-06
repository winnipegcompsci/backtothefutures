<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LeverageRate Entity.
 */
class LeverageRate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'leverage_rate_name' => true,
        'value' => true,
        'fixed_leverage_positions' => true,
        'orders' => true,
        'positions' => true,
    ];
}
