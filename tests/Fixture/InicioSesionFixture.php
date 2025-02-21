<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InicioSesionFixture
 */
class InicioSesionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'inicio_sesion';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'usuario' => 'Lorem ipsum dolor sit amet',
                'contrasena' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-02-21 04:51:42',
                'modified' => '2025-02-21 04:51:42',
            ],
        ];
        parent::init();
    }
}
