<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = 'Create Aluno';
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arrayscursos'=>$arrayscursos,
    ]) ?>
    
    
    <?php  
    if(Yii::$app->session->getFlash('sucess')): ?>
        <div class="sucess-summary">
            <?php echo Yii::$app->session->getFlash('sucess');  ?>
        </div>
    <?php endif; ?>

</div>
