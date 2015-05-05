<?php
namespace App\Model\Table;

use App\Model\Entity\Depth;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Depths Model
 */
class DepthsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('depths');
        $this->displayField('depths_id');
        $this->primaryKey('depths_id');
        $this->belongsTo('Depths', [
            'foreignKey' => 'depths_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Rates', [
            'foreignKey' => 'rate_id'
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
            ->allowEmpty('asks')
            ->allowEmpty('bids')
            ->allowEmpty('date')
            ->allowEmpty('contract_type');

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
        $rules->add($rules->existsIn(['depths_id'], 'Depths'));
        $rules->add($rules->existsIn(['rate_id'], 'Rates'));
        return $rules;
    }
}
