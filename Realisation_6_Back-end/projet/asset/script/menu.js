// on récupère l'action de clique sur le bouton du mennu
const button_menu = document.querySelector('#button_menu');
// on récupère la classe a changer dans une constante
const nav = document.querySelector('.hide_menu');

button_menu.addEventListener('click', function(event)
    {
        if(nav.style.display == "block")
            {
                nav.style.display = "none";
            }
        else
            {
                nav.style.display = "block";
            };
    });