<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Modificar un genero';
$this->params['breadcrumbs'][] = ['label' => 'Generos', 'url' => ['generos/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin() ?>
    <?= $form->field($generosForm, 'genero') ?>
    <div class="form-group">
        <?= Html::submitButton('Modificar genero', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Cancelar', ['generos/index'], ['class' => 'btn btn-danger']) ?>
    </div>
<?php ActiveForm::end() ?>
