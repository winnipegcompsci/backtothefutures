<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FixedLeveragePositionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FixedLeveragePositionsTable Test Case
 */
class FixedLeveragePositionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'FixedLeveragePositions' => 'app.fixed_leverage_positions',
        'Contracts' => 'app.contracts',
        'SourceContracts' => 'app.source_contracts',
        'ContractTypes' => 'app.contract_types',
        'LeverageRates' => 'app.leverage_rates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FixedLeveragePositions') ? [] : ['className' => 'App\Model\Table\FixedLeveragePositionsTable'];
        $this->FixedLeveragePositions = TableRegistry::get('FixedLeveragePositions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FixedLeveragePositions);

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
