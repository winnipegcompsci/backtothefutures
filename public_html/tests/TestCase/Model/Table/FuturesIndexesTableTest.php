<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuturesIndexesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuturesIndexesTable Test Case
 */
class FuturesIndexesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'FuturesIndexes' => 'app.futures_indexes',
        'FuturesIndices' => 'app.futures_indices',
        'FromCurrencies' => 'app.from_currencies',
        'ToCurrencies' => 'app.to_currencies',
        'Sources' => 'app.sources',
        'Rates' => 'app.rates',
        'Currencies' => 'app.currencies',
        'Spotprices' => 'app.spotprices',
        'Tickers' => 'app.tickers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FuturesIndexes') ? [] : ['className' => 'App\Model\Table\FuturesIndexesTable'];
        $this->FuturesIndexes = TableRegistry::get('FuturesIndexes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FuturesIndexes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
