<?php
require_once('error_page.php');
require_once('simple_ip_list.php');
require_once('diapozone_ip_list.php');
require_once('excluded_ip_list.php');
require_once('third_digit_min_range.php');
require_once('third_digit_max_range.php');
require_once('fourth_digit_min_range.php');
require_once('fourth_digit_max_range.php');
require_once('country_list.php');

// Значение следующей переменной должно соответствовать количеству элементов в списке отдельных IP,
// иначе програма проигнорирует часть IP адресов
$simpleips = sizeof($simplebanlist);

// Значение следующей переменной должно соответствовать количеству элементов в диапозонов IP,
// иначе програма проигнорирует часть IP адресов
$ranges = sizeof($banlistrange);

// Значение следующей переменной должно соответствовать количеству исключенных IP,
// иначе програма проигнорирует часть IP адресов
$except_ips = sizeof($except_ip);

// Эту переменную изменять нельзя. Ее значение изменяется на 1, при успешном обнаружении разрешенного IP
$isIpAllowed = 0;

// Проверка отдельных IP адресов
for ($i = 0; $i < ($simpleips + 1); $i++) {
    // Получение элемента из списка отдельных IP
    $ipc = $simplebanlist[$i];
    
    // Проверка
    // Если IP клиента соответствует элементу из списка отдельных IP, отображаем сообщение о блокировке и завершаем программу
    if ($client_ip == $ipc) {
        // Завершение программы
        $pass_check = 0;
        exit($ban);
    } else {
        // Игнорируем это условие и продолжаем выполнение
    }
}

// Проверка диапозона IP адресов
for ($n = 0; $n < ($ranges + 1); $n++) {
    for ($i = $ips_min_range_third[$n]; $i < $ips_max_range_third[$n] + 1; $i++) {
        for ($j = $ips_min_range_fourth[$n]; $j < $ips_max_range_fourth[$n] + 1; $j++) {
            // Получение элемента из списка диапозонов IP
            $ipc = $banlistrange[$n].".".$i.".".$j;
            
            // Проверка
            // Если IP клиента соответствует элементу из списка диапозонов IP, проверяем его на наличие разрешения
            // Если IP разрешен, значение переменной isIpAllowed меняется на 1
            if ($client_ip == $ipc) {
                // Проверка IP адресов, исключенных из черного списка
                for ($k = 0; $k < $except_ips + 1; $k++) {
                    // Получение элемента из списка исключенных IP
                    $eipc = $except_ip[$k];
                    
                    // Проверка
                    if ($client_ip == $eipc) {
                        // Если IP разрешен, значение переменной isIpAllowed меняется на 1
                        $isIpAllowed = 1;
                    } else {
                        // Если IP не разрешен, значение переменной isIpAllowed остается 0 и выполняется блокировка
                        $pass_check = 0;
                    }
                }
                
                // Если IP не разрешен, значение переменной isIpAllowed остается 0 и выполняется блокировка
                if ($isIpAllowed == 0) {
                    $pass_check = 0;
                    exit($ban);
                }
            } else {
                // Если IP разрешен, игнорируем это условие и продолжаем выполнение
                // $pass_check = 1;
            }
        }
    }
}

// Блокировка стран
$countries_number = sizeof($ban_countries);

for ($i = 0; $i < ($countries_number + 1); $i++) {
    if ($client_country == $ban_countries[$i]) {
        $pass_check = 0;
        exit($ban);
    } else {
        $pass_check = 1;
    }
}

?>