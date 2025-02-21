<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InicioSesion Model
 *
 * @method \App\Model\Entity\InicioSesion newEmptyEntity()
 * @method \App\Model\Entity\InicioSesion newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\InicioSesion> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InicioSesion get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\InicioSesion findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\InicioSesion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\InicioSesion> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InicioSesion|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\InicioSesion saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\InicioSesion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InicioSesion>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\InicioSesion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InicioSesion> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\InicioSesion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InicioSesion>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\InicioSesion>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InicioSesion> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InicioSesionTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('inicio_sesion');
        $this->setDisplayField('usuario');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('usuario')
            ->maxLength('usuario', 100)
            ->requirePresence('usuario', 'create')
            ->notEmptyString('usuario')
            ->add('usuario', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('contrasena')
            ->maxLength('contrasena', 255)
            ->requirePresence('contrasena', 'create')
            ->notEmptyString('contrasena');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['usuario']), ['errorField' => 'usuario']);

        return $rules;
    }
}
