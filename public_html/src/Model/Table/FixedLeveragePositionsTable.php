<?php
namespace App\Model\Table;

use App\Model\Entity\FixedLeveragePosition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FixedLeveragePositions Model
 */
class FixedLeveragePositionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('fixed_leverage_positions');
        $this->displayField('fixed_leverage_position_id');
        $this->primaryKey('fixed_leverage_position_id');
        $this->belongsTo('FixedLeveragePositions', [
            'foreignKey' => 'fixed_leverage_position_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contracts', [
            'foreignKey' => 'contract_id'
        ]);
        $this->belongsTo('ContractTypes', [
            'foreignKey' => 'contract_type_id'
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
            ->allowEmpty('buy_amount')
            ->allowEmpty('buy_available')
            ->allowEmpty('buy_bond')
            ->allowEmpty('buy_flatprice')
            ->allowEmpty('buy_price_avg')
            ->allowEmpty('date_created')
            ->allowEmpty('sell_amount')
            ->allowEmpty('sell_available')
            ->allowEmpty('sell_bond')
            ->allowEmpty('sell_flatprice')
            ->allowEmpty('sell_profit_loss_ratio')
            ->allowEmpty('sell_price_avg')
            ->allowEmpty('sell_price_real')
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
        $rules->add($rules->existsIn(['fixed_leverage_position_id'], 'FixedLeveragePositions'));
        $rules->add($rules->existsIn(['contract_id'], 'Contracts'));
        $rules->add($rules->existsIn(['contract_type_id'], 'ContractTypes'));
        $rules->add($rules->existsIn(['leverage_rate_id'], 'LeverageRates'));
        return $rules;
    }
}
