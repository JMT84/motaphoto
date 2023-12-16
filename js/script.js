
// Gestion du Popup
document.addEventListener('DOMContentLoaded', function() {
    var lienContact = document.getElementById('menu-item-77');
    var popupContact = document.querySelector('.popup-contact');
    var body = document.querySelector('.body');

      // Ouverture du Popup au clic sur lienContact
    lienContact.addEventListener('click', function(event) {
        // Empêche la propagation de l'événement pour éviter la fermeture immédiate
        event.stopPropagation();
        // Opacité du body
        body.style.backgroundColor = 'rgba(0, 0, 6, 0.5)';
        // Affichez le Popup
        popupContact.style.display = 'block';

        // Fermeture du Popup au clic en dehors du Popup et du lienContact
        window.onclick = function(event) {
            if (!popupContact.contains(event.target) && event.target !== lienContact) {
                body.style.backgroundColor = 'white';
                popupContact.style.display = 'none';
                // Supprimez l'écouteur d'événements pour éviter toute interférence
                window.onclick = null;
            }
        };
    });
 });

 // Gestion du menu burger
 document.addEventListener('DOMContentLoaded', function() {
    var burgerMenu = document.querySelector('.burgerMenu');
    var menucontainer = document.querySelector('.menu-menu-header-container');

    burgerMenu.addEventListener('click', function(event) {
        burgerMenu.classList.toggle('burgerMenuOpen');
        menucontainer.classList.toggle('menuContainerOpen');
    });
 });

