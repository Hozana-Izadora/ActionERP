<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id_produto
 * @property string $produto
 * @property bool $ativo
 * @property string $valor
 * @property int $quantidade
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 *
 * @property \App\Model\Entity\Pedido[] $pedidos
 */
class Produto extends Entity
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
        'produto' => true,
        'ativo' => true,
        'valor' => true,
        'quantidade' => true,
        'created' => true,
        'modified' => true,
        'pedidos' => true,
    ];
}
