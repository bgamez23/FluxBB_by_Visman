<?php

// Language definitions used in admin_options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'Плохой HTTP_REFERER. Если вы передвинули форум в другую папку или на другой домен, необходимо поправить Base URL вручную в базе данных (см. параметр o_base_url в таблице config) после чего очистите кеш, удалив все .php файлы в папке /cache.',
'Must enter title message'			=>	'Вы должны ввести заголовок форума.',
'Invalid e-mail message'			=>	'Email админа введен неверно.',
'Invalid webmaster e-mail message'	=>	'Email вебмастера введен неверно.',
'SMTP passwords did not match'		=>	'Пароль SMTP должен быть введен дважды одинаково.',
'Enter announcement here'			=>	'Введите сюда своё объявление.',
'Enter rules here'					=>	'Введите сюда правила форума.',
'Default maintenance message'		=>	'Форум временно закрыт на обслуживание. Пожалуйста, попробуйте зайти через несколько минут.',
'Timeout error message'				=>	'Значение "Таймаут online" должно быть меньше чем "Таймаут посещения".',
'Options updated redirect'			=>	'Опции сохранены. Переадресация …',
'Options head'						=>	'Опции',

// Essentials section
'Essentials subhead'				=>	'Основное',
'Board title label'					=>	'Заголовок',
'Board title help'					=>	'Заголовок этого форума (выводится в шапке каждой страницы). Это поле <strong>не может</strong> содержать HTML.',
'Board desc label'					=>	'Описание',
'Board desc help'					=>	'Краткое описание этого форума (выводится в шапке каждой страницы). Это поле может содержать HTML.',
'Base URL label'					=>	'Base URL',
'Base URL help'						=>	'Полный URL форума без завершающей черты (т.е. http://www.mydomain.com/forums). <strong>Необходимо</strong> заполнить его правильно. Если вы получаете ошибку "Плохой HTTP_REFERER", вероятно здесь ошибка.',
'Base URL problem'          =>  'Your installation does not support automatic conversion of internationalized domain names. As your base URL contains special characters, you <strong>must</strong> use an online converter in order to avoid "Bad referer" errors.',
'Timezone label'					=>	'Часовой пояс по умолчанию',
'Timezone help'						=>	'Часовой пояс для гостей и новых пользователей.',
'DST label'							=>	'Поправка на Л.В.',
'DST help'							=>	'Отметьте, если в вашем регионе применяется поправка на летнее время (сдвигает время на 1 час).',
'Language label'					=>	'Язык по умолчанию',
'Language help'						=>	'Язык по умолчанию для гостей и пользователей, кто не поменял его в своём профиле. Если вы уберете основные языковые файлы, это значение необходимо будет поправить.',
'Default style label'				=>	'Стиль по умолчанию',
'Default style help'				=>	'Стиль по умолчанию для гостей и пользователей, кто не поменял его в своём профиле.',

// Essentials section timezone options
'UTC-12:00' => '(UTC-12:00) Меридиан смены дат (запад)',
'UTC-11:00' => '(UTC-11:00) Самоа',
'UTC-10:00' => '(UTC-10:00) Гавайи',
'UTC-09:30' => '(UTC-09:30) Маркизские о-ва',
'UTC-09:00' => '(UTC-09:00) Аляска',
'UTC-08:30' => '(UTC-08:30) о-ва Питкэрн',
'UTC-08:00' => '(UTC-08:00) Тихоокеанское время',
'UTC-07:00' => '(UTC-07:00) Ла Пас, Чихуахуа',
'UTC-06:00' => '(UTC-06:00) Саскачеван, Мехико',
'UTC-05:00' => '(UTC-05:00) Богота, Кито, Лима',
'UTC-04:00' => '(UTC-04:00) Сантьяго, Джорджтаун',
'UTC-03:30' => '(UTC-03:30) Ньюфаундленд',
'UTC-03:00' => '(UTC-03:00) Буэнос-Айрес, Гренландия',
'UTC-02:00' => '(UTC-02:00) Среднеатлантическое время',
'UTC-01:00' => '(UTC-01:00) Азорские о-ва',
'UTC' => '(UTC) Гринвич, Рейкявик',
'UTC+01:00'	=> '(UTC+01:00) Варшава, Сараево, Париж',
'UTC+02:00'	=> '(UTC+02:00) Калининград, Киев, Афины, Иерусалим',
'UTC+03:00'	=> '(UTC+03:00) Москва, Санкт-Петербург, Багдад',
'UTC+03:30'	=> '(UTC+03:30) Тегеран',
'UTC+04:00'	=> '(UTC+04:00) Ижевск, Самара, Баку, Ереван',
'UTC+04:30'	=> '(UTC+04:30) Кабул',
'UTC+05:00'	=> '(UTC+05:00) Екатеринбург, Исламабад, Карачи',
'UTC+05:30'	=> '(UTC+05:30) Бомбей, Калькутта, Мадрас, Нью-Дели',
'UTC+05:45'	=> '(UTC+05:45) Катманду',
'UTC+06:00'	=> '(UTC+06:00) Новосибирск, Астана',
'UTC+06:30'	=> '(UTC+06:30) Рангун, Мьянма',
'UTC+07:00'	=> '(UTC+07:00) Красноярск, Бангкок',
'UTC+08:00'	=> '(UTC+08:00) Иркутск, Гонконг, Пекин',
'UTC+08:45'	=> '(UTC+08:45) Юговосточная Австралия',
'UTC+09:00'	=> '(UTC+09:00) Якутск, Токио, Сеул',
'UTC+09:30'	=> '(UTC+09:30) Аделаида, Дарвин',
'UTC+10:00'	=> '(UTC+10:00) Владивосток, Магадан, Сидней',
'UTC+10:30'	=> '(UTC+10:30) остров Лорд Хау',
'UTC+11:00'	=> '(UTC+11:00) Чокурдах, Соломоновы о-ва',
'UTC+11:30'	=> '(UTC+11:30) Норфолкские о-ва',
'UTC+12:00'	=> '(UTC+12:00) Анадырь, Петропавловск-Камчатский',
'UTC+12:45'	=> '(UTC+12:45) о-ва Чатем',
'UTC+13:00'	=> '(UTC+13:00) Нуку-алофа',
'UTC+14:00'	=> '(UTC+14:00) о-ва Лайн',

// Timeout Section
'Timeouts subhead'			=>	'Время и таймауты',
'Time format label'			=>	'Формат времени',
'PHP manual'						=>	'Руководство по PHP',
'Time format help'			=>	'[Текущий формат: %s]. Загляните в %s за подробностями.',
'Date format label'			=>	'Формат даты',
'Date format help'			=>	'[Текущий формат: %s]. Загляните в %s за подробностями.',
'Visit timeout label'		=>	'Таймаут визита',
'Visit timeout help'		=>	'Количество секунд бездействия пользователя до того как его "время последнего визита" будет изменено (влияет на индикатор новых сообщений).',
'Online timeout label'	=>	'Таймаут online',
'Online timeout help'		=>	'Количество секунд бездействия пользователя до того как он будет удалён из списка online.',
'Redirect time label'		=>	'Время на переадресацию',
'Redirect time help'		=>	'Пауза в секундах при переадресации. Если установить в 0, страница переадресации не будет показана (не рекомендуется).',

// Display Section
'Display subhead'					=>	'Вид форума',
'Version number label'				=>	'Номер версии',
'Version number help'				=>	'Показывать номер версии FluxBB в подвале страницы.',
'Info in posts label'				=>	'Информация о пользователе',
'Info in posts help'				=>	'Показывать информацию об авторе сообщения на странице с темой. Сюда входят данные о месте жительства, дата регистрации, счетчик сообщений и контакты (email и вебстраница).',
'Post count label'					=>	'Счетчик сообщений',
'Post count help'					=>	'Показывать количество сообщений, отправленных пользователями (в темах, профиле и списке пользователей).',
'Smilies label'						=>	'Смайлы в сообщениях',
'Smilies help'						=>	'Преобразовывать смайлы в графические иконки.',
'Smilies sigs label'				=>	'Смайлы в подписи',
'Smilies sigs help'					=>	'Преобразовывать смайлы в подписях.',
'Clickable links label'				=>	'Распознавать ссылки',
'Clickable links help'				=>	'Если включено, FluxBB будет автоматически распознавать URL-ы в сообщениях и делать их кликабельными гиперссылками.',
'Topic review label'				=>	'Просмотр темы',
'Topic review help'					=>	'Максимальное количество отображаемых сообщений при ответе (новые сверху). Установите в 0 чтобы выключить.',
'Topics per page label'				=>	'Тем на страницу',
'Topics per page help'				=>	'Значение по умолчанию сколько заголовков тем выводить на странице раздела. Пользователь может установить своё значение.',
'Posts per page label'				=>	'Сообщений на страницу',
'Posts per page help'				=>	'Значение по умолчанию сколько сообщений выводить на странице с темой. Пользователь может установить своё значение.',
'Indent label'						=>	'Размер отступа',
'Indent help'						=>	'Если поставить 8, отступы внутри тегов [code][/code] будут делаться табуляцими. Иначе отступы будут отбиваться пробелами.',
'Quote depth label'					=>	'Макс. глубина [quote]',
'Quote depth help'					=>	'Сколько раз тег [quote] может вкладываться в другие [quote], все теги свыше указанного порога будут игнорироваться.',

// Features section
'Features subhead'					=>	'Тонкости',
'Quick post label'					=>	'Быстрый ответ',
'Quick post help'					=>	'Если включено, FluxBB добавит форму быстрого ответа внизу страницы с темой. Таким образом пользователи могут отправлять ответ быстрее.',
'Users online label'				=>	'Пользователи online',
'Users online help'					=>	'Показывать на главной странице форума информацию о гостях и зарегистрированных пользователях online.',
'Censor words label'				=>	'Цензура',
'Censor words help'					=>	'Включите эту опцию чтобы фильтровать нецензурные слова. См. больше на странице %s.',
'Signatures label'					=>	'Подписи',
'Signatures help'					=>	'Разрешить пользователям использовать подписи под своими сообщениями.',
'User has posted label'				=>	'Метка где писал',
'User has posted help'				=>	'Показывать точки перед заголовками тем на странице viewforum.php в случае, если пользователь писал в этой теме. Выключите, если хотите снизить загрузку сервера.',
'Topic views label'					=>	'Счетчик просмотров',
'Topic views help'					=>	'Отслеживать сколько раз тема просматривалась. Выключите, если хотите снизить загрузку сервера.',
'Quick jump label'					=>	'Быстрый переход',
'Quick jump help'					=>	'Разрешить быстрый переход на другой раздел (выпадающий список разделов).',
'GZip label'						=>	'Сжатие GZip',
'GZip help'							=>	'Если включено, FluxBB будет использовать сжатие gzip для всех страниц форума. Это уменьшает траффик, но немного нагружает CPU. Для работы необходимо чтобы PHP поддерживал zlib (--with-zlib). Замечание: Если вы уже используете модуль Apache mod_gzip или mod_deflate для сжатия страниц, не включайте эту опцию.',
'Search all label'					=>	'Поиск по всем разделам',
'Search all help'					=>	'Если выключено, поиск будет разрешен только по одному разделу за раз. Выключите в случае если поисковые запросы ведут к высокой загрузке сервера.',
'Menu items label'					=>	'Доп. пункты меню',
'Menu items help'					=>	'Можно добавить любое количество пунктов в меню. Каждый пункт в формате X = &lt;a href="URL"&gt;LINK&lt;/a&gt; где X это позиция, в которую надо вставить ссылку (например, 0 - в начало или 2 - следом за "Пользователи"). Каждый пункт должен начинаться с новой строки.',

// Feeds section
'Feed subhead'						=>	'Ленты',
'Default feed label'				=>	'Лента по умолчанию',
'Default feed help'					=>	'Выберите ссылку, какой тип ленты следует выводить. Замечание: вариант "Убрать" не запретит ленту, а только спрячет ссылку.',
'None'								=>	'Убрать',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Кэширование',
'Feed TTL help'						=>	'Включите, если хотите снизить нагрузку на сервер.',
'No cache'							=>	'Не кэшировать',
'Minutes'							=>	'%d минут',

// Reports section
'Reports subhead'					=>	'Сигналы',
'Reporting method label'			=>	'Подача сигнала',
'Internal'							=>	'Админка',
'By e-mail'							=>	'Email',
'Both'								=>	'И то, и другое',
'Reporting method help'				=>	'Выберите способ манипулирования пользовательскими сигналами. Варианты: отображать сообщения в специальном разделе админки, отправлять админам на почту (список рассылки есть ниже) или оба варианта разом.',
'Mailing list label'				=>	'Список рассылки',
'Mailing list help'					=>	'Список адресов через запятую. Люди из этого списка будут получать сигналы по Email.',

// Avatars section
'Avatars subhead'					=>	'Аватары',
'Use avatars label'					=>	'Использовать аватары',
'Use avatars help'					=>	'Если включено, пользователи смогут грузить собственные аватары, которые будут отображаться под их статусом.',
'Upload directory label'			=>	'Папка для загрузки',
'Upload directory help'				=>	'Папка загрузки аватар (относительно корня форума). Необходимо дать PHP права на запись в эту папку.',
'Max width label'					=>	'Макс. ширина',
'Max width help'					=>	'Макс. разрешённая ширина аватары в пикселях (рекомендуется 60).',
'Max height label'					=>	'Макс. высота',
'Max height help'					=>	'Макс. разрешённая высота аватары в пикселях (рекомендуется 60).',
'Max size label'					=>	'Макс. размер',
'Max size help'						=>	'Макс. разрешённый размер аватары в байтах (рекомендуется 10240).',

// E-mail section
'E-mail subhead'					=>	'Почта',
'Admin e-mail label'				=>	'Почта Админа',
'Admin e-mail help'					=>	'Адрес администратора форума.',
'Webmaster e-mail label'			=>	'Почта Вебмастера',
'Webmaster e-mail help'				=>	'Этот адрес будет показан в поле "от кого" при рассылке с форума.',
'Forum subscriptions label'			=>	'Подписки разделов',
'Forum subscriptions help'			=>	'Разрешить пользователям подписываться на разделы (получать email, если будет создана новая тема).',
'Topic subscriptions label'			=>	'Подписки тем',
'Topic subscriptions help'			=>	'Разрешить пользователям подписываться на темы (получать email, если кто-то ответил).',
'SMTP address label'				=>	'Сервер SMTP',
'SMTP address help'					=>	'Адрес внешнего SMTP сервера на который отправлять письма. Можно дополнить номером порта если SMTP не использует порт по умолчанию 25 (пример: mail.myhost.com:3580). Оставьте пустым чтобы почтой занималась локальная программа mail.',
'SMTP username label'				=>	'SMTP username',
'SMTP username help'				=>	'Пользователь сервера SMTP. Заполняйте только если сервер этого требует (большинство серверов <strong>НЕ</strong> требуют авторизации).',
'SMTP password label'				=>	'SMTP password',
'SMTP change password help'			=>	'Установите галку, если хотите поменять или удалить пароль',
'SMTP password help'				=>	'Пароль для сервера SMTP. Заполняйте только если сервер этого требует (большинство серверов <strong>НЕ</strong> требуют авторизации).',
'SMTP SSL label'					=>	'SMTP через SSL',
'SMTP SSL help'						=>	'Шифровать соединение с сервером SMTP через SSL. Включать только если сервер SMTP требует этого и ваша версия PHP поддерживает SSL. Для TLS должно быть установлено значение <b>Нет</b>',

// Registration Section
'Registration subhead'				=>	'Регистрация',
'Allow new label'					=>	'Разрешить новые регистрации',
'Allow new help'					=>	'Определяет разрешена ли регистрация новых пользователей на форуме. Выключите, если на то есть особые причины.',
'Verify label'						=>	'Подтверждение регистрации',
'Verify help'						=>	'Если включено, после регистрации пользователи получают на указанный email письмо со случайным паролем. После получения письма пользователь может зайти на форум и поменять пароль в своём профиле, если посчитает нужным. Эта опция также заставляет пользователей подтвердить новый email в случае, если они захотят его сменить. Это эффективный способ избежать мусорных регистраций и позволяет гарантировать, что пользователь ввел свой настоящий email.',
'Report new label'					=>	'Отчет о регистрации',
'Report new help'					=>	'Если включено, FluxBB будет извещать людей из списка рассылки (см. выше) о вновь зарегистрированных пользователях.',
'Use rules label'					=>	'Правила форума',
'Use rules help'					=>	'Если включено, новый пользователь должен подтвердить согласие с правилами (см. текст ниже). Правила будут всегда доступны по ссылке в главном меню.',
'Rules label'						=>	'Текст правил',
'Rules help'						=>	'Вы можете ввести правила или иную информацию, с которой пользователь должен согласиться чтобы пройти регистрацию. Если вы включили показ правил выше, необходимо ввести сюда хоть что-нибудь, иначе опция будет выключена. Текст может содержать HTML.',
'E-mail default label'				=>	'Приватность email',
'E-mail default help'				=>	'Выберите уровень приватности по умолчанию для вновь регистрируемых пользователей.',
'Display e-mail label'				=>	'Показывать email другим пользователя.',
'Hide allow form label'				=>	'Спрятать email, но разрешить отправку писем через специальную форму.',
'Hide both label'					=>	'Спрятать email и запретить отправку писем.',

// Announcement Section
'Announcement subhead'				=>	'Объявления',
'Display announcement label'		=>	'Показывать объявление',
'Display announcement help'			=>	'Включите чтобы текст ниже отображался на форуме.',
'Announcement message label'		=>	'Текст объявления',
'Announcement message help'			=>	'Этот текст может содержать HTML.',

// Maintenance Section
'Maintenance subhead'				=>	'Обслуживание',
'Maintenance mode label'			=>	'Режим обслуживания',
'Maintenance mode help'				=>	'Если включено, форум будет доступен только для админов. Может использоваться, если надо временно выключить сайт для проведения каких-то работ. <strong>ВНИМАНИЕ! Не выходите с форума пока действует режим обслуживания.</strong> Вы не сможете войти обратно.',
'Maintenance message label'			=>	'Текст сообщения',
'Maintenance message help'			=>	'Сообщение, которое будет показываться посетителям форума пока действует режим обслуживания. Если оставить пустым, будет использован текст по умолчанию. Текст может содержать HTML.',

);
