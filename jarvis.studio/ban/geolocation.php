<?php
// Географическое месторасположение пользователя
$geoplugin = new geoPlugin();
$geoplugin->locate();

$client_country = $geoplugin->countryName;
$client_country_code = $geoplugin->countryCode;
$client_city = $geoplugin->city;
?>