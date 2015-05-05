<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepthsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepthsTable Test Case
 */
class DepthsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Depths' => 'app.depths',
        'Rates' => 'app.rates',
        'Currencies' => 'app.currencies',
        'Spotprices' => 'app.spotprices',
        'Sources' => 'app.sources',
        'FuturesIndexes' => 'app.futures_indexes',
        'FromCurrencies' => 'app.from_currencies',
        'ToCurrencies' => 'app.to_currencies',
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
        $config = TableRegistry::exists('Depths') ? [] : ['className' => 'App\Model\Table\DepthsTable'];
        $this->Depths = TableRegistry::get('Depths', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Depths);

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
