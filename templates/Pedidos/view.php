<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>

<?php
$this->assign('title', __('Pedido') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'Listar Pedidos' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($pedido->id_pedido) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Produto') ?></th>
            <td><?= $pedido->has('produto') ? $this->Html->link($pedido->produto->id_produto, ['controller' => 'Produtos', 'action' => 'view', $pedido->produto->id_produto]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= h($pedido->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Caixa') ?></th>
            <td><?= $pedido->has('caixa') ? $this->Html->link($pedido->caixa->id_caixa, ['controller' => 'Caixas', 'action' => 'view', $pedido->caixa->id_caixa]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id Pedido') ?></th>
            <td><?= $this->Number->format($pedido->id_pedido) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Venda') ?></th>
            <td><?= h($pedido->data_venda) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pedido->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pedido->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $pedido->id_pedido],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $pedido->id_pedido), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $pedido->id_pedido], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


