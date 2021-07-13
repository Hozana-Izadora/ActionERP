<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caixa $caixa
 */
?>

<?php $this->assign('title', __('Add Caixa') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'Listar Caixa' => ['action'=>'index'],
      'Add',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($caixa) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('descricao');
      echo $this->Form->control('data_entrada');
      echo $this->Form->control('data_saida');
      echo $this->Form->control('faturamento');
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
