<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caixa[]|\Cake\Collection\CollectionInterface $caixas
 */
?>

<?php $this->assign('title', __('Caixa') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'Listar Caixa',
    ]
  ])
);
?>

<div class="card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><!-- --></h2>
    <div class="card-toolbox">
      <?= $this->Paginator->limitControl([], null, [
            'label'=>false,
            'class' => 'form-control-sm',
          ]); ?>
      <?= $this->Html->link(__('Novo Caixa'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
          <tr>
              <th><?= $this->Paginator->sort('id_caixa') ?></th>
              <th><?= $this->Paginator->sort('descricao') ?></th>
              <th><?= $this->Paginator->sort('data_entrada') ?></th>
              <th><?= $this->Paginator->sort('data_saida') ?></th>
              <th><?= $this->Paginator->sort('faturamento') ?></th>
              <!-- <th><?= $this->Paginator->sort('created') ?></th>
              <th><?= $this->Paginator->sort('modified') ?></th> -->
              <th class="actions"><?= __('Actions') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($caixas as $caixa): ?>
          <tr>
            <td><?= $this->Number->format($caixa->id_caixa) ?></td>
            <td><?= h($caixa->descricao) ?></td>
            <td><?= h($caixa->data_entrada) ?></td>
            <td><?= h($caixa->data_saida) ?></td>
            <td><?= h($caixa->faturamento) ?></td>
            <!-- <td><?= h($caixa->created) ?></td> -->
            <!-- <td><?= h($caixa->modified) ?></td> -->
            <td class="actions">
              <?= $this->Html->link(__('View'), ['action' => 'view', $caixa->id_caixa], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caixa->id_caixa], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caixa->id_caixa], ['class'=>'btn btn-xs btn-outline-danger', 'escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $caixa->id_caixa)]) ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->

  <div class="card-footer d-md-flex paginator">
    <div class="mr-auto" style="font-size:.8rem">
      <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
    </div>

    <ul class="pagination pagination-sm">
      <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next('<i class="fas fa-angle-right"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->last('<i class="fas fa-angle-double-right"></i>', ['escape'=>false]) ?>
    </ul>

  </div>
  <!-- /.card-footer -->
</div>
