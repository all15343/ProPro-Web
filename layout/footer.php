        
    </div> 
    <footer>
        <paper-header-panel class="flex">
            <paper-toolbar id="footer-toolbar">
                <div id="footer-toolbar-text">
                    <p>Created by Alexander Allacher, Husein Gagajew, Sarah Nedved, Linda Saric</p>
                </div>
                <div class="flex">
                    <p align="right"><a class="no-decoration font-white" href="impressum">Impressum</a></p>
                </div>
            </paper-toolbar>
        </paper-header-panel>
    </footer>
    <paper-drawer-panel right-drawer class="header-drawer" force-narrow="true" id="main-drawer">
        <div main></div>
        <div id="scrim" class="style-scope paper-drawer-panel"></div>
        <paper-header-panel drawer class="flex">
            <paper-toolbar id="header-toolbar">
                <p class="like-h1">ProPro</p>
                <paper-icon-button icon="icons:close" class="header-drawer-close header-icon" paper-drawer-toggle></paper-icon-button>
            </paper-toolbar>
            <div class="header-drawer-space"></div>
            <paper-menu>
                <paper-item class="justmobile-menuitem">Profil</paper-item>
                <paper-item>Einkaufswagen</paper-item>
                <paper-item>Zuletzt Gekauft</paper-item>
                <paper-item onclick="location.href='/pages/login.php';">Login</paper-item>
                <paper-item onclick="location.href='/pages/new-product.php';">Neues Produkt</paper-item>
            </paper-menu>
        </paper-header-panel>
    </paper-drawer-panel>
</body>
</html>