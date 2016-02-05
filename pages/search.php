<?php 
	include "../layout/header.php";
?> 
<link rel="stylesheet" href="../styles/search.css" rel="stylesheet" type="text/css" >
<link rel="import" href="/elements/search-res-row.html">
<link rel="import" href="/elements/search-res-card.html">
<link rel="import" href="/bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
<link rel="import" href="/bower_components/paper-menu/paper-menu.html">
<link rel="import" href="/bower_components/paper-radio-button/paper-radio-button.html">

<!--
  {
    pnr: String,
    pname: String,
    pronr: String,
    proname: String,
    artnr: String,
    description: String,
    picture: String,
    price: Decimal,
    favorite: Boolean,
  }
-->

<h2 id="searchtext" class="like-h1">Ergebnisse für </h2>
<div class="horizontal layout wrap">
  <p class="search-rescount-text">
    Ergebnisse pro Seite:
  </p>
  <select name="Ergebnisse pro Seite" selected="10" class="search-rescount-select">
    <option value="10">10</option>
    <option value="25">25</option>
    <option value="50">50</option>
    <option value="100">100</option>
  </select>
  <paper-menu class="search-viewselect-menu" selected="0">
    <paper-icon-button icon="icons:view-list"></paper-icon-button>
    <paper-icon-button icon="icons:view-module"></paper-icon-button>
  </paper-menu>
</div>


<div id="results" class="flex wrapp">
  <hr>
</div>

<script type="text/javascript" src="/functions/search.js">
</script>
<?php 
	include "../layout/footer.php"	
?> 