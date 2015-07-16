<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <br><p><h4 style="color: purple">Esta é uma aplicação que visa o gerenciamento de cursos e alunos.</h4></p></br>
    <p>
        Date:<?php echo $data;?>
    </p>

    
</div>
