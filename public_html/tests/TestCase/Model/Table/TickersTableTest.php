<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TickersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TickersTable Test Case
 */
class TickersTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Tickers' => 'app.tickers',
        'FromCurrencies' => 'app.from_currencies',
        'ToCurrencies' => 'app.to_currencies',
        'Sources' => 'app.sources',
        'Spotprices' => 'app.spotprices',
        'Currencies' => 'app.currencies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tickers') ? [] : ['className' => 'App\Model\Table\TickersTable'];
        $this->Tickers = TableRegistry::get('Tickers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tickers);

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
