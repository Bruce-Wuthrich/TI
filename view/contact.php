   <nav>
            <div class="navbarre">
                <div id="logo">
                    <img src="/public/img/banniere.jpg">
                </div>
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <label for="nav-toggle" class="nav-toggle-label" aria-label="Menu">
                    <span class="hamburgerline"></span>
                    <span class="hamburgerline"></span>
                    <span class="hamburgerline"></span>
                </label>
                <ul id="liens">
                <li><a href="acceuil.php">Accueil</a></li>
                <li><a href="geographie.php">Geographie</a></li>
                <li><a href="histoire.php">Histoire</a></li>
                <li><a href="culture.php">Culture</a></li>
                <li><a href="galerie.php">galerie</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="liens.php">Liens</a></li>
                </ul>
            </div>
    </nav>
    <main>
        <div class="contact"> 
            <h2>Pour nous contacter</h2>
                <img src="/public/img/contacts.jpg" alt="">
                <div class=" formulaire">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom">
                    <label for="prenom">Prenom:</label>
                    <input type="text" id="prenom" name="prenom">
                    <label for="Ville">Ville:</label>
                    <input type="text" id="ville" name="ville">
                    <label for="Email">Email:</label>
                    <input type="text" id="Email" name="Email">
                    <label for="Votre commentaire">Commentaires:</label>
                    <textarea name="Votre commentaire" id="Votre commentaire"></textarea>
                </div>
                <div class="button envoyer">
                   <Button>Envoyer votre message</Button> 
                </div>
        </div>
    </main>
