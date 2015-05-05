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
        'leverage_rate_name' => true,
        'value' => true,
        'leverage_rate' => true,
    ];
}
