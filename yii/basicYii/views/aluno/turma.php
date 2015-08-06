<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Curso;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Aluno */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Alunos';
$this->params['breadcrumbs'][] = $this->title;

?>

    <?php $form = ActiveForm::begin(['options' => ['method' => 'post'], 'id'=> 'turma-form',]); ?>

    <?= $form->field($model, 'ano_ingresso')->textInput() ?>


    <div class="form-group">
       <?= Html::submitButton('Consultar', ['class'=> 'btn btn-primary']) ;?>
    </div>

    <?php ActiveForm::end(); ?>




