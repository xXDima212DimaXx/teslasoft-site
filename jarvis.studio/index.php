<?
require_once($_SERVER['DOCUMENT_ROOT'].'/antiflood/fban.php');
// Статус проверки
$pass_check = 0;

// IP проверка
require_once($_SERVER['DOCUMENT_ROOT'].'/ban/ip_check.php');

// Вызов функции, отображающей страницу сайта
if ($pass_check == 1) {
    app();
}

// Отображение страницы сайта
function app() {
$application = <<<EOL
<!DOCTYPE html><html><head><title>Teslasoft</title><meta charset="utf-8">
<meta name="google-site-verification" content="X9eiLiDwXWVlvPridgOtXE6ZePiHeRjQ1VoAs7DwOYo" />
<meta name="viewport" content="width=device-width, user-scalable=no"><meta name="theme-color" content="#121212"><meta name="keywords" content="Teslasoft, Jarvis, Teslasoft Jarvis, Jarvis studio"><meta name="description" content="Teslasoft - организация, занимающаеся технологиями в сфере IT. Мы разрабатываем мобильные приложения, облачные сервисы и даже занимаемся робототехникой!"><link rel="icon" type = "image/x-icon" href="https://jarvis.studio/res/images/img?id=favicon"><link rel="stylesheet" href="//cdns.jarvis.studio/material/mdl/1.3.0/css/material.purple-red.min.css"><link rel="stylesheet" href="//cdns.jarvis.studio/material/drawer/css/drawer-dark.css"><link rel="stylesheet" href="./css/index.min.css"><script src='//www.googletagmanager.com/gtm.js?id=GTM-KTTNPDT'></script><script async src="//www.googletagmanager.com/gtag/js?id=UA-158890085-1"></script><script async src="//www.google-analytics.com/analytics.js"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KTTNPDT');</script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-158890085-1', 'auto');ga('send', 'pageview');</script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-158890085-1');</script></head>
    <body>
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTNPDT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <div class = "loadp unselective" id = "loadp">
			<div class="load-middle">
				<div class = "mdl-spinner mdl-js-spinner is-active unselective"></div>
			</div>
		</div>
		<div class = "action-bar unselective">
		    <div class="left-icon rx_icon mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" id="rx_icon"></div>
		    <b class = "activity-title">Teslasoft</b>
		    <div class = "ssh">
            
            </div>
		    <form action="javascript:search()" class = "search unselective">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <div class="search-input mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="searchField">
                        <label class="mdl-textfield__label" for="sample-expandable"></label>
                    </div>
                    <label class="search-i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" for="searchField">
                        <i class="search-icon material-icons">search</i>
                    </label>
                </div>
            </form>
		</div>
		<div class = "layout-main unselective" id = "layout-main">
		    <div class="drawer unselective" id="drawer">
                <div class="content">
                    <div style = "width: 100%; height: 150px; background-image: url(https://jarvis.studio/res/images/img?id=drawer_bg); background-size: 80%; background-position: center; background-repeat: no-repeat;">
                        <div class="header" id = "abg">
                            <div style = "padding: 16px">
                                <div class="profile-icon2" id = "avatar2"></div>
                            </div>
                            <div class="text" style = "height: 60px; background-image: url(https://jarvis.studio/res/images/img?id=drawer_shadow); background-position: center; background-repeat: no-repeat;">
                                <div class="field name" id = "dname"></div>
                                <div class="field info" id = "demail"></div>
                            </div>
                        </div>
                    </div>
                    <ul class="menus" style = "padding: 0; margin: 0; content: none; list-style: none;">
                        <li class = "elem">
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toHome()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">home</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Главная</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toLogin()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">account_circle</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label" id = "isLogged"></p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toAccount()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">account_circle</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Мой кабинет</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                            <ul class = "elemm" style = "margin-left: -30px;" onclick = "javascript:toSupport()">
                                <table style = "width: 100%">
                                    <tr>
                                        <td style = "width: 36px; height: 48px; padding-top: 6px">
                                            <i class = "material-icons li-icon" style = "color: #db4437; opacity: 1;">help</i>
                                        </td>
                                        <td style = "height: 48px; vertical-align: center;">
                                            <p class = "li-label">Справка</p>
                                        </td>
                                    </tr>
                                </table>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class = "content-main">
                <div class = "page-main">
                    <p class = "unselective" style = "color: #afafaf; margin: 8px auto; width: 100%;">&nbsp;</p>
                    <div style = "margin: 16px auto;">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "" id = "card1bg">
                                <h2 class="mdl-card__title-text unselective"><b style = "color: #2e8b57; text-shadow: 0 0 5px #000000;">Добро пожаловать!</b></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Teslasoft - организация, занимающаяся технологиями в сфере IT. Мы разрабатываем мобильные приложения, облачные службы и даже занимаемся робототехникой! Наша цель - создать единую автоматизированную систему обеспечения информацией, которая в отличии от других систем не ворует пользовательские данные (<a>#do_not_sell_my_data</a>). Прежде всего для нас это удобство использования и безопасность пользователя.</p>
                                <p>&nbsp;</p>
                                <p>В рамках нашей организации действует проект Jarvis.</p>
                                <p>&nbsp;</p>
                                <p>Jarvis - это совокупность сервисов и программ, обеспечивающая более легкое взаимодействие с системой и другими программами.</p>
                                <p>&nbsp;</p>
                                <p>Авторы организации Teslasoft и проекта Jarvis - энтузиасты, которые пытаются облегчить жизнь пользователям. Мы надеемся сделать мир чуточку лучше.</p>
                                <p>&nbsp;</p>
                                <p>Если у вас есть желание и мотивация вы можете присоединиться и поддержать проект (ссылка внизу страницы).</p>
                                <p>&nbsp;</p>
                                <p>А для разработчиков мы предоставляем различное API, которое поможет работать с нашими продуктами еще удобнее и быстрее. Начните уже сейчас. Это бесплатно и не требует регистрации.</p>
                                <p>&nbsp;</p>
                                <p>Ну а если у вас остались вопросы вы можете посмотреть FAQ ниже, перейти в <a href = "https://support.jarvis.studio">справочный центр</a> или связаться с нами по адресу <a href = "mailto:contact.teslasoft@gmail.com">contact.teslasoft@gmail.com</a> или через форму в нижнем правом углу страницы.</p>
                            </div>
                            <div class="mdl-card__actions mdl-card--border" style = "z-index: 2; background-color: #323232;">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect unselective" style = "color: #db4437" onclick = "javascript:products()">
                                    Попробовать наше API
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div style = "margin: 16px auto;">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "" id = "card2bg">
                                <h2 class="mdl-card__title-text unselective"><b style = "color: #db4437; text-shadow: 0 0 5px #000000;">Последние события</b></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <div class = "" style = "width: 100%; border-radius: 8px; background-color: rgba(46, 139, 87, 0.2); padding: 8px; margin-bottom: 8px; margin-right: 8px;">
                                    <table>
                                        <tr>
                                            <td>
                                                <h5 style = "color: #2e8b57">Вышла новая версия Jarvis Services.</h5>
                                                <p>14.11.20 Вышла новая версия наших служб. В этом обновлении мы исправили <a href = "https://support.jarvis.studio/report/01112020/view">компоненты, на которые реагировали антивирусы</a>. Также мы удалили весь старый и ненужный код из приложения.</p>
                                                <p>Скачать последнюю версию Jarvis Services можно тут: <a href = "https://download.jarvis.studio/jarvis/JCS-1.19.202011011345.4.565">https://download.jarvis.studio/jarvis/JCS-1.19.202011011345.4.565</a>.</p>
                                                <p>Ознакомиться с полным списком изменений можно <a href = "https://github.com/xXDima212DimaXx/jarvis-services/releases/tag/v1.19.202011011345.4.565">тут</a>.</p>
                                                <p style = "opacity: 0.5">15.11.2020 - Admin</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class = "" style = "width: 100%; border-radius: 8px; background-color: rgba(219, 69, 55, 0.2); padding: 8px; margin-bottom: 8px;">
                                    <table>
                                        <tr>
                                            <td>
                                                <h5 style = "color: #db4437">Компонент Jarvis ADs больше не доступен.</h5>
                                                <p>В соответствии с <a href = "https://support.jarvis.studio/report/01112020/view">этим отчетом</a> и антивирусной активностью мы временно удалили рекламу Jarvis из приложения. Надеемся, что в будущем сможем это исправить.</p>
                                                <p style = "opacity: 0.5">14.11.2020 - Admin</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class = "" style = "width: 100%; border-radius: 8px; background-color: rgba(255, 145, 0, 0.2); padding: 8px; margin-bottom: 8px;">
                                    <table>
                                        <tr>
                                            <td>
                                                <h5 style = "color: #ff9100">Антивирусы против наших служб.</h5>
                                                <p>Перед тем как выпустить какой-либо продукт мы тчательно проверяем его на совместимость и безопасность. И в этом выпуске таким продуктом является Jarvis Services. При проверке с помощью системы VirusTotal(TM) были выявлены угрозы, однако версия все же вышла. Мы настоятельно рекомендуем дождаться следуещего обновления. Отчет можно посмотреть <a href = "https://support.jarvis.studio/report/01112020/view">здесь</a>. Рекомендуем к прочтению: <a href = "https://jarvis.studio/article/dangerous-content">Как мы боремся с распространением вредоносного конента</a>.</p>
                                                <p style = "opacity: 0.5">02.11.2020 - Admin</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class = "" style = "width: 100%; border-radius: 8px; background-color: rgba(46, 139, 87, 0.2); padding: 8px; margin-bottom: 8px;">
                                    <table>
                                        <tr>
                                            <td>
                                                <h5 style = "color: #2e8b57">Jarvis Services v1.18.202010282315.1.187</h5>
                                                <p>31.10.20 Версия 1.18.202010282315.1.187 - одно из самых масштабных обновлений наших служб. Эта версия имеет найбольшее количество изменений. Отныне мы полностью переходим на AndroidX. В этой версии мы добавили аж несколько новых компонентов таких как безопасный вход в аккаунт и биометрическая аутентификация. Отныне Teslasoft SmartCard использует биометрию для входа в аккаунт.</p>
                                                <p>Скачать последнюю версию Jarvis Services можно тут: <a href = "https://download.jarvis.studio/jarvis/JCS-1.18.202010282315.1.187">https://download.jarvis.studio/jarvis/JCS-1.18.202010282315.1.187</a>.</p>
                                                <p>Ознакомиться с полным списком изменений можно <a href = "https://github.com/xXDima212DimaXx/jarvis-services/releases/tag/v1.18.202010282315.1.187">тут</a>.</p>
                                                <p style = "opacity: 0.5">15.11.2020 - Admin</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style = "margin: 16px auto;">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "" id = "card3bg">
                                <h2 class="mdl-card__title-text unselective"><b style = "color: #2e8b57; text-shadow: 0 0 5px #000000;">Небольшой FAQ</b></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Тут приведены вопросы, которые могут возникнуть при использовании наших служжб.</p>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAA()">
                                        <h6><a style = "cursor: pointer">Какие продукты Teslasoft существуют и как их использовать?</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAA">
                                        <p style = "">Основное приложение - Jarvis. В нем вы можете общаться. Создать своего ассистента и многое другое. Второе - Jarvis Services. Это API, используемое другими приложениями в том числе и Jarvis. На данный момент Jarvis Services позволяют добавить вход в аккаунт а также биометрическую авторизацию в приложения. Jarvis Services также необходим для работы наших продуктов. Также у нас есть другие вспомагательные утилиты такие как проверка сертификации, экспериментальные функции, а для участников проекта - электронный пасспорт.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAB()">
                                        <h6><a style = "cursor: pointer">Кто может быть участником проекта?</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAB">
                                        <p style = "">Все, кто соответствуют требованиям, указанным на <a href = "https://jarvis.studio/participate">этой странице</a> не зависимо от пола, рассы, принадлежности, религии, вероисповедания и.т.д.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAC()">
                                        <h6><a style = "cursor: pointer">Установка Jarvis Services или других наших продуктов заблокирована Google Play Защитой.</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAC">
                                        <p style = "">К сожалению наши приложения пока еще недоступны в Google Play Store, и соответственно при их установке Google Play Защита может не распознавать разработчика. Для того, чтобы убедиться в прозрачности вы можете просмотреть <a href = "https://github.com/xXDima212DimaXx/jarvis-services" terget = "_blank">исходный код на Github</a>.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAD()">
                                        <h6><a style = "cursor: pointer">Обнаружение Jarvis Services другими антивирусами.</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAD">
                                        <p style = "">Некоторые нераспространенные антивирусы могут отмечать наше ПО как вредоносное. Мы постараемся исправить это в будущем. Это происходит из-за того, что Jarvis Services работает с системными компонентами или даже заменяет их (например биометрическая авторизация). Но вы всегда можете убедиться в прозрачности просмотрев <a href = "https://github.com/xXDima212DimaXx/jarvis-services" target = "_blank">исходный код на Github</a>.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAE()">
                                        <h6><a style = "cursor: pointer">Как работает Jarvis API?</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAE">
                                        <p style = "">Все очень просто: Достаточно выбрать интересующий вас компонент, зайти на <a href = "https://github.com/xXDima212DimaXx/jarvis-services" terget = "_blank">страницу Github</a> и скопировать необходимый код. Никаких ключей и проверок не требуется.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAF()">
                                        <h6><a style = "cursor: pointer">Насколько безопасно использовать наше API?</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAF">
                                        <p style = "">Никаких ключей, а где тогда безопасность? Дело в том, что большинство наших сервисов могут работать без подключения к Интернету, а потому и не требуют удаленную идентификацию. Если рассмотреть код подключения, то можно заметить передачу id или подписи приложения. А если подпись у приложения неверная, то работать с нашим API такое приложение не сможет. Специально для защиты нашего API мы разработали Licence Manager - утилиту, которая проверяет подпись приложения перед доступом к API.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAG()">
                                        <h6><a style = "cursor: pointer">Мое устройство не сертифицировано.</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAG">
                                        <p style = "">При регистрации аккаунта через приложение Jarvis на некоторых устройствах может появиться предупреждение. Если у вас проблемы с регистрацией/взодом свяжитесь с нами по адресу <a href = "mailto:contact.teslasoft@gmail.com">contact.teslasoft@gmail.com</a>.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAH()">
                                        <h6><a style = "cursor: pointer">Что такое сертификация устройства?</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAH">
                                        <p style = "">Сертификация - это регистрация вашего устройства в наших службах. Именно благодаря сертификации мы не требуем ключей безопасности или проверок при подключении нашего API.</p>
                                    </div>
                                </div>
                                <hr style = "margin: 2; padding: 0; border: 1px solid #424242">
                                <div class = "faq_question">
                                    <div class = "faq_question" onclick = "javascript:faqQuestAI()">
                                        <h6><a style = "cursor: pointer">Jarvis Service не открываются и их нет на рабочем столе.</a></h6>
                                    </div>
                                    <div class = "faq_answer" id = "qqAI">
                                        <p style = "">Jarvis Services запускаются отдельными приложениями по мере надобности. В настройки Jarvis Services можно зайти через приложение Jarvis (Вкладка Jarvis Services в боковом меню). Управлять приложением можно зайдя в <a>Настройки > Приложения > Все приложения > Jarvis Services</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style = "margin: 16px auto;">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "javascript:publications()" id = "card4bg">
                                <h2 class="mdl-card__title-text unselective"><b style = "color: #db4437; text-shadow: 0 0 5px #000000;">Страница публикаций</b></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Здесь вы можете найти все новости и публикации Teslasoft</p>
                            </div>
                            <div class="mdl-card__actions mdl-card--border" style = "z-index: 2; background-color: #323232;">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect unselective" style = "color: #db4437" onclick = "javascript:publications()">
                                    Перейти
                                </a>
                            </div>
                        </div>
                    </div>
                    <div style = "margin: 16px auto;">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "javascript:discord()" id = "card7bg">
                                <h2 class="mdl-card__title-text unselective"><b style = "color: #2e8b57; text-shadow: 0 0 5px #000000;">Сервер Дискорд</b></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Присоединяйтесь к нашему серверу Дискорд чтобы узнавать об обновлениях первыми</p>
                            </div>
                            <div class="mdl-card__actions mdl-card--border" style = "z-index: 2; background-color: #323232;">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect unselective" style = "color: #db4437" onclick = "javascript:discord()">
                                    Перейти
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--<div class="mdl-card__menu">
                        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect non-hover">
                            <i class="material-icons">share</i>
                        </button>
                    </div>-->
                    <div style = "margin: 16px auto;">
                        <div class="main-card-wide mdl-card mdl-shadow--2dp unselective" style = "text-align: left; margin: auto;">
                            <div class="mdl-card__title mdl-js-button mdl-js-ripple-effect" onclick = "javascript:article5()" id = "card5bg">
                                <h2 class="mdl-card__title-text unselective"><b style = "color: #db4437; text-shadow: 0 0 5px #000000;">Поддержать проект</b></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Заинтересовал проект? Вы можете поддержать его или стать участником</p>
                            </div>
                            <div class="mdl-card__actions mdl-card--border" style = "z-index: 2; background-color: #323232;">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect unselective" style = "color: #db4437" onclick = "javascript:article5()">
                                    Читать дальше
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class = "unselective">&nbsp;</p>
                    <div class="addthis_inline_follow_toolbox" style = "text-align: center; margin: auto; min-width: 320px; max-width: 420px; padding: 16px;"></div>
                    <p class = "unselective">&nbsp;</p>
                    <!--<p class = "unselective" style = "padding: 16px; text-align: center;">Реклама</p>
                    <div class = "ad-fullwidth" id = "ad-bottom-w">
                        <iframe id = "ad-bottom-wide"></iframe>
                    </div>-->
                    <p class = "unselective">&nbsp;</p>
		        </div>
		        <div class = "footer">
		            <p class = "copyright"><a>© 2017-2020 Teslasoft. All rights reserved</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/sitemap.html">Site map</a>&nbsp;<a href = "https://jarvis.studio/sitemap.xml">(XML)</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/terms">Условия использования</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/privacy">Конфиденциальность</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio/cookies">Использование Cookies</a>&nbsp;|&nbsp;<a href = "https://jarvis.studio">Главная</a></p>
		        </div>
            </div>
	    </div>
	    <script>
	        // If required
	        var questAA = false;
	        var questAAdoc = document.getElementById('qqAA');
	        questAAdoc.style.height = "0";
	        questAAdoc.style.visibility = "hidden";
	        
	        var questAB = false;
	        var questABdoc = document.getElementById('qqAB');
	        questABdoc.style.height = "0";
	        questABdoc.style.visibility = "hidden";
	        
	        var questAC = false;
	        var questACdoc = document.getElementById('qqAC');
	        questACdoc.style.height = "0";
	        questACdoc.style.visibility = "hidden";
	        
	        var questAD = false;
	        var questADdoc = document.getElementById('qqAD');
	        questADdoc.style.height = "0";
	        questADdoc.style.visibility = "hidden";
	        
	        var questAE = false;
	        var questAEdoc = document.getElementById('qqAE');
	        questAEdoc.style.height = "0";
	        questAEdoc.style.visibility = "hidden";
	        
	        var questAF = false;
	        var questAFdoc = document.getElementById('qqAF');
	        questAFdoc.style.height = "0";
	        questAFdoc.style.visibility = "hidden";
	        
	        var questAG = false;
	        var questAGdoc = document.getElementById('qqAG');
	        questAGdoc.style.height = "0";
	        questAGdoc.style.visibility = "hidden";
	        
	        var questAH = false;
	        var questAHdoc = document.getElementById('qqAH');
	        questAHdoc.style.height = "0";
	        questAHdoc.style.visibility = "hidden";
	        
	        var questAI = false;
	        var questAIdoc = document.getElementById('qqAI');
	        questAIdoc.style.height = "0";
	        questAIdoc.style.visibility = "hidden";
	        
	        function closeAll() {
	            questAAdoc.style.visibility = "hidden";
	            questABdoc.style.visibility = "hidden";
	            questACdoc.style.visibility = "hidden";
	            questADdoc.style.visibility = "hidden";
	            questAEdoc.style.visibility = "hidden";
	            questAFdoc.style.visibility = "hidden";
	            questAGdoc.style.visibility = "hidden";
	            questAHdoc.style.visibility = "hidden";
	            questAIdoc.style.visibility = "hidden";
	            questAAdoc.style.height = "0";
	            questABdoc.style.height = "0";
	            questACdoc.style.height = "0";
	            questADdoc.style.height = "0";
	            questAEdoc.style.height = "0";
	            questAFdoc.style.height = "0";
	            questAGdoc.style.height = "0";
	            questAHdoc.style.height = "0";
	            questAIdoc.style.height = "0";
	        }
	        
	        function faqQuestAA() {
	            if (questAA) {
	                questAAdoc.style.height = "0";
	                questAAdoc.style.visibility = "hidden";
	                questAA = false;
	            } else {
	                // closeAll();
	                questAAdoc.style.height = "auto";
	                questAAdoc.style.visibility = "visible";
	                questAA = true;
	            }
	        }
	        
	        function faqQuestAB() {
	            if (questAB) {
	                questABdoc.style.height = "0";
	                questABdoc.style.visibility = "hidden";
	                questAB = false;
	            } else {
	                // closeAll();
	                questABdoc.style.height = "auto";
	                questABdoc.style.visibility = "visible";
	                questAB = true;
	            }
	        }
	        
	        function faqQuestAC() {
	            if (questAC) {
	                questACdoc.style.height = "0";
	                questACdoc.style.visibility = "hidden";
	                questAC = false;
	            } else {
	                // closeAll();
	                questACdoc.style.height = "auto";
	                questACdoc.style.visibility = "visible";
	                questAC = true;
	            }
	        }
	        
	        function faqQuestAD() {
	            if (questAD) {
	                questADdoc.style.height = "0";
	                questADdoc.style.visibility = "hidden";
	                questAD = false;
	            } else {
	                // closeAll();
	                questADdoc.style.height = "auto";
	                questADdoc.style.visibility = "visible";
	                questAD = true;
	            }
	        }
	        
	        function faqQuestAE() {
	            if (questAE) {
	                questAEdoc.style.height = "0";
	                questAEdoc.style.visibility = "hidden";
	                questAE = false;
	            } else {
	                // closeAll();
	                questAEdoc.style.height = "auto";
	                questAEdoc.style.visibility = "visible";
	                questAE = true;
	            }
	        }
	        
	        function faqQuestAF() {
	            if (questAF) {
	                questAFdoc.style.height = "0";
	                questAFdoc.style.visibility = "hidden";
	                questAF = false;
	            } else {
	                // closeAll();
	                questAFdoc.style.height = "auto";
	                questAFdoc.style.visibility = "visible";
	                questAF = true;
	            }
	        }
	        
	        function faqQuestAG() {
	            if (questAG) {
	                questAGdoc.style.height = "0";
	                questAGdoc.style.visibility = "hidden";
	                questAG = false;
	            } else {
	                // closeAll();
	                questAGdoc.style.height = "auto";
	                questAGdoc.style.visibility = "visible";
	                questAG = true;
	            }
	        }
	        
	        function faqQuestAH() {
	            if (questAH) {
	                questAHdoc.style.height = "0";
	                questAHdoc.style.visibility = "hidden";
	                questAH = false;
	            } else {
	                // closeAll();
	                questAHdoc.style.height = "auto";
	                questAHdoc.style.visibility = "visible";
	                questAH = true;
	            }
	        }
	        
	        function faqQuestAI() {
	            if (questAI) {
	                questAIdoc.style.height = "0";
	                questAIdoc.style.visibility = "hidden";
	                questAI = false;
	            } else {
	                // closeAll();
	                questAIdoc.style.height = "auto";
	                questAIdoc.style.visibility = "visible";
	                questAI = true;
	            }
	        }
	    </script>
	    <script data-ad-client="ca-pub-4864890795558551" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script src = "https://cdns.jarvis.studio/jquery/3.4.1/js/jquery.min.js"></script>
        <script src = "https://cdns.jarvis.studio/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase.js"></script>
        <script src = "https://www.gstatic.com/firebasejs/7.9.0/firebase-auth.js"></script>
        <script src = "https://cdns.jarvis.studio/material/drawer/js/drawer.js"></script>
        <script>var firebaseConfig = {apiKey: "AIzaSyDFranKy-P-zj4qpcEkTSho3aMihsC42ts",authDomain: "jarvis-a301b.firebaseapp.com",databaseURL: "https://jarvis-a301b.firebaseio.com",projectId: "jarvis-a301b",storageBucket: "jarvis-a301b.appspot.com",messagingSenderId: "1083710434382",appId: "1:1083710434382:web:ab0b211f85fd1aad8f271f"};firebase.initializeApp(firebaseConfig);var database = firebase.database();var isLogged = 0;firebase.auth().onAuthStateChanged(function(user) {if (user) {var displayName = user.displayName;var email = user.email;var emailVerified = user.emailVerified;var photoURL = user.photoURL;var isAnonymous = user.isAnonymous;var uid = user.uid;var providerData = user.providerData;document.getElementById("isLogged").innerHTML = "Выйти из аккаунта";isLogged = 1;}else{document.getElementById("isLogged").innerHTML = "Вход / Регистрация";isLogged = 1;}});function toLogin() {if (isLogged == 1){signOut();}else{window.location.assign("https://jarvis.studio/login/oauth?continue=https://jarvis.studio");}}function signOut(){firebase.auth().signOut().then(function(){}).catch(function(error){});window.location.replace("https://jarvis.studio/login/oauth?continue=https://jarvis.studio");}</script>
        <script>
            window.onload = function(){
                document.getElementById('loadp').style.zIndex = "-5";
                if(document.createStyleSheet){
                    document.createStyleSheet('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
                    document.createStyleSheet('https://fonts.googleapis.com/icon?family=Material+Icons');
                    document.createStyleSheet('https://jarvis.studio/css/main.css');document.createStyleSheet('https://jarvis.studio/css/theme-dark.min.css');
                }else{
                    var styles = "@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');@import url('https://fonts.googleapis.com/icon?family=Material+Icons');@import url('https://jarvis.studio/css/main.css');@import url('https://jarvis.studio/css/theme-dark.min.css');";
                    var newSS=document.createElement('link');
                    newSS.rel='stylesheet';
                    newSS.href='data:text/css,'+escape(styles);
                    document.getElementsByTagName("head")[0].appendChild(newSS);
                }
                
                document.getElementById('card1bg').style.background = "url('https://jarvis.studio/res/images/img?id=teslasoft_logo') center / cover";
                document.getElementById('card1bg').style.backgroundSize = "90%";
                document.getElementById('card1bg').style.backgroundRepeat = "no-repeat";
                document.getElementById('card2bg').style.background = "url('https://jarvis.studio/res/images/card2bg.png') center / cover";
                document.getElementById('card3bg').style.background = "url('https://jarvis.studio/res/images/card3bg.jpg') center / cover";
                document.getElementById('card7bg').style.background = "url('https://jarvis.studio/res/images/discordbg.png') center / cover";
                //document.getElementById('card4bg').style.background = "url('https://jarvis.studio/res/images/img?id=card4_bg_webp') center / cover";
                document.getElementById('card5bg').style.background = "url('https://jarvis.studio/res/images/img?id=card5_bg_webp') center / cover";
                //document.getElementById('card6bg').style.background = "url('https://jarvis.studio/res/images/img?id=card6_bg_webp') center / cover";
                
                var deviceWidth = window.innerWidth;
                
                /*if(deviceWidth < 850){
                    document.getElementById('ad-bottom-wide').src = "https://s2---sd-r56v7-g-ad.jarvis.studio/ad/mobile/wide_horizontal.php?id=test";
                    document.getElementById('ad-bottom-wide').width = "320px";
                    document.getElementById('ad-bottom-wide').height = "50px";
                    document.getElementById('ad-bottom-w').style.width = "320px";
                    document.getElementById('ad-bottom-w').style.height = "50px";
                }else{
                    document.getElementById('ad-bottom-wide').src = "https://s2---sd-r56v7-g-ad.jarvis.studio/ad/wide_horizontal.php?id=test";
                    document.getElementById('ad-bottom-wide').width = "800px";document.getElementById('ad-bottom-wide').height = "90px";
                    document.getElementById('ad-bottom-w').style.width = "800px";document.getElementById('ad-bottom-w').style.height = "90px";
                }*/
            };
            
            function rlogin(){window.location.assign("https://jarvis.studio/login/oauth");}
            function products(){window.location.assign("https://jarvis.studio/products");}
            function article1(){window.location.assign("https://jarvis.studio/about");}
            function article2(){window.location.assign("https://jarvis.studio/login/oauth");}
            function article3(){}function article4(){}
            function article5(){window.location.assign("https://jarvis.studio/participate");}
            function discord(){window.location.assign("https://jarvis.studio/discord");}
            function article6(){window.location.assign("https://support.jarvis.studio");}
            function toHome(){window.location.assign("https://jarvis.studio");}
            function toAccount(){window.location.assign("https://jarvis.studio/home");}
            function toSupport(){window.location.assign("https://support.jarvis.studio");}
            function search() {document.getElementById('loadp').style.zIndex = "15";
            var query = $("#searchField").val();
            window.location.assign("https://jarvis.studio/search?q=" + query);}
        </script>
        <script id="cookieinfo"src="//cookieinfoscript.com/js/cookieinfo.min.js"data-bg="#323232"data-fg="#FFFFFF"data-link="#DB4437"data-cookie="GDPRCookieAccept"data-text-align="left"data-font-family="Sans-serif"data-font-size="16px"data-message="Наш сайт использует Cookies для персонализации, и улучшения качества обслуживания."data-linkmsg="Детальнее про Cookies"data-moreinfo="https://jarvis.studio/cookies"data-divlink="#FFFFFF"data-divlinkbg="#DB4437"data-close-text="Принять все"></script>
        <script>var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src='https://embed.tawk.to/5e787ddd8d24fc2265896ba6/default';s1.charset='UTF-8';s1.setAttribute('crossorigin','*');s0.parentNode.insertBefore(s1,s0);})();</script>
    </body>
</html>
EOL;
echo $application;
}
?>