<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Listado de genero';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Generos</th>
        </thead>
        <tbody>
            <?php foreach ($filas as $fila): ?>
                <tr>
                    <td><?= Html::encode($fila['id']) ?></td>
                    <td><?= Html::encode($fila['genero']) ?></td>
                    <td>
                        <?= Html::a('Modificar', ['generos/update', 'id' => $fila['id']], ['class' => 'btn-xs btn-info']) ?>
                        <?= Html::a('Borrar', ['generos/delete', 'id' => $fila['id']], [
                            'class' => 'btn-xs btn-danger',
                            'data-confirm' => '¿Seguro que desea borrar?',
                            'data-method' => 'POST',
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<div class="row">
    <div class="text-center">
        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>
<div class="row">
    <div class="text-center">
        <?= Html::a('Insertar genero', ['generos/create'], ['class' => 'btn btn-info']) ?>
    </div>
</div>
