<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedidos Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\BelongsTo $Produtos
 * @property \App\Model\Table\CaixasTable&\Cake\ORM\Association\BelongsTo $Caixas
 *
 * @method \App\Model\Entity\Pedido newEmptyEntity()
 * @method \App\Model\Entity\Pedido newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedido findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PedidosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('pedidos');
        $this->setDisplayField('id_pedido');
        $this->setPrimaryKey('id_pedido');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Produtos', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Caixas', [
            'foreignKey' => 'caixa_id',
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
            ->integer('id_pedido')
            ->allowEmptyString('id_pedido', null, 'create');

        $validator
            ->date('data_venda')
            ->requirePresence('data_venda', 'create')
            ->notEmptyDate('data_venda');

        $validator
            ->scalar('valor')
            ->maxLength('valor', 10)
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

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
        $rules->add($rules->existsIn(['produto_id'], 'Produtos'), ['errorField' => 'produto_id']);
        $rules->add($rules->existsIn(['caixa_id'], 'Caixas'), ['errorField' => 'caixa_id']);

        return $rules;
    }
}
