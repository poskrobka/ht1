<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\UsersRoles */

$this->title = 'Удаление ролей пользователю';

?>
<div style='width:500px;'>
<div class="users-roles-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form_remove', [
        'model' => $model,
        'rolesArray' => $rolesArray,
    ]) ?>

</div>
    </div>
