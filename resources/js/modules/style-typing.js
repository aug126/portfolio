/* 
  - Récupère tous les éléments avec la classe "typing-anim".
  - Met le contenu qui se trouve dans data-content dans la balise.
  - Utilise un speed (vitesse de frappe) et un délai de départ récupéré sur data-speed et data-delay)
  - Crée des groupes (data-group) avec des ordres d'exécutions (1.1 s'execute puis 1.2 s'execute. 1.1 commence en même temps que 2.1)
*/
var clignoteState = false;
let clignote = (element, time, color) => {
    if (!clignoteState) {
        element.style.borderRightColor = color;
        return;
    }
    setTimeout(() => {
        if (element.style.borderRightColor == 'transparent')
            element.style.borderRightColor = color;
        else element.style.borderRightColor = 'transparent';
        clignote(element, 500, color);
    }, time);
}
let animTyping = (element, delay, speed) => {
    var text = element.dataset.content;
    var speed_init = speed;
    clignoteState = true;
    clignote(element, 500, "black");

    for (const key in text) {
        setTimeout(() => {
            clignoteState = false;
            element.innerHTML += text[key];
        }, delay + (speed += speed_init));
    }

}

/* Fonction pour créer les groupes d'éléments à animer en fonction de leur ordre */
var createGroups = (elementsList) => {
    /* tableau de tableaux pour stocker les groupes et les ordres dans chaque groupe. */
    var groups = Array();
    /*__ Début Déclaration fonctions */
    /* pour chaque group, ajouter un tableau */
    // vérifie si on a bien mis data-group. Si groupe existe pas, on le rajoute dans le tableau
    let getGroup = (dataset) => {
        if (!dataset.group) { // comportement par défault pas encore défini
            console.log("il faut spécifier le groupe de l'animation avec data-group")
            return 0;
        }
        var group = dataset.group[0];
        if (group > groups.length) {
            groups[group] = Array()
        };
        return group;
    }
    let getOrder = (dataset) => {
        return dataset.group[2];
    }
    /*__ Fin Déclaration fonctions */

    // Trie tous les groupes et les ordones
    Array.from(elementsList).forEach((element) => {
        var group = getGroup(element.dataset);
        if (group) {
            var order = getOrder(element.dataset);
            groups[group][order] = element;
        }
    });
    return groups;
}

var displayAnimOrder = (group) => {
    var delay;
    var nbChar;
    var delay_elem;
    group.forEach((element, index) => {
        var speed = parseInt(element.dataset.speed);
        speed = speed ? speed : 100;
        delay_elem = parseInt(element.dataset.delay);
        delay_elem = delay_elem ? delay_elem : 0;
        nbChar = element.dataset.content.length;
        if (index == 1)
            delay = delay_elem;
        animTyping(element, delay, speed);
        delay += (speed * nbChar) + delay_elem;
    });
}

var displayAnimGroup = (groups) => {
    groups.forEach((group) => {
        displayAnimOrder(group);
    });
}

let elements = document.getElementsByClassName('typing-anim');
elements[Array.from(elements).length - 1].style.borderRight = "solid black 3px"
var groups = createGroups(elements);
displayAnimGroup(groups);
