<?php
namespace App\Model\Table;

use App\Model\Entity\Contract;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contracts Model
 */
class ContractsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('contracts');
        $this->displayField('contract_id');
        $this->primaryKey('contract_id');
        $this->belongsTo('ContractTypes', [
            'foreignKey' => 'contract_type_id'
        ]);
        $this->hasMany('FixedLeveragePositions', [
            'foreignKey' => 'contract_id'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'contract_id'
        ]);
        $this->hasMany('Positions', [
            'foreignKey' => 'contract_id'
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
            ->allowEmpty('contract_name')
            ->add('balance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('balance')
            ->add('available', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('available')
            ->allowEmpty('bond')
            ->allowEmpty('source_contract_num')
            ->allowEmpty('freeze')
            ->allowEmpty('profit')
            ->allowEmpty('unprofit')
            ->allowEmpty('rights');

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
        $rules->add($rules->existsIn(['contract_type_id'], 'ContractTypes'));
        return $rules;
    }
}
