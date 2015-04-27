<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Currency Entity.
 */
class Currency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'currency_name' => true,
        'abbreviation' => true,
        'spotprices' => true,
    ];
}
