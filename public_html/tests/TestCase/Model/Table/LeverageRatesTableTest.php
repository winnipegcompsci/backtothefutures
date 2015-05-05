<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LeverageRatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LeverageRatesTable Test Case
 */
class LeverageRatesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'LeverageRates' => 'app.leverage_rates',
        'FixedLeveragePositions' => 'app.fixed_leverage_positions',
        'Contracts' => 'app.contracts',
        'ContractTypes' => 'app.contract_types',
        'Orders' => 'app.orders',
        'OrderTypes' => 'app.order_types',
        'Positions' => 'app.positions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LeverageRates') ? [] : ['className' => 'App\Model\Table\LeverageRatesTable'];
        $this->LeverageRates = TableRegistry::get('LeverageRates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LeverageRates);

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
}
