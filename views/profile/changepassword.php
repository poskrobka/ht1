<?php
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php


$id=Yii::$app->request->get()['id'];
 ActiveForm::begin([
                                      'method' => 'post',
                                      'action' => ["$id"],
                                  ]);
             echo Html::label($error_message);
              echo "<br>";
              echo Html::label('Введите новый пароль');
              echo "<br>";
              echo Html::textInput('new_password', '', ['style'=>'width:500px;']);
              echo "<br>"; echo "<br>";
              echo "<p>";
              echo Html::submitButton($model->isNewRecord ? 'Create' : 'Сменить пароль', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'name'=>'pass', 'value'=>'1']);
              echo "</p>"; ?>
              <input type='hidden' name='id' value="<?php echo  $model->id; ?>" <?php;
              ActiveForm::end();

<<<<<<< .mine
$this->registerJS(" $('#submit').click(function () {j
    //$('.error').hide();
    var valueX = $('#new_password').val();
    var valueY = $('#new_password1').val();
    if (valueX != valueY) {
        alert('Пароли не совпадают!');
        return false;
    }
});    ");
=======
>>>>>>> .r553

$this->registerJS(" $('#new_password').showPassword({
  //  linkRightOffset: 5,
   // linkTopOffset: 11
  });");
?>