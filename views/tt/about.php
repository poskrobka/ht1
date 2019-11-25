<?php
/* @var $this yii\web\View */
$this->title = 'Страница IT';

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
        <div class="row">
             <div class="col-md-9">

<h1>Страница IT</h1>
<p>Добрый день!<p>
<p>Приветствуем Вас на странице отдел программирования и реализации услуг (ОПиРУ).<p>
<p>Наш отдел занимается оказанием услуг в IT-сфере, а именно: <p>

<ul>
<li>Системным  администрированием  ООО «Ньюлэнд» и СООО «Кенфордбел».</li>
<li>Разработка и поддержка сервисной программы для СООО «Кенфордбел».</li>
<li>Разработка и поддержка web-сайтов ООО «Ньюлэнд» и СООО «Кенфордбел».</li>
<li>Внедрение и поддержка телекоммуникационных проектов.</li>
<li>Продажа, настройка и обслуживание GSM-шлюзов.</li>

</ul>
<p>&nbsp;&nbsp;&nbsp;Вы всегда можете обратиться к нам за помощью для решения возникающих у Вас IT-проблем.  Для этого Вам необходимо зарегистрировать обращение на странице <a href="<?=Url::toRoute(['tt/index'])?>">Заявки</a>. После регистрации Вами заявки, будет выбран Исполнитель и Ваша заявка будет взята в работу. Оперативные заявки (например замена клавиатуры или подключение проектора в переговорном кабинете) обрабатываются в течении 30 минут. В случае, если в течении 30 минут нет возможности решить Вашу проблему, то в заявке будет установлен срок решения  проблемы. Например, при Заявке на замену картриджа -  срок решения 30 минут. А если необходимо переустановить ПО, то задача может занять больше времени, и в таком случае Исполнитель по заявке обязан указать планируемый срок реализации. В дальнейшем, если на выполнение задачи надо дополнительное время, Исполнитель обязан в рамках заявки уведомить об этом пользователю.</p>
<p>Обращаем Ваше внимание, что если Заявка не была зарегистрирована, то IT-услуга не будет оказываться. В случае обоснованной невозможности регистрации заявки, Вы можете обраться в службу системных администраторов по электронной почте - it-help@someproject.by или по одному из  телефонов. При этом, IT-специалист обязан зарегистрировать за Вас заявку, и после чего она  будет передана в работу.  </p>
<p><i>Наши сотрудники</i>:</p>
<p><b>Шиденко Игорь Александрович</b>
 - Начальник ОПиРУ.</p>
<p><b>Мачуйский Александр Васильевич</b>
 - заместитель начальника ОПиРУ.</p>
<p><b>
Бортник Сергей Николаевич</b>
 – Системный администратор, исполняет обязанности руководитель группы системных администраторов.</p>
<p><b>
Бычков Андрей Вячеславович</b>
 - Программист системный. Занимается поддержкой сложных технологических комплексов на основе серверов HP, Cisco.</p>
<p><b>
Грачев Алексей Анатольевич</b>
 - Системный администратор. Занимается настройкой и поддержкой телекоммуникационного оборудования (АТС, контакт-центр, GSM-шлюзы).</p>
<p><b>
Сакун Виталий Игоревич</b>
 - Системный администратор. Занимается поддержкой ПК, ПО и офисной оргтехники ООО «Ньюлэнд» и СООО «Кенфордбел».</p>
<p><b>
Кузьма Виктор Владимирович</b>
 - Системный администратор. Занимается учетом и поддержкой ПК, ПО и офисной оргтехники ООО «Ньюлэнд» и СООО «Кенфордбел».</p>
<p><b>
Алексеенков Алексей Сергеевич</b>
 - Ведущий инженер. Занимается продвижением и продажей GSM-шлюзов OpenVox. Также он являться ответственным за пожарную безопасность в ООО «Ньюлэнд».</p>
<p><b>
Тырчик Александр Сергеевич</b>
 – Инженер технической поддержки. Исполняет роль руководителя проекта внедрения.</p>
<p><b>
Андреенков Дмитрий Валерьевич</b>
 - Системный аналитик. Занимается разработкой системной архитектуры в рамках проектов для телекоммуникационных компаний и операторов связи.</p>
<p><b>
Могилевцев Иван Михайлович</b>
 - Инженер-программист. Разработчик решений на основе СУБД Oracle.</p>
<p><b>
Градусова Татьяна Павловна</b>
 - Руководитель группы web-разработки.</p>
<p><b>
Доружинская Юлия Леонидовна</b>
 - Специалист по сопровождению ПО. Исполняет роль бизнес-аналитика на проектах разработки WEB-приложений.</p>
<p><b>
Поскробка Александр Сергеевич</b>
 - Инженер-программист. Занимается разработкой WEB-приложений.</p>
<p><b>
Стрельцин Илья Николаевич</b>
 - Инженер-программист. Занимается разработкой WEB-приложений.</p>
<p><b>
Криницкий Алексей Петрович</b>
 - Ведущий инженер. Занимает продвижением и продажей оборудования  бесперебойного электропитания.</p>
</p
<div id="techsupport" style="display:none; overflow: hidden;"></div>

              </div>
</b>
<?php
  $this->registerJs("
  $('#techsupportlink').on('click', function(event) {
    if (typeof this.clicked != 'undefined') {
      $('#techsupport').slideToggle();
      return false;
    }
    this.clicked = true;
    $('body').css('cursor','wait');
    $.ajax(this.href)
    .done(function(data) {
      $('#techsupport').html(data).slideDown();
    })
    .fail(function() {
      console.log('error with ' + id);
    })
    .always(function() {
      $('body').css('cursor','');
    });
    return false;
  });
  ", $this::POS_READY, 'ajax');
?>