<?php
# Version: 5.07
# Author: Mik Foxi admin@mikfoxi.com
# Copyright © 2017 - 2019
# License: GNU GPL v3 - https://www.gnu.org/licenses/gpl-3.0.en.html
# Website: https://antibot.cloud/

// емейл для платной cloud версии:
$ab_config['email'] = '';

// соль для хэширования, измените на свою (пароль, если для платной cloud версии):
$ab_config['salt'] = 'THeh45wg3r7e64';

// секретный суфикс (обязательно измените на свой) к имени файлов логов в папке /antibot/log/:
$ab_config['logsufix'] = 'YQm2JzZp9Ya7L2IoWTB2svxUAcm2';

// если оставить пустым: $ab_config['check_url'] = '';
// то будет применяться облачная проверка (для нее требуется указать емейл и пароль):
$ab_config['check_url'] = '/antibot/ab.php';

// время ожидания секунд про проверке (3 оптимально), 
// если используются счетчики статистики и указать слишком маленькую цифру, 
// то они не будут успевать загрузиться:
$ab_config['timer'] = 3;

// если сайт работает на https c поддержкой http/2.0
// 1 - пускать только юзеров, поддерживающих http2.
// 0 - пускать всех прошедших проверку куки.
$ab_config['http2only'] = 0;

// сохранять в белый список ip белых ботов по маске /24 для ipv4 и по маске /64 для ipv6.
// 1 - сокращенная запись (рекомендуется), 0 - полный ip.
// вручную в белые/черные списки можно сохранять ip в обоих вариантах (в полном и сокращенном).
$ab_config['short_mask'] = 1;

// если зашел фейкбот (с юзерагентом из белого списка ботов):
// 1 - остановить выполнение скрипта, 0 - разрешить пройти проверку как человеку.
$ab_config['stop_fake'] = 1; 

// ЛОГИ (1 - включить лог, 0 - не вести лог):
// лог попавших на заглушку (временно, для отладки).
$ab_config['antibot_log_tests'] = 1; 
// лог юзеров прошедших заглушку (временно, для отладки).
$ab_config['antibot_log_users'] = 1; 
// лог юзеров нажавших на кнопку (потому что js у них не сработал).
$ab_config['antibot_log_click'] = 1; 
// лог фейковых ботов (с useragent из белого списка, но с не правильным PTR).
$ab_config['antibot_log_fakes'] = 1; 
// прочие логи
$ab_config['antibot_log_other'] = 1; 

// Список белых ботов в формате: сигнатура (признак) из User-Agent => массив PTR записей:
// если PTR запись пустая или неинформативная, то указывать array('.');
// тогда все боты с этим юзерагентом будут пропускаться как белые боты,
// но ip в базу белых ботов добавляться не будут.
// если бот ходит из малого количества подсетей, то можно указать часть ip адреса.
$ab_se['Googlebot'] = array('.googlebot.com'); // только индексатор гугла, 'google.com' тут не нужен
$ab_se['yandex.com'] = array('yandex.ru', 'yandex.net', 'yandex.com'); // все боты Яндекса
//$ab_se['Google-Site-Verification'] = array('googlebot.com', 'google.com'); // гуглобот при добавлении в вебмастер
$ab_se['Mail.RU_Bot'] = array('mail.ru', 'smailru.net'); // все боты индексаторы Mail.ru
$ab_se['bingbot'] = array('search.msn.com'); // индексатор Bing.com
//$ab_se['AppEngine-Google'] = array('.googleusercontent.com'); // бот проверяльщик freenom.com
// соцсети (боты предпросмотра и т.п.)
//$ab_se['vkShare'] = array('.vk.com'); // Вконтакте
//$ab_se['facebookexternalhit'] = array('66.220.149.', '31.13.', '2a03:2880:'); // Facebook (перепроверен)
//$ab_se['OdklBot'] = array('.odnoklassniki.ru'); // Однокласники
//$ab_se['MailRuConnect'] = array('.smailru.net'); // Мой мир (mail.ru)
//$ab_se['Twitterbot'] = array('199.16.15'); // Twitter
//$ab_se['TelegramBot'] = array('149.154.16'); // Telegram (надо много собирать, ипы меняются)
// еще боты, которых возможно можно допустить, если они вам надо:
//$ab_se['googleweblight'] = array('google.com'); // 
//$ab_se['BingPreview'] = array('search.msn.com'); // проверка адаптации моб страниц Bing
//$ab_se['uptimerobot'] = array('uptimerobot.com');
//$ab_se['pingdom'] = array('pingdom.com');
//$ab_se['HostTracker'] = array('.'); // он не имеет нормального PTR
//$ab_se['Yahoo! Slurp'] = array('.yahoo.net'); // боты Yahoo
//$ab_se['SeznamBot'] = array('.seznam.cz'); // поисковик seznam.cz
//$ab_se['Pinterestbot'] = array('.pinterest.com'); // 
//$ab_se['Mediapartners'] = array('googlebot.com', 'google.com'); // AdSense bot
// $ab_se['AdsBot-Google'] = array('google.com');

// Если сайт (php) находится за прокси (apache за nginx или cloudflare и т.п.)
// укажите подсеть ip прокси серверов и значение $_SERVER переменной из которой брать реальный ip посетителя.
// поддерживаются только ipv4.
// CloudFlare:
$ab_proxy['173.245.48.0/20'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['103.21.244.0/22'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['103.22.200.0/22'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['103.31.4.0/22'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['141.101.64.0/18'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['108.162.192.0/18'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['190.93.240.0/20'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['188.114.96.0/20'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['197.234.240.0/22'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['198.41.128.0/17'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['162.158.0.0/15'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['104.16.0.0/12'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['172.64.0.0/13'] = 'HTTP_CF_CONNECTING_IP';
$ab_proxy['131.0.72.0/22'] = 'HTTP_CF_CONNECTING_IP';

// мета теги ogp.me для соц сетей (если не пропускать ботов соц сетей на сайт):
$ab_config['og:title'] = 'AntiBot Cloud: скрипт для защиты сайтов на php от плохих ботов.';
$ab_config['og:image'] = 'https://antibot.cloud/logo.png';

// блокировка по странам, эти страны заблокировать (на белых ботов не распространяется).
// 2 буквенные коды стран по ISO 3166-1 в верхнем регистре:
$ab_config['stop_country'] = array('IN', 'CN');

// блокировка по языкам браузера, эти языки блокировать (на белых ботов не распространяется)
// 2 буквенные коды языка по ISO 639-1 в нижнем регистре:
$ab_config['stop_lang'] = array('hi', 'gu', 'zh');

// еще блокировки:
//if (isset($_GET['fbclid'])) die('fb'); // хитробот фейсбука или траф с фейсбука
