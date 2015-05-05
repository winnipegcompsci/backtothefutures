<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rate Entity.
 */
class Rate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'time' => true,
        'currency_id' => true,
        'source_id' => true,
        'rate' => true,
        'currency' => true,
        'source' => true,
    ];
}
