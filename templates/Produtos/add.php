<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>

<?php $this->assign('title', __('Add Produto') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'Listar Produtos' => ['action'=>'index'],
      'Add',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($produto) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('produto');
      echo $this->Form->control('ativo', ['custom' => true]);
      echo $this->Form->control('valor');
      echo $this->Form->control('quantidade');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>
