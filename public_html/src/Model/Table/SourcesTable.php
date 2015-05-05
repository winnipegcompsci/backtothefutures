<?php
namespace App\Model\Table;

use App\Model\Entity\Source;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sources Model
 */
class SourcesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('sources');
        $this->displayField('source_name');
        $this->primaryKey('id');
        $this->hasMany('FuturesIndexes', [
            'foreignKey' => 'source_id'
        ]);
        $this->hasMany('Rates', [
            'foreignKey' => 'source_id'
        ]);
        $this->hasMany('Spotprices', [
            'foreignKey' => 'source_id'
        ]);
        $this->hasMany('Tickers', [
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
            ->allowEmpty('source_name')
            ->allowEmpty('apikey')
            ->allowEmpty('secretkey');

        return $validator;
    }
}
