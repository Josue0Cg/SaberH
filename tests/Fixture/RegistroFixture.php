<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistroFixture
 */
class RegistroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'registro';
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
                'rol' => 'Lorem ipsum dolor sit amet',
                'usuario' => 'Lorem ipsum dolor sit amet',
                'contrasena' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-02-21 04:40:34',
                'modified' => '2025-02-21 04:40:34',
            ],
        ];
        parent::init();
    }
}
