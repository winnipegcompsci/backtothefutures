<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderTypesTable Test Case
 */
class OrderTypesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'OrderTypes' => 'app.order_types',
        'Orders' => 'app.orders',
        'Contracts' => 'app.contracts',
        'ContractTypes' => 'app.contract_types',
        'FixedLeveragePositions' => 'app.fixed_leverage_positions',
        'LeverageRates' => 'app.leverage_rates',
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
        $config = TableRegistry::exists('OrderTypes') ? [] : ['className' => 'App\Model\Table\OrderTypesTable'];
        $this->OrderTypes = TableRegistry::get('OrderTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderTypes);

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
