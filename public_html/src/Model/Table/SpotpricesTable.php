<?php
namespace App\Model\Table;

use App\Model\Entity\Spotprice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Spotprices Model
 */
class SpotpricesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('spotprices');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Currencies', [
            'foreignKey' => 'currency_id'
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
            ->add('low', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('low')
            ->add('high', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('high')
            ->add('last', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('last')
            ->add('buy', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('buy')
            ->add('sell', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('sell')
            ->add('volume', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('volume')
            ->requirePresence('timestamp', 'create')
            ->notEmpty('timestamp');

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
        $rules->add($rules->existsIn(['currency_id'], 'Currencies'));
        $rules->add($rules->existsIn(['source_id'], 'Sources'));
        return $rules;
    }
}
