<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Состояние счётчиков электроэнергии.';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Система учёта электроэнергии<br>в квартире №52</h1>

        <?= Html::img('@web/images/soe_52.jpg', ['alt' => 'My logo']) ?>
        <br><br>
        <p>
            <?= Yii::$app->user->isGuest ? (
                '<a class="btn btn-lg btn-success" href="/login">Вход</a>'
            ) : (
                Html::beginForm(['/logout'], 'post')
                . Html::submitButton(
                    'Выход',
                    ['class' => 'btn btn-lg btn-success']
                )
                . Html::endForm()
            )
            ?>
        </p>
    </div>

</div>
