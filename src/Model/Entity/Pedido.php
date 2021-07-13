<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id_pedido
 * @property int $produto_id
 * @property \Cake\I18n\FrozenDate $data_venda
 * @property string $valor
 * @property int $caixa_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\Caixa $caixa
 */
class Pedido extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'produto_id' => true,
        'data_venda' => true,
        'valor' => true,
        'caixa_id' => true,
        'created' => true,
        'modified' => true,
        'produto' => true,
        'caixa' => true,
    ];
}
