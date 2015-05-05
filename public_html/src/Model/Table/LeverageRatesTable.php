<?php
namespace App\Model\Table;

use App\Model\Entity\LeverageRate;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LeverageRates Model
 */
class LeverageRatesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('leverage_rates');
        $this->displayField('leverage_rate_id');
        $this->primaryKey('leverage_rate_id');
        $this->belongsTo('LeverageRates', [
            'foreignKey' => 'leverage_rate_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('leverage_rate_name')
            ->add('value', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('value');

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
        $rules->add($rules->existsIn(['leverage_rate_id'], 'LeverageRates'));
        return $rules;
    }
}
