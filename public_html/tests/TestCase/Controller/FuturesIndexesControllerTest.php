<?php
namespace App\Test\TestCase\Controller;

use App\Controller\FuturesIndexesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\FuturesIndexesController Test Case
 */
class FuturesIndexesControllerTest extends IntegrationTestCase
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
        'Spotprices' => 'app.spotprices',
        'Currencies' => 'app.currencies'
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
