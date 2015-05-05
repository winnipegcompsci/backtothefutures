<?php
namespace App\Model\Table;

use App\Model\Entity\Trade;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trades Model
 */
class TradesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('trades');
        $this->displayField('trade_id');
        $this->primaryKey('trade_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('amount')
            ->allowEmpty('date')
            ->allowEmpty('price')
            ->allowEmpty('tid')
            ->allowEmpty('type');

        return $validator;
    }
}
