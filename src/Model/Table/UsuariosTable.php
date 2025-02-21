<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Rols
 * @property \App\Model\Table\PerfilesTable&\Cake\ORM\Association\BelongsTo $Perfils
 *
 * @method \App\Model\Entity\Usuario newEmptyEntity()
 * @method \App\Model\Entity\Usuario newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Usuario> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Usuario findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Usuario> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Usuario saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Usuario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usuario>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Usuario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usuario> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Usuario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usuario>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Usuario>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Usuario> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsuariosTable extends Table
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

        $this->setTable('usuarios');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Rols', [
            'foreignKey' => 'rol_id',
            'className' => 'Roles',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Perfils', [
            'foreignKey' => 'perfil_id',
            'className' => 'Perfiles',
            'joinType' => 'INNER',
        ]);
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->integer('rol_id')
            ->notEmptyString('rol_id');

        $validator
            ->integer('perfil_id')
            ->notEmptyString('perfil_id');

        $validator
            ->scalar('estado')
            ->allowEmptyString('estado');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->existsIn(['rol_id'], 'Rols'), ['errorField' => 'rol_id']);
        $rules->add($rules->existsIn(['perfil_id'], 'Perfils'), ['errorField' => 'perfil_id']);

        return $rules;
    }
}
