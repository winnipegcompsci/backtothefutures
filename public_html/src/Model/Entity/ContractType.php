<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContractType Entity.
 */
class ContractType extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
    ];
}
