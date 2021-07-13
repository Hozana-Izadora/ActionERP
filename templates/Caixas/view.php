<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caixa $caixa
 */
?>

<?php
$this->assign('title', __('Caixa') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'Listar Caixa' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($caixa->id_caixa) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($caixa->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Faturamento') ?></th>
            <td><?= h($caixa->faturamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Caixa') ?></th>
            <td><?= $this->Number->format($caixa->id_caixa) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Entrada') ?></th>
            <td><?= h($caixa->data_entrada) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Saida') ?></th>
            <td><?= h($caixa->data_saida) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($caixa->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($caixa->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $caixa->id_caixa],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $caixa->id_caixa), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $caixa->id_caixa], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-pedidos view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Pedidos') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Pedidos' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Pedidos' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id Pedido') ?></th>
          <th><?= __('Produto Id') ?></th>
          <th><?= __('Data Venda') ?></th>
          <th><?= __('Valor') ?></th>
          <th><?= __('Caixa Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($caixa->pedidos)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Pedidos record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($caixa->pedidos as $pedidos) : ?>
        <tr>
            <td><?= h($pedidos->id_pedido) ?></td>
            <td><?= h($pedidos->produto_id) ?></td>
            <td><?= h($pedidos->data_venda) ?></td>
            <td><?= h($pedidos->valor) ?></td>
            <td><?= h($pedidos->caixa_id) ?></td>
            <td><?= h($pedidos->created) ?></td>
            <td><?= h($pedidos->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id_pedido], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id_pedido], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedidos', 'action' => 'delete', $pedidos->id_pedido], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id_pedido)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

