<?php
namespace App\Test\TestCase\Controller;

use App\Controller\LeverageRatesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\LeverageRatesController Test Case
 */
class LeverageRatesControllerTest extends IntegrationTestCase
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
