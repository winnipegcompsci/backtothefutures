<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RatesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RatesController Test Case
 */
class RatesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Rates' => 'app.rates',
        'Currencies' => 'app.currencies',
        'Spotprices' => 'app.spotprices',
        'Sources' => 'app.sources',
        'FuturesIndexes' => 'app.futures_indexes',
        'FromCurrencies' => 'app.from_currencies',
        'ToCurrencies' => 'app.to_currencies',
        'Tickers' => 'app.tickers',
        'Depths' => 'app.depths'
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
