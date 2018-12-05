<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Insertar un nuevo genero';
$this->params['breadcrumbs'][] = ['label' => 'Generos', 'url' => ['generos/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($generosForm, 'genero') ?>
    <div class="form-group">
        <?= Html::submitButton('Insertar genero', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['generos/index'], ['class' => 'btn btn-danger']) ?>
    </div>
<?php ActiveForm::end() ?>
