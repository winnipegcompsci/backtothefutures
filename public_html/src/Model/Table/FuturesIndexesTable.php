<?php
namespace App\Model\Table;

use App\Model\Entity\FuturesIndex;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuturesIndexes Model
 */
class FuturesIndexesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('futures_indexes');
        $this->displayField('futures_index_id');
        $this->primaryKey('futures_index_id');
        $this->belongsTo('FromCurrencies', [
            'foreignKey' => 'from_currency_id'
        ]);
        $this->belongsTo('ToCurrencies', [
            'foreignKey' => 'to_currency_id'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id'
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
        $rules->add($rules->existsIn(['from_currency_id'], 'FromCurrencies'));
        $rules->add($rules->existsIn(['to_currency_id'], 'ToCurrencies'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));
        return $rules;
    }
}
