<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>

<?php $this->assign('title', __('Edit Pedido') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'Listar Pedidos' => ['action'=>'index'],
      'View' => ['action'=>'view', $pedido->id_pedido],
      'Edit',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($pedido) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('produto_id', ['options' => $produtos]);
      echo $this->Form->control('data_venda');
      echo $this->Form->control('valor');
      echo $this->Form->control('caixa_id', ['options' => $caixas]);
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $pedido->id_pedido],
          ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id_pedido), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>
