<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Instituto de Computação';



?>
<div class="site-index">

    <div class="jumbotron">
        <?= Html::img('@web/images/icomp.png',['align'=>'left', 'width'=>'90']); ?>
        <?= Html::jsFile('@web/js/basic.js'); ?>
        <h1 onmouseover="handleMouseOver(this)" onmouseout="handleMouseOut(this)" id="titulo" align="left">Instituto de Computação</h1>

       
    </div>

    <div class="body-content">

        

    </div>
</div>
