<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResellersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResellersTable Test Case
 */
class ResellersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResellersTable
     */
    public $Resellers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resellers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Resellers') ? [] : ['className' => ResellersTable::class];
        $this->Resellers = TableRegistry::get('Resellers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Resellers);

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
