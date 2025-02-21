<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'rol_id' => 1,
                'perfil_id' => 1,
                'estado' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-02-21 01:46:46',
                'modified' => '2025-02-21 01:46:46',
            ],
        ];
        parent::init();
    }
}
