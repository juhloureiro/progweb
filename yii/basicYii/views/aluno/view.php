<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\db\Query;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
<?php if (Yii::$app->session->hasFlash('meuflash')): ?>
<div class="alert alert-success">
    <?php echo Yii::$app->session->getFlash('meuflash') ?>
</div>
<?php endif; ?>
   
    
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'matricula',
            'nome',
            'sexo',
             'id_curso',

            //'curso',
            'ano_ingresso',
        ],
    ]) ?>
    
    <p>Em nossa base, existem <?= $alunosAno ?> alunos de <?= $ano?>. </p>

</div>
