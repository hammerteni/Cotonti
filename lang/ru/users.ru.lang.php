<?php

/**
 * Russian Language File for the Users Module (users.ru.lang.php)
 *
 * @package Cotonti
 * @version 0.9.0
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2014
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * User authentication
 */

$L['users_nameormail'] = 'Имя или email';
$L['users_rememberme'] = 'Запомнить меня';
$L['users_lostpass'] = 'Восстановить пароль';
$L['users_maintenance1'] = 'Сайт в режиме обслуживания';
$L['users_maintenance2'] = 'Вход только для администраторов и разрешенных групп';
$L['users_loggedinas'] = 'Вы вошли как';
$L['users_logoutfirst'] = 'Чтобы войти в другой аккаунт, вам нужно сначала выйти.';

/**
 * User registration
 */

$L['users_validemail'] = 'Действующий e-mail';
$L['users_validemailhint'] = '(необходим для подтверждения регистрации)';
$L['users_confirmpass'] = 'Подтвердить пароль';

$L['aut_contactadmin'] = 'В случае необходимости свяжитесь с администратором';
$L['aut_emailalreadyindb'] = 'Такой e-mail уже существует в базе данных';
$L['aut_emailbanned'] = 'Данный e-mail (или хост) заблокирован. Причина: ';
$L['aut_emailtooshort'] = 'Ошибочный e-mail';
$L['aut_invalidloginchars'] = 'Логин содержит недопустимые символы';
$L['aut_logintitle'] = 'Авторизация';
$L['aut_mailnoticetitle'] = 'Смена e-mail';
$L['aut_passwordmismatch'] = 'Введенные пароли не совпадают';
$L['aut_passwordtooshort'] = 'Пароль должен состоять из 4 или более символов: букв, цифр и символа подчеркивания';
$L['aut_registersubtitle'] = 'Заполните регистрационную форму в соответствии с указанными требованиями';
$L['aut_registertitle'] = 'Регистрация нового пользователя';
$L['aut_regreqnoticetitle'] = 'Запрос на регистрацию новой учетной записи';
$L['aut_regrequesttitle'] = 'Регистрация нового пользователя';
$L['aut_usernamealreadyindb'] = 'Пользователь с таким именем уже зарегистрирован в базе данных';
$L['aut_usernametooshort']= 'Имя пользователя должно состоять из 2 или более символов';

/**
 * User registration: messages
 */

$L['aut_regrequest'] = "Здравствуйте, %1\$s,\nВаша учетная запись в настоящий момент еще не активирована. Прежде чем вы сможете авторизоваться, администратор сайта должен активировать вашу учетную запись, после чего вам будет направлено еще одно подтверждение.";

$L['aut_regreqnotice'] = "Данное письмо направлено вам после запроса регистрации учетной записи пользователя %1\$s.\nПользователь %1\$s не сможет авторизоваться до тех пор, пока его учетная запись не будет активирована по следующей ссылке:\n%2\$s";

$L['aut_emailreg'] = "Здравствуйте, %1\$s,\nВам необходимо активировать учетную запись, используя следующую ссылку:\n%2\$s\nЧтобы отменить активацию учетной записи воспользуйтесь следующей ссылкой:\n%3\$s";

$L['aut_emailchange'] = "Здравствуйте, %1\$s,\nЧтобы изменить ваш e-mail адрес, воспользуйтесь следующей ссылкой:\n%2\$s";

/**
 * User list
 */

$L['users_usersperpage'] = 'Пользователей на страницу';
$L['users_usersinthissection'] = 'Всего пользователей';

$L['pro_emailandpass'] = 'Вы не можете изменить и e-mail и пароль одновременно';
$L['pro_passdiffer'] = 'Введенные пароли не совпадают';
$L['pro_passtoshort'] = 'Пароль должен состоять из 4 или более символов: букв, цифр и символа подчеркивания';
$L['pro_subtitle'] = 'Настройки ваших личных данных';
$L['pro_title'] = 'Ваша учетная запись';
$L['pro_wrongpass'] = 'Вы не ввели текущий пароль либо он неверен';
$L['pro_invalidbirthdate'] = 'The birthdate is invalid.';

$L['useed_accountactivated'] = 'Учетная запись активирована';
$L['useed_email'] = 'Данное письмо направлено вам после активации вашей учетной записи. Теперь вы можете авторизоваться на сайте, используя свое имя пользователя и пароль.';
$L['useed_subtitle'] = '&nbsp;';
$L['useed_title'] = 'Правка';

$L['use_allbannedusers'] = 'Заблокированные учетные записи';
$L['use_allinactiveusers'] = 'Неактивированные учетные записи';
$L['use_allusers'] = 'Все пользователи';
$L['use_byfirstletter'] = 'Имена пользователей на';
$L['use_subtitle'] = 'Зарегистрированные пользователи';
$L['use_title'] = 'Пользователи';

$L['pasrec_title'] = 'Восстановление пароля';
$L['pasrec_email1'] = "Здравствуйте, %1\$s,\nИспользуйте указанную ниже ссылку для смены пароля:\n%2\$s\n\nВнимание: если вы не обращались за сменой пароля, сообщаем вам, что запрос был сделан %4\$s с IP-адреса %3\$s.";
$L['pasrec_email2'] = 'По вашему запросу создан новый пароль. Измените его при первой возможности и удалите данное письмо. Ваш новый пароль:';
$L['pasrec_explain1'] = 'Введите ваш email.';
$L['pasrec_explain2'] = 'Получив письмо, воспользуйтесь ссылкой для смены пароля.';
$L['pasrec_explain3'] = 'Дважды подтвердив смену пароля, вы получите email с паролем, сгенерированным случайным образом.';
$L['pasrec_explain4'] = 'Если вы очистили поле для email\'а в своем профиле, восстановить пароль самостоятельно вы не сможете. В этом случае вам необходимо отправить Email администратору сайта.';
$L['pasrec_mailsent'] = 'Письмо отправлено. Проверьте свой почтовый ящик и воспользуйтесь отправленной вам ссылкой. Затем следуйте инструкциям по установке нового пароля.';
$L['pasrec_mailsent2'] = 'Пароль изменен. Пожалуйста, проверьте ваш почтовый ящик через несколько минут, чтобы получить новый пароль.';
$L['pasrec_request'] = 'Запрос';
$L['pasrec_youremail'] = 'Ваш email: ';

/**
 * User details
 */

$L['users_sendpm'] = 'Отправить личное сообщение';

/**
 * User profile & edit
 */

$L['users_id'] = 'ID пользователя';
$L['users_hideemail'] = 'Скрывать e-mail';
$L['users_pmnotify'] = 'Уведомлять о новых личных сообщениях';
$L['users_pmnotifyhint'] = '(получать e-mail уведомление при получении нового личного сообщения)';
$L['users_newpass'] = 'Установить новый пароль';
$L['users_newpasshint1'] = '(оставьте пустым чтобы сохранить текущий)';
$L['users_newpasshint2'] = '(введите новый пароль дважды)';
$L['users_oldpasshint'] = '(введите свой текущий пароль чтобы установить новый)';
$L['users_lastip'] = 'Последний IP';
$L['users_logcounter'] = 'Всего авторизаций';
$L['users_deleteuser'] = '!Удалить пользователя!';

/**
 * Moved from theme.lang
 */

$themelang['usersprofile_Emailpassword'] = 'Ваш текущий пароль';
$themelang['usersprofile_Emailnotes'] = '<p><b>Порядок смены e-mail (если разрешено администратором и при обязательном подтверждении нового e-mail):</b></p><ol><li>Действие вашего текущего e-mail будет приостановлено</li><li>В целях безопасности вам необходимо указать текущий пароль для доступа к учетной записи</li><li>Для подтверждения нового e-mail вам необходимо повторно активировать учетную запись по электронной почте</li><li>До подтверждения нового e-mail действие вашей учетной записи будет приостановлено</li><li>После подтверждения нового e-mail ваша учетная запись будет вновь активирована</li><li>Будьте аккуратны при вводе нового e-mail: в случае ошибки вы не сможете его исправить</li><li>Если вы все-таки допустили ошибку при вводе нового e-mail, обратитесь к администратору.</li></ol><p><b>При отсутствии обязательного подтверждения нового e-mail, изменения вступают в силу немедленно.</b></p>';
