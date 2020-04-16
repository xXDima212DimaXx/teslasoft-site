<?php
# Version: 5.07
# Author: Mik Foxi admin@mikfoxi.com
# Copyright © 2017 - 2019
# License: GNU GPL v3 - https://www.gnu.org/licenses/gpl-3.0.en.html
# Website: https://antibot.cloud/

require_once('antibot_include.php');
if ($ab_config['whitebot'] == 1) {
echo '<!DOCTYPE html>
<html>
<head>
<title>AntiBot.Cloud. Hello WhiteBot.</title>
<meta charset="utf-8">
</head>
<body>
<p>
You are identified as a WhiteBot.</p>
</body>
</html>';
} else {
echo '<!DOCTYPE html>
<html>
<head>
<title>AntiBot.Cloud. Hello User.</title>
<meta charset="utf-8">
</head>
<body>
<p>You are identified as a USER.</p>
<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,twitter,linkedin,lj,telegram"></div>
</body>
</html>';
}

