<html>
<head>
    <title>
        ProPro
    </title>
    <!-- document.getElementById("main-drawer").setAttribute("selected","main") -->
    <!--<script src="/bower_components/jquery/dist/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/bower_components/jquery.cookie/jquery.cookie.js"></script>
    <!-- Slick -->
    <!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
                
    <meta charset="UTF-8">
    <meta name="description" content="Produkte für Professionisten">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no" />

    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#2E3AA1">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PSK">
    <!--<link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">-->

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Polymer Starter Kit">
    <!--<link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">-->

    <!-- Tile icon for Win8 (144x144) -->
    <!--<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">-->

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/main.css" rel="stylesheet" type="text/css" >

    <!-- Polymer -->
    <script src="/bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="/elements/elements.html">
    <link rel="import" href="/elements/ad-card.html">
    <link rel="import" href="/bower_components/paper-tooltip/paper-tooltip.html">
    <link rel="import" href="/bower_components/paper-drawer-panel/paper-drawer-panel.html">
    <link rel="import" href="/bower_components/paper-card/paper-card.html">
    <link rel="import" href="/bower_components/paper-material/paper-material.html">
    <link rel="import" href="/bower_components/paper-button/paper-button.html">
    <link rel="import" href="/bower_components/paper-ripple/paper-ripple.html">
    <link rel="import" href="/bower_components/paper-toast/paper-toast.html">
    <link rel="import" href="/bower_components/iron-swipeable-container/iron-swipeable-container.html">
</head>
<body class="layout vertical">
<paper-header-panel>
    <paper-toolbar id="header-toolbar">
        <a href="/">
            <h1 class="justpc">ProPro</h1>
        </a>
        <input id="searchbar" placeholder="Wonach suchen Sie?" class="flex searchbar" onkeydown="if (event.keyCode == 13 & document.getElementById('searchbar').value.length>0){ location.href='/pages/search.php?search='+encodeURIComponent(document.getElementById('searchbar').value);}"></input>

        <paper-icon-button icon="icons:search" class="moveintosearchbar header-icon" onclick="if( document.getElementById('searchbar').value.length>0 ) location.href='/pages/search.php?search='+encodeURIComponent(document.getElementById('searchbar').value);"></paper-icon-button>
        <paper-icon-button icon="icons:shopping-cart" class="justpc dropdown-trigger header-icon" id="button-cart"></paper-icon-button>
        <paper-icon-button icon="icons:account-circle" class="justpc header-icon" onclick="location.href='/pages/profile.php';"></paper-icon-button>
        
        <paper-icon-button icon="icons:menu" class="header-menu header-icon" onclick="document.getElementById('main-drawer').setAttribute('selected','drawer') "></paper-icon-button>
    </paper-toolbar>
</paper-header-panel>
<iron-swipeable-container>
  <!-- <div>I can be swiped</div>
  <paper-card heading="Me too!"></paper-card> -->
<paper-toast id="maintoast" text="Hello world!"></paper-toast>
</iron-swipeable-container>
<div id="main-wrapper">

    
