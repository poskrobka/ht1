<?php
/* @var $this yii\web\View */
$this->title = 'Wiki';

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
       <div class="row">
          <div class="col-md-2">
                <div class="fixedmenu">
                    <p><a href="<?=Url::toRoute(['site/wiki']) ?>">О компании</a></p>
                    <p><a href="<?=Url::toRoute(['site/wikitrebov']) ?>">Общие требования по работе с запросами</a></p>
                    <p><b>Руководство пользователя</b></p>
<?php if ($internal_user) { ?>
                    <p><a href="<?=Url::toRoute(['site/wikispravochnik']) ?>">Справочник Типовых запросов</a></p>
<?php } ?>
                </div>
        </div>
                 
                 <div class="col-md-10">



<div>
<h2>Регистрация</h2>
<ol>
<li>
<p>С сайта <a href="http://support.someproject.by">support.someproject.by</a>, с формы авторизации (Рисунок  Форма авторизации) скачать шаблон для регистрации пользователя, для этого нажать на кнопку «Скачать»</p>
<p style="text-align: center;"><?=Html::img('@web/uploads/wiki/form_auth.png') ?></p>
<p style='text-align:center'>Форма авторизации</p>
</li>
<li>
<p>Шаблон, который вы скачали, заполнить:</p>
<ul>
<li>Компания — это место работы;</li>
<li>Отдел — это отдел, в котором работает пользователь, которого нужно зарегистрировать;</li>
<li>E-mail — e-mail пользователя, которого нужно зарегистрировать;</li>
<li>Должность — должность пользователя, которого нужно зарегистрировать;</li>
<li>Рабочий номер телефона — это номер телефона, по которому можно дозвониться пользователю, которого нужно зарегистрировать.</li>
<li>Список подсистем/услуг для предоставления доступа — перечислены подсистемы/услуги и продукты/наборы услуг, с которыми работает пользователь и к которым должен быть доступ в системе;</li>
<li>ФИО ответственного лица — фамилия имя и отчество автора заявки (руководителя).</li>
<li>e-mail — e-mail ответственного лица.</li>
</ul>
</li>
<li>
<p>После заполнения шаблона, необходимо письмо с запросом и выслать администратору на e-mail.</p>
<p>E-mail администратора можно найти в том же шаблоне заявки на регистрацию в поле «E-mail администратора».</p>
</li>
<li>
<p>Администратор сайта введет нового пользователя, заполнит все необходимые поля, распределит права доступа и отправит письмо о успешной регистрации с логином и паролем автору заявки (руководителю) и пользователю, которого зарегистрировал.</p></li>
</ol>
<h2>Авторизация</h2>
<ol>
<li>Для авторизации перейти на сайт <a href="http://support.someproject.by">support.someproject.by</a> , ввести в поле «Имя пользователя» - логин, который администратор выслал на e-mail и «Пароль» - пароль, который администратор выслал на e-mail, и нажать кнопку «Войти».</li>
</ol>
<h2>Работа с главной формой</h2>
<ol>
<li>В верхней части экрана есть кнопка «Wiki», при нажатии на которую можно ознакомиться с документацией по работе с сайтом, изучить руководство пользователя.</li>
<li>В верхней части экрана, при нажатии на «Фамилию И.О.» пользователя, произойдет переход на страницу личного профиля.</li>
<li>Кнопка «Выход» - выход со страницы с запросами на страницу авторизации.</li>
<li><p>Поиск запроса по:</p>
<ul>
<li>
<p>Номер запроса — ввести номер запроса и нажать кнопку «Найти»</p>
<p><?=Html::img('@web/uploads/wiki/find.png') ?></p>
</li>
<li>Тема запроса — ввести слова или сочетание слов для поиска запроса по теме и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
<li>Дата начала — поиск по дате создания запроса, можно ввести поиск по одному дню, а можно задать период <?=Html::img('@web/uploads/wiki/calendar.png') ?> и нажать кнопку "Найти" <?=Html::img('@web/uploads/wiki/find.png') ?></li>
</ul>
</li>
<li>
<p>Расширенный поиск — нажать на кнопку «Расширенный поиск» <?=Html::img('@web/uploads/wiki/ras_find.png') ?> , раскроется список полей для поиска запроса:</p>
<ul>
<li>
<p>Содержание запроса</p>
<p><?=Html::img('@web/uploads/wiki/sod_zap.png') ?> — ввести слова или сочетание слов для поиска по всем сообщениям к абонентским запросам, которые доступны для просмотра и нажать кнопку «Найти»
<?=Html::img('@web/uploads/wiki/find.png') ?></p>
</li>
<li>Проект <?=Html::img('@web/uploads/wiki/project.png') ?> — выбрать проект для поиска запросов, созданных в выбранном проекте и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
<li>Продукт/Набор услуг <?=Html::img('@web/uploads/wiki/product.png') ?> — выбрать проект, затем продукт/набор услуг для поиска запросов, созданных в выбранном продукте (для выбранного набора услуг) и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
<li>Подсистема/Услуга <?=Html::img('@web/uploads/wiki/podsistema.png') ?> — выбрать проект, продукт/набор услуг и затем подсистему/услугу для поиска запросов, созданных в выбранной подсистеме и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
<li>Автор <?=Html::img('@web/uploads/wiki/author.png') ?> — выбрать автора для поиска созданных им запросов и нажать кнопку «Найти»  <?=Html::img('@web/uploads/wiki/find.png') ?> </li>
<li>Исполнитель — выбрать исполнителя для поиска запросов, в которых выбранный пользователь является исполнителем и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
<li>Статус <?=Html::img('@web/uploads/wiki/status.png') ?> — поиск запросов с выбранным статусом и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
<li>Категория <?=Html::img('@web/uploads/wiki/category.png') ?> — поиск запросов с выбранной категорией и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
<li>Критичность <?=Html::img('@web/uploads/wiki/critich.png') ?> — поиск запросов с заданной критичностью и нажать кнопку «Найти» <?=Html::img('@web/uploads/wiki/find.png') ?></li>
</ul>
</li>
<li>Список абонентских запросов — вывод абонентских запросов с кратким описанием.</li>
</ol>
<h2>Просмотр абонентского запроса</h2>
<ol>
<li>Для просмотра запроса, необходимо на главное форме нажать на тему запроса и перейти на форму для просмотра.</li>
<li>На форме отображается информация о запросе, прикрепленные файлы, подзапросы, если они существуют и протокол абонентского запроса.</li>
<li>
<p>Добавление нового файла -  в поле «Добавить сообщение» нажать на прикрепление файла, выбрать нужный файл, добавить комментарий к этому файлу и нажать кнопку «Отправить»<br>
<?=Html::img('@web/uploads/wiki/dobavit_soob.png') ?></p><p>Прикрепленный файл отобразится в списке файлов, прикрепленных к запросу <?=Html::img('@web/uploads/wiki/spisok_files.png') ?></li>
<li>Добавление нового сообщения — в поле для ввода сообщений «Добавить сообщение:» ввести нужный текст и нажать на кнопку «Отправить»<br> <?=Html::img('@web/uploads/wiki/dobavit_soob.png') ?></li>
<li>Добавление нового подзапроса — в правом верхнем углу нажать кнопку «Добавить подзапрос» <?=Html::img('@web/uploads/wiki/plus.png') ?></li>
<li>Редактирование запроса — в правом верхнем углу нажать кнопку «Редактировать» <?=Html::img('@web/uploads/wiki/pencil.png') ?></li>
<li>В избранное — добавление запроса\подзапроса в избранные запросы. Для просмотра запросов, добавленных в избранные, необходимо воспользоваться главной страницей (страница приветствия), пунктом «Избранные».</li>
</ol>
<h2>Создание нового запроса</h2>
<ol>
<li>Добавление нового запроса — на главной форме нажать кнопку «Новый запрос» <?=Html::img('@web/uploads/wiki/new_zapros.png') ?></li>
<li>Добавление нового подзапроса — с формы для просмотра запроса, нажать на кнопку «Добавить подзапрос» <?=Html::img('@web/uploads/wiki/plus.png') ?></li>
<li>
<p>Форма для добавления нового запроса:</p>
<ul>
<li>Название <?=Html::img('@web/uploads/wiki/nazvanie.png') ?> — краткое описание темы запроса (не больше 250 символов).</li>
<li>Проект <?=Html::img('@web/uploads/wiki/project1.png') ?> — выбор проекта доступного пользователю.</li>
<li>Продукт/Набор услуг <?=Html::img('@web/uploads/wiki/product1.png') ?> — выбор продукта/набора услуг, который входит в выбранный проект.</li>
<li>Подсистема/Услуга <?=Html::img('@web/uploads/wiki/podsistema.png') ?> — выбор подсистемы/услуги, которая входит в выбранный продукт/набор услуг.</li>
<li>Дата создания <?=Html::img('@web/uploads/wiki/date_create.png') ?> формируется автоматически после нажатия кнопки «Отправить».</li>
<li>Дата планируемого завершения <?=Html::img('@web/uploads/wiki/date_end.png') ?> — ввод даты, на которую запланировано завершение работ по запросу.</li>
<li>Автор <?=Html::img('@web/uploads/wiki/author1.png') ?> — автоматически сгенерируется ФИО пользователя, который создает запрос.</li>
<li>Исполнитель — по умолчанию исполнителем является автор запроса, но исполнителя можно изменить на конкретное лицо, которое и является исполнителем данного запроса.</li>
<li>Тип <?=Html::img('@web/uploads/wiki/type1.png') ?> — выбор типа запроса.</li>
<li>Категория <?=Html::img('@web/uploads/wiki/category1.png') ?> — выбор категории запроса.</li>
<li>Критичность <?=Html::img('@web/uploads/wiki/critichnost1.png') ?> — выбор степени критичности запроса.</li>
<li>Родительский запрос <?=Html::img('@web/uploads/wiki/roditelskiy_zapros.png') ?> если этот запрос будет являться подзапросом, то можно внести номер родительского запроса. Если этот запрос будет родительским запросом, то это поле оставить пустым.</li>
<li>Статус <?=Html::img('@web/uploads/wiki/status1.png') ?> — при нажатии кнопки «Отправить» статус запроса будет «Открыт».</li>
<li>% выполнения <?=Html::img('@web/uploads/wiki/vjpolneno1.png') ?> — при нажатии кнопки «Отправить» % выполнения будет равен нулю.</li>
<li>Информировать <?=Html::img('@web/uploads/wiki/informirovat.png') ?> — нажать кнопку «Добавить» <?=Html::img('@web/uploads/wiki/plus1.png') ?>, выбрать пользователей для информирования.</li>
<li>Тело запроса <?=Html::img('@web/uploads/wiki/telo_zaprosa.png') ?> — ввод полного описания запроса.</li>
<li>Прикрепить <?=Html::img('@web/uploads/wiki/prikrepit.png') ?> — добавление файлов, необходимых для работы с запросом.</li>
<li>Отправить <?=Html::img('@web/uploads/wiki/otpravit.png') ?> — после заполнения всех необходимых полей — нажать кнопку «Отправить» <?=Html::img('@web/uploads/wiki/otpravit.png') ?>.</li>
</ul>
</li>
</ol>
<h2>Создание нового подзапроса</h2>
<ol>
<li>Добавление нового подзапроса — с формы для просмотра запроса, нажать на кнопку «Новый подзапрос».</li>
<li>В верхней части экрана появится ссылка на родительский запрос <?=Html::img('@web/uploads/wiki/abonentskiy_zapros.png') ?></li>
<li>
<p>Форма для добавления нового подзапроса:</p>
<ul>
<li>Название <?=Html::img('@web/uploads/wiki/nazvanie.png') ?> — краткое описание темы запроса (не больше 250 символов).</li>
<li>Проект  <?=Html::img('@web/uploads/wiki/project2.png') ?> — автоматически проект будет равен проекту родительского запроса, но при необходимости его можно изменить.</li>
<li>Продукт/Набор услуг  <?=Html::img('@web/uploads/wiki/product2.png') ?>  — автоматически продукт/набор услуг будет равен продукту/набору услуг родительского запроса, но при необходимости его можно изменить.</li>
<li>Подсистема/Услуга <?=Html::img('@web/uploads/wiki/podsistema2.png') ?> — автоматически подсистема/услуга будет равна подсистеме/услуге родительского запроса, но при необходимости ее можно изменить.</li>
<li>Дата создания <?=Html::img('@web/uploads/wiki/date_create3.png') ?> формируется автоматически после нажатия кнопки «Отправить».</li>
<li>Дата планируемого завершения <?=Html::img('@web/uploads/wiki/date_end.png') ?> — ввод даты, на которую запланировано завершение работ по подзапросу.</li>
<li>Автор <?=Html::img('@web/uploads/wiki/author1.png') ?>  — автоматически сгенерируется ФИО пользователя, который создает подзапрос.
- Исполнитель — по умолчанию исполнителем является автор подзапроса, но при создании подзапроса исполнителя можно изменить на конкретное лицо, которое и будет исполнителем данного подзапроса.
</li>
<li>Тип <?=Html::img('@web/uploads/wiki/type1.png') ?> — выбор типа подзапроса.</li>
<li>Категория <?=Html::img('@web/uploads/wiki/category1.png') ?>  — выбор категории подзапроса.</li>
<li>Критичность <?=Html::img('@web/uploads/wiki/critichnost1.png') ?> — выбор степени критичности подзапроса.</li>
<li>Родительский запрос <?=Html::img('@web/uploads/wiki/roditelskiy_zapros.png') ?> — автоматически сформируется номер родительского запроса.</li>
<li>Статус <?=Html::img('@web/uploads/wiki/status1.png') ?>  при нажатии кнопки «Отправить» статус подзапроса будет «Открыт».</li>
<li>% выполнения <?=Html::img('@web/uploads/wiki/vjpolneno1.png') ?>  — при нажатии кнопки «Отправить» % выполнения будет равен нулю.</li>
<li>Информировать <?=Html::img('@web/uploads/wiki/informirovat.png') ?> — нажать кнопку «Добавить» <?=Html::img('@web/uploads/wiki/plus.png') ?>, выбрать пользователей для информирования.</li>
<li>Тело запроса <?=Html::img('@web/uploads/wiki/telo_zaprosa.png') ?> — ввод полного описания подзапроса.</li>
<li>Прикрепить <?=Html::img('@web/uploads/wiki/prikrepit.png') ?> — добавление файлов, необходимых для работы с подзапросом.</li>
<li>Отправить <?=Html::img('@web/uploads/wiki/otpravit.png') ?> — после заполнения всех необходимых полей </li>
<li>нажать кнопку «Отправить»<?=Html::img('@web/uploads/wiki/otpravit.png') ?></li>
</ul>
</li>
</ol>
<h2>Редактирование запроса</h2>
<ol>
<li>Редактирование запроса будет доступно пользователям с правом Просмотр + Редактирование или Все.</li>
<li>Для перехода на форму редактирования нужно зайти на форму для просмотра запроса и в правом верхнем углу нажать на кнопку «Редактировать» <?=Html::img('@web/uploads/wiki/pencil.png') ?></li>
<li>
<p>Поля для редактирования:</p>
<ul>
<li>Проект <?=Html::img('@web/uploads/wiki/project2.png') ?> — изменение на другой проект;</li>
<li>Продукт/Набор услуг <?=Html::img('@web/uploads/wiki/product2.png') ?>   — при изменении проекта, обязательным для измнения является и продукт/набор услуг;</li>
<li>Подсистема/Услуга <?=Html::img('@web/uploads/wiki/podsistema2.png') ?> — при измнеении продукта/набора услуг, обязательным для измнеения является и подсистема/услуга;</li>
<li>Тип <?=Html::img('@web/uploads/wiki/type2.png') ?> — изменение типа запроса;</li>
<li>Категория <?=Html::img('@web/uploads/wiki/category2.png') ?> — изменение категории запроса;</li>
<li>Критичность <?=Html::img('@web/uploads/wiki/critichnost2.png') ?> — изменение степени критичности запроса;</li>
<li>Дата создания <?=Html::img('@web/uploads/wiki/date_create3.png') ?> — поле недоступно для редактирования;</li>
<li>Дата планируемого завершения <?=Html::img('@web/uploads/wiki/date_end3.png') ?> — изменение даты запланируемого завершения;</li>
<li>Родительский запрос <?=Html::img('@web/uploads/wiki/roditelskiy_zapros3.png') ?> — это головной запрос, который группирует в себе подзапросы. Если запрос является родительским и его нужно сделать подзапросом, то внести номер родительского запроса. Если запрос является подзапросом и нужно изменить номер родительского запроса, то ввнести другой номер родительского запроса. Если запрос является подзапросом и его нужно сделать родительским запросом, то убрать номер родительского запроса;</li>
<li>Автор <?=Html::img('@web/uploads/wiki/author2.png') ?> — поле недостпуно для редактирования;</li>
<li>Исполнитель <?=Html::img('@web/uploads/wiki/otvetstvennoe_litco.png') ?> — выбор лица, которое будет исполнителем данного запроса;</li>
<li>Статус <?=Html::img('@web/uploads/wiki/status1.png') ?> — выбор статуса для запроса; </li>
<li>Выполнено, <?=Html::img('@web/uploads/wiki/vjpolneno80.png') ?> - ввод процента выполнения работ по запросу; </li>
<li>Информировать <?=Html::img('@web/uploads/wiki/informirovat.png') ?> — добавление лиц для информирование по нажатию кнопки «Добавить» <?=Html::img('@web/uploads/wiki/plus1.png') ?> ;</li>
<li>Добавление файлов <?=Html::img('@web/uploads/wiki/spisok_files.png') ?> — нажать на кнопку «Добавить», выбрать файл и нажать кнопку «Сохранить» <?=Html::img('@web/uploads/wiki/prikrepit.png') ?>;</li>
<li>Добавление подзапроса</li>
<li>Добавление сообщения — в поле для ввода сообщения ввести текст и нажать «Отправить»</li>
</ul>
</li>
</ol>
<h2>Просмотр профиля</h2>
<ol>
<li>Просмотр личного профиля — на любой открытой форме в верхей части экрана нажать на фамилию пользователя и перейти на просмотр личного профиля.</li>
<li>Просмотр профиля другого пользователя — на любой открытой форме нажать на фамилю нужного пользователя и перейти на страницу с информацией о выбранном пользователе.</li>
</ol>









</div>



</div>
        </div>