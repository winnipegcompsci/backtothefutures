<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderType Entity.
 */
class OrderType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'order_type_name' => true,
        'orders' => true,
    ];
}
