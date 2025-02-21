<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InicioSesionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InicioSesionTable Test Case
 */
class InicioSesionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InicioSesionTable
     */
    protected $InicioSesion;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.InicioSesion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('InicioSesion') ? [] : ['className' => InicioSesionTable::class];
        $this->InicioSesion = $this->getTableLocator()->get('InicioSesion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InicioSesion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InicioSesionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InicioSesionTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
