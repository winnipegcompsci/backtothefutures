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
        $this->hasMany('FixedLeveragePositions', [
            'foreignKey' => 'leverage_rate_id'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'leverage_rate_id'
        ]);
        $this->hasMany('Positions', [
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
            ->allowEmpty('leverage_rate_name')
            ->add('value', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('value');

        return $validator;
    }
}
