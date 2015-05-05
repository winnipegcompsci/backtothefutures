<?php
namespace App\Model\Table;

use App\Model\Entity\Position;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positions Model
 */
class PositionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('positions');
        $this->displayField('position_id');
        $this->primaryKey('position_id');
        $this->belongsTo('Contracts', [
            'foreignKey' => 'contract_id'
        ]);
        $this->belongsTo('LeverageRates', [
            'foreignKey' => 'leverage_rate_id'
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
            ->allowEmpty('force_liquidation_price')
            ->allowEmpty('buy_amount')
            ->allowEmpty('buy_available')
            ->allowEmpty('buy_price_avg')
            ->allowEmpty('buy_profit_real')
            ->allowEmpty('contract_type')
            ->allowEmpty('date_created')
            ->allowEmpty('sell_amount')
            ->allowEmpty('sell_available')
            ->allowEmpty('sell_price_avg')
            ->allowEmpty('sell_price_real')
            ->allowEmpty('result');

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
        return $rules;
    }
}
