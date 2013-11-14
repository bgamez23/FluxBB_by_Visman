<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Обновление FluxBB',
'Update message'				=>	'База данных вашего FluxBB устарела и требует обновления для дальнейшей работы. Если вы администратор этого форума, следуйте, пожалуйста, ниже указанным инструкциям.',
'Note'							=>	'Примечание:',
'Members message'				=>	'Действие может выполнить только администратор форума. Причины для волнения нет - вскоре форум снова будет функционировать!',
'Administrator only'			=>	'Этот шаг только для администратора форума!',
'Database password info'		=>	'Для обновления базы данных, пожалуйста, введите ее пароль доступа, указанный при установке форума. Если вы не помните пароль, загляните в файл \'config.php\' вашего форума.',
'Database password note'		=>	'Если вы используете SQLite (и следовательно не имеете пароля для доступа к базе), пожалуйста, используйте имя файла базы данных. Вводимое имя должно точно соответствовать тому, что указано в конфигурационном файле.',
'Database password'				=>	'Пароль базы данных',
'Maintenance'					=>	'Обслуживание',
'Maintenance message info'		=>	'Сообщение, которое будет показано пользователям во время процесса обновления. Этот текст не обрабатывается парсером, может содержать HTML.',
'Maintenance message'		    =>	'Сообщение обслуживания',
'Next'							=>	'Дальше',

'You are running error'			=>	'Вы используете %1$s версии %2$s. FluxBB %3$s требует как минимум %1$s %4$s для своей работы. Вы должны обновить ваш %1$s, прежде чем продолжить.',
'Version mismatch error'		=>	'Несоответствие версии. База данных \'%s\' не может быть сконвертирована этим скриптом до структуры текущей FluxBB.',
'Invalid file error'			=>	'Неправильное имя файла базы данных. Имя файла базы данных SQLite должно точно соответствовать тому, что указано в конфигурационном файле \'%s\'',
'Invalid password error'		=>	'Неправильный пароль базы данных. Для обновления FluxBB вы должны ввести пароль к базе форума в соответствии с данными из \'%s\'',
'No password error'				=>	'Отсутствует пароль базы данных',
'Script runs error'				=>	'Кажется данный скрипт запущен кем-то еще. Если это не так, вручную удалите файл \'%s\' и попробуйте снова',
'No update error'				=>	'Форум обновлять не нужно, так как версии совпадают',

'Intro 1'						=>	'Этот скрипт обновит базу данных вашего форума. Процедура обновления может занять от нескольких секунд до нескольких часов. Сделайте, пожалуйста, резервную копию базы форума.',
'Intro 2'						=>	'Вы прочитали документацию по обновлению форума? Если нет, то сначала прочитайте ее.',
'No charset conversion'			=>	'<strong>ВАЖНО!</strong> FluxBB обнаружил, что ваш PHP не содержит механизмов преобразования текста из одной кодировки в другую кроме как из ISO-8859-1 в UTF-8. То есть, если текущая кодировка базы данных отличается от ISO-8859-1, FluxBB не сможет преобразовать ее в UTF-8. Вы должны сделать это вручную. Или подключите к PHP библиотеки iconv и(или) mb_convert_encoding.',
'Enable conversion'				=>	'<strong>Разрешить преобразование:</strong> Если включено, то скрипт после преобразования структуры базы данных выполнит перекодировку всех текстовых полей в таблицах из текущей кодировки в UTF-8. Требуется только при обновлении форума с версии 1.2.',
'Current character set'			=>	'<strong>Текущая кодировка:</strong> Если основной язык на вашем форуме английский, оставьте значение по умолчанию. Если основной язык на вашем форуме не английский, то введите кодировку основного языкового пакета (обычно для русскоговорящего форума версии 1.2 это <strong>cp1251</strong>) <em>Ошибка в указании текущей кодировке испортит данные в базе при преобразовании!</em> Примечание: Требуется даже если старая база данных была в UTF-8.',
'Charset conversion'			=>	'Преобразование кодировки',
'Enable conversion label'		=>	'<strong>Разрешить преобразование</strong> (произвести конвертацию кодировки базы данных).',
'Current character set label'	=>	'Текущая кодировка',
'Current character set info'	=>	'По умолчанию для английского языка, иначе кодировка основного языкового пакета.',
'Start update'					=>	'Начать обновление',
'Error converting users'		=>	'Ошибка конвертации пользователей',
'Error info 1'					=>	'Возникла ошибка конвертации некоторых пользователей. Она могла произойти при переходе с версии 1.2, если несколько пользователей зарегистрировались с очень похожими именами, например "bob" и "böb".',
'Error info 2'					=>	'Ниже приведен список пользователей вызвавших ошибку. Пожалуйста, выберите для каждого новое имя. Переименованным пользователям автоматически будут отправлены электронные письма с уведомлением.',
'New username'					=>	'Новое имя пользователя',
'Required'						=>	'(Обязательно)',
'Correct errors'				=>	'Следующие ошибки должны быть исправлены:',
'Rename users'					=>	'Переименовать пользователей',
'Successfully updated'			=>	'База данных форума обновлена. Сейчас вы можете %s.',
'go to index'					=>	'перейти на главную страницу',

'Unable to lock error'			=>	'Невозможно записать статус обновления. Удостоверьтесь, что для PHP разрешена запись в папку \'%s\' и то, что сейчас ни кто не обновляет форум кроме вас.',

'Converting'					=>	'Конвертируется %s …',
'Converting item'				=>	'Конвертируется %1$s %2$s …',
'Preparsing item'				=>	'Препарсинг %1$s %2$s …',
'Rebuilding index item'			=>	'Восстановление индекса для %1$s %2$s',

'ban'							=>	'БАН',
'categories'					=>	'КАТЕГОРИИ',
'censor words'					=>	'ЦЕНЗУРИРУЕМЫЕ СЛОВА',
'configuration'					=>	'КОНФИГУРАЦИЯ',
'forums'						=>	'РАЗДЕЛЫ',
'groups'						=>	'ГРУППЫ',
'post'							=>	'СООБЩЕНИЕ',
'report'						=>	'ОТЧЕТ',
'topic'							=>	'ТЕМА',
'user'							=>	'ПОЛЬЗОВАТЕЛЬ',
'signature'						=>	'ПОДПИСЬ',

'Username too short error'		=>	'Имя пользователя должно быть хотя бы 2 символа длиной. Пожалуйста выберите другое (более длинное) имя.',
'Username too long error'		=>	'Имя пользователя должно быть не более 25 символов. Пожалуйста выберите другое (менее длинное) имя.',
'Username Guest reserved error'	=>	'Имя "гость" зарезервировано. Пожалуйста выберите другое.',
'Username IP format error'		=>	'Имя пользователя не может быть похоже на IP адрес. Пожалуйста выберите другое имя.',
'Username bad characters error'	=>	'Имя не может содержать символы \', " или [ и ] одновременно. Пожалуйста выберите другое имя.',
'Username BBCode error'			=>	'Имя не должно содержать символы форматирования (BBCode) которые используются на форуме. Пожалуйста выберите другое имя.',
'Username duplicate error'		=>	'Есть очень похожее имя - %s. Имена должны отличасться хотя бы одним алфавитно-цифровым символом (a-z или 0-9). Пожалуйста выберите другое имя.',

);
