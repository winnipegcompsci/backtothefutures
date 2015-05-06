<?php
namespace App\Model\Table;

use App\Model\Entity\Order;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 */
class OrdersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('orders');
        $this->displayField('order_id');
        $this->primaryKey('order_id');
        $this->belongsTo('Contracts', [
            'foreignKey' => 'id'
        ]);
        $this->belongsTo('LeverageRates', [
            'foreignKey' => 'leverage_rate_id'
        ]);
        $this->belongsTo('OrderTypes', [
            'foreignKey' => 'order_type_id'
        ]);
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
            ->allowEmpty('create_date')
            ->add('deal_amount', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('deal_amount')
            ->allowEmpty('fee')
            ->allowEmpty('price')
            ->allowEmpty('price_average')
            ->allowEmpty('status')
            ->allowEmpty('symbol');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['contract_id'], 'Contracts'));
        $rules->add($rules->existsIn(['leverage_rate_id'], 'LeverageRates'));
        $rules->add($rules->existsIn(['order_type_id'], 'OrderTypes'));
        return $rules;
    }
}
