<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PositionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PositionsController Test Case
 */
class PositionsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Positions' => 'app.positions',
        'Contracts' => 'app.contracts',
        'SourceContracts' => 'app.source_contracts',
        'ContractTypes' => 'app.contract_types',
        'FixedLeveragePositions' => 'app.fixed_leverage_positions',
        'LeverageRates' => 'app.leverage_rates',
        'Orders' => 'app.orders',
        'OrderTypes' => 'app.order_types'
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
