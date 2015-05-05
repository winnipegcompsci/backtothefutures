<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trade Entity.
 */
class Trade extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'amount' => true,
        'date' => true,
        'price' => true,
        'tid' => true,
        'type' => true,
        'trade' => true,
    ];
}
