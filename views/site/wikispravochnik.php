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
                <div  class="fixedmenu">
                    <p><a href="<?=Url::toRoute(['site/wiki']) ?>">О компании</a></p>
                    <p><a href="<?=Url::toRoute(['site/wikitrebov']) ?>">Общие требования по работе с запросами</a></p>
                    <p><a href="<?=Url::toRoute(['site/wikiregistration']) ?>">Руководство пользователя</a></p>
<?php if ($internal_user) { ?>
                    <p><b>Справочник Типовых запросов</b></p>
<?php } ?>
                </div>
        </div>
                 
                 <div class="col-md-10">
<div>
    <p>&nbsp;</p>
    <table class="wikitable">
        <col style="width: 15%">
        <col style="width: 35%">
        <col>
        <col style="width: 25%">
        <tr>
            <td colspan="7" class='td yellow center'>
               Справочник типовых запросов 
            </td>
        </tr>
        <tr>
            <td class='td yellow center'>&nbsp;</td>
            <td class='td yellow center'>Порядок прохождения</td>
           
            <td class='td yellow center'>Тема</td>
            <td class='td yellow center'>Текст</td>
            <td class='td yellow center'>Тип</td>
            <td class='td yellow center'>Категория</td>
        </tr>
        <tr>
            <td class='td yellow center'>Установка операционной системы на рабочие станции</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Непосредственный руководитель Автора<br>
                3. it-help - it - подразделение <br>
                4. Buh-help - Бухгалтерия - если нужна закупка<br>
                5. it-help производит работу над заявкой<br>
                6. Автор принимает работу
            </td>
     
            <td class='td'>Установить ОС на РМ</td>
            <td class='td'>1. ФИО сотрудника , для которого нужно сделать установку ОС<br>
                2. Описание причины
            </td>
            <td class='td'>Установка и настройка</td>
            <td class='td'>Администри&shy;рова&shy;ние</td>
        </tr>
          <tr>
            <td class='td yellow center'>Установка прикладного программного обеспечения на рабочие станции</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Непосредтсвенный руководитель Автора<br>
                3. it-help - it - подразделение <br>
                4. Buh-help - Бухгалтерия - если нужна закупка<br>
                5. it-help производит работу над заявкой<br>
                6. Автор принимает работу
            </td>
           
            <td class='td'>Установить ППО на РМ</td>
            <td class='td'>1. ФИО сотрудника, для которого нужно сделать установку ППО <br>
                2. Описание причины<br>
                3. Перечень ПО, которое необходимо установить
            </td>
            <td class='td'>Установка и настройка</td>
            <td class='td'>Администри&shy;рова&shy;ние</td>
        </tr>
        <tr>
            <td class='td yellow center'>Модернизация персональных компьютеров и ноутбуков</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Непосредтсвенный руководитель Автора<br>
                3. it-help - it - подразделение <br>
                4. Buh-help - Бухгалтерия - если нужна закупка<br>
                5. it-help производит работу над заявкой<br>
                6. Автор принимает работу
            </td>
            
            <td class='td'>Модернизация оборудования</td>
            <td class='td'>1. ФИО сотрудника, для которого необходимо произвести модернизацию оборудования<br>
                2. Описание причины
            </td>
            <td class='td'>1. Запрос на обслуживание<br>
                2. Ошибка
            </td>
            <td class='td'>Техническое сопровожде&shy;ние</td>
        </tr>
        <tr>
            <td class='td yellow center'>Насткойка и подключение офисной техники</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Непосредтсвенный руководитель Автора<br>
                3. it-help - it - подразделение <br>
                4. Автор принимает работу
            </td>
          
            <td class='td'>Настроить и подключить офисную технику</td>
            <td class='td'>1. ФИО сотрудника, для которого необходимо произвести настройку и подключение офисной техники<br>
                2. Описание причины<br>
                3. Название техники, которую нужно настроить и подключить
            </td>
            <td class='td'>Запрос на обслуживание</td>
            <td class='td'>Техническое сопровожде&shy;ние</td>
        </tr>
        <tr>
            <td class='td yellow center'>Замена картриджей в принтерах, их заправка</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Непосредтсвенный руководитель Автора<br>
                3. it-help - it - подразделение <br>
                4. Buh-help - Бухгалтерия - если нужна закупка<br>
                5. it-help производит работу над заявкой<br>
                6. Автор принимает работу
            </td>
           
            <td class='td'>Заменить картридж в принтере</td>
            <td class='td'>1. ФИО сотрудника, для которого необходимо произвести замену картриджа</td>
            <td class='td'>Запрос на обслуживание</td>
            <td class='td'>Техническое сопровожде&shy;ние</td>
        </tr>
        <tr>
            <td class='td yellow center'>Заведение учетных записей пользователей</td>
            <td class='td'>1. Специалист по подбору персонала - автор заявки<br>
                2. Руководитель отдела пользователя, которого нужно создать<br>
                3. it-help - it - подразделение<br>
                4. Руководитель отдела пользователя, которого уже создал it-help
            </td>
           
            <td class='td'>Завести новую учетную запись</td>
            <td class='td'>1. ФИО сотрудника, для которого нужно завести новую учетную запись<br>
                2. Описание причины</td>
            <td class='td'>Запрос на обслуживание</td>
            <td class='td'>Техническое сопровожде&shy;ние</td>
        </tr>
          <tr>
            <td class='td yellow center'>Настройка почтовых клиентов</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Непосредтсвенный руководитель Автора<br>
                3. it-help - it - подразделение <br>
                4. Информирование Автора о выполнении заявки
            </td>
          
            <td class='td'>Настроить почтового клиента</td>
            <td class='td'>1. ФИО сотрудника, для которого необходимо произвести настройку нового почтового клиента<br>
                2. Описание причины
            </td>
            <td class='td'>Запрос на обслуживание</td>
            <td class='td'>Техническое сопровожде&shy;ние</td>
        </tr>
          <tr>
            <td class='td yellow center'>Ремонт персональных компьютеров и ноутбуков</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Непосредтсвенный руководитель Автора<br>
                3. it-help - it - подразделение <br>
                4. Buh-help - Бухгалтерия - если нужна закупка<br>
                5. it-help производит работу над заявкой<br>
                6. Автор принимает работу
            </td>
          
            <td class='td'>1. Произвести ремонт ПК<br>
                2. Произвести ремонт ноутбука
            </td>
            <td class='td'>1. ФИО сотрудника, для которого нужно произвести ремонт ПК или ноутбука<br>
                2. Описание причины
            </td>
            <td class='td'>Ошибка</td>
            <td class='td'>Техническое сопровожде&shy;ние</td>
        </tr>
          <tr>
            <td class='td yellow center'>Регистрация на отпуск</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Прямые руководители Автора до руководителя уровня отдела включительно<br>
                3. Руководитель компании<br>
                4. Kadri-help - отдел кадров <br>
                5. Buh - help - Бухгалтерия<br>
                6.  Автор закрывает заявку
            </td>
           
            <td class='td'>Предоставлние отпуска</td>
            <td class='td'>Прошу предоставить &lt;вид отпуска&gt; c &lt;дата начала отпуска&gt; по &lt;дата окончания отпуска&gt; в связи/по причине &lt;причина необходимости отпуска&gt;.
                Организация: &lt;название организации, в которой числится сотрудник&gt;
            </td>
            <td class='td'>Запрос на обслуживание</td>
            <td class='td'>Служебная записка</td>
        </tr>
          <tr>
            <td class='td yellow center'>Регистрация на отгул</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
                2. Прямые руководители Автора до руководителя уровня отдела включительно<br>
                3. Руководитель компании<br>
                4. Kadri-help - отдел кадров <br>
                5. Buh - help - Бухгалтерия<br>
                6.  Автор закрывает заявку
            </td>
           
            <td class='td'>Предоставлние отпуска</td>
            <td class='td'>1. Дата начала отгула<br>
                2. Длительность отгула<br>
                3. Вид отгула<br>
                4. Обоснование
            </td>
            <td class='td'>Запрос на обслуживание</td>
            <td class='td'>Служебная записка</td>
        </tr>
          <tr>
            <td class='td yellow center'>Бронирование переговорного кабинета</td>
            <td class='td'>1. Пользователь создает заявку (Автор)<br>
2. Секретарь принимает и оповещает Автора о возможности бронирования<br>
3. Автор закрывает заявку
            </td>
           
            <td class='td'>Бронирование переговорного кабинета</td>
            <td class='td'>1. Дата, на которую нужно забронировать кабинет<br>
2. Время, на которое нужно забронировать кабинет<br>
3. Продолжительность<br>

            </td>
            <td class='td'>Запрос на обслуживание</td>
            <td class='td'>Корпоратив&shy;ные вопросы</td>
        </tr>
    </table>


</div>


</div>
        </div>
        <?php
$this->registerCss("
.wikitable { margin-bottom: 50px; }
.td {text-align: left; vertical-align: top; border: 1px solid #888; padding: 4px; font-size: .95em; }
.yellow {background-color: #ff9900; color: white; vertical-align:middle;}
.center {text-align: center;}
");
?>