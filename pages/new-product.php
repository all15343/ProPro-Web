<?php 
	include "../layout/header.php";
?> 
<link rel="stylesheet" href="../styles/new-product.css" rel="stylesheet" type="text/css" >
<!--<link rel="import" href="/elements/search-res-row.html">
<link rel="import" href="/elements/search-res-card.html">
<link rel="import" href="/bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
<link rel="import" href="/bower_components/paper-menu/paper-menu.html">
<link rel="import" href="/bower_components/paper-radio-button/paper-radio-button.html">-->
<link rel="import" href="/bower_components/iron-icons/image-icons.html">
<link rel="import" href="/bower_components/paper-input/all-imports.html">
<link rel="import" href="/bower_components/paper-button/paper-button.html">
<link rel="import" href="/bower_components/paper-dialog/paper-dialog.html">
<link rel="import" href="/elements/file-uploader.html">
<script type="text/javascript" src="/functions/new-product.js"></script>

<h2 id="searchtext" class="like-h1">Neues Produkt erstellen</h2>
<div class="vertical layout">
	<div class="horizontal layout wrap" id="inputcontentwrapper">
		<div id="pictureview">
			<iron-icon icon="image:photo" id="pictureupload" onclick="showfileupload()"></iron-icon>
		</div>
		<div class="vertical layout flex" id="inputwrapper">
			<paper-input id="productnameinput" class="productinput" label="Produktname"></paper-input>
			<paper-input id="productartnrinput" class="productinput" label="Artikelnummer"></paper-input>
			<paper-input id="productpriceinput" class="productinput" type="number" min="0" step="0.01" label="Preis">
				<div prefix>€ &nbsp;</div>
			</paper-input>
			<paper-textarea id="productdescrinput" class="producttextarea" label="Beschreibug" rows="3"></paper-textarea>

			<paper-button onclick="addproduct()">Produkt hinzfügen</paper-button>
		</div>
	</div>
</div>
<div id="showres">
</div>
<paper-dialog id="fileuploaddialog" modal>
  <file-uploader></file-uploader>
  <div class="buttons">
    <paper-button dialog-confirm>Fetig</paper-button>
  </div>
</paper-dialog>

<?php 
	include "../layout/footer.php";
?> 