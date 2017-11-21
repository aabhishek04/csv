<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CcCardTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CcCardTable Test Case
 */
class CcCardTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CcCardTable
     */
    public $CcCard;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cc_card'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CcCard') ? [] : ['className' => CcCardTable::class];
        $this->CcCard = TableRegistry::get('CcCard', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CcCard);

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
