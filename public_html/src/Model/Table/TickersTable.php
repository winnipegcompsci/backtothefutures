<?php
namespace App\Model\Table;

use App\Model\Entity\Ticker;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tickers Model
 */
class TickersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tickers');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('FromCurrencies', [
            'foreignKey' => 'from_currency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ToCurrencies', [
            'foreignKey' => 'to_currency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sources', [
            'foreignKey' => 'source_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('ticker_name', 'create')
            ->notEmpty('ticker_name');

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
