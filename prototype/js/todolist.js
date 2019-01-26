// on ecoute dans body le click sur la span ajouteList
$("body").on( "click", 'span.ajouteList', function(event) {
    
    // on clone la div copy caché dans le html dans la variable copy
    var copy = $('div.d-none').clone();
    
    // on ajout les class
    copy.addClass('fadeInRight animated');
    
    // on lui enlever la classe pour la rendre visible
    copy.removeClass('d-none');
    
    //on l'insert avant la div caché
    copy.insertBefore($('div.d-none'));
    
    /*****************************************************************************************
    *                                                                                       *
    * écriture courte de cette fonction on peut ajouter les fonction à la suite avec .      *
    *                                                                                       *
    * var copy = $('div.d-none').clone()                                                      *
    *                         .addClass('fadeInRight animated')                             *
    *                         .removeClass('copy')                                          *
    *                         .insertBefore($('div.d-none'));                                 *
    *                                                                                       *
    *****************************************************************************************/ 
 
    // on boucle pendant 1000ms
    setTimeout(() => {

        // on enleve les class d'animation
        $('.animated').removeClass('fadeInRight animated slideInRight flipInX bounceIn fadeOutRight');
    }, 1000);
});

// on ecoute dans body le click sur la div removeList de suppression de la liste
$("body").on("click", ".removeList", function(event) {    
    
    // si l'utilisateur confirme la suppression 
    if (confirm('Are you sure?') === true) {
        
        // on cherche l'ancetre parent de .card, la liste 
        var container = $(this).closest('.card').parent();
        
        // on enleve et ajoute les classes d'animation
        container.removeClass('fadeInRight animated slideInRight').addClass('animated bounceOut');
        
        // on boucle sur 1000ms
        setTimeout(() => {
            
            // on ajouter un animation sur toutes les div suivantes de même niveau 
            container.nextAll().removeClass('slideInRight animated').addClass('animated slideInRight');
            
            // on efface la liste
            container.remove();
            
            // on enleve les class d'animation
            $('.animated').removeClass('fadeInRight animated slideInRight flipInX bounceIn fadeOutRight');
        }, 1000);
        
    }
    
});

// on ecoute dans body le click sur le button input
$("body").on( "click", "button.button-addon", function(event) {
    // on interrompt les évément par défault sur le click
    event.preventDefault();
    
    // stock la div .card  de l'élément cliquer et son contenu dans la variable 'container'
    const container = $(this).closest(".card");
    
    // on cherche la balise 'ul' dans 'container' et on la stock dans la variable list
    const list = container.find('ul');
    
    // on cherche la valeur du input dans container de l'élément cliquer et on la stock
    var input = container.find('input[type="text"]');
    
    // on vérifie que la valeur entrée dans 'input' est vide
    if (input.val() === '') {
        
        //Si c'est vide, on construit une variable non modifiable 'divMess' avec un élément div
        var divMess = $('<div>').addClass('alert alert-warning animated bounceIn mx-3')
        .text('Ooops! There is nothing to add.');
        
        divMess.insertBefore(list);
        
        // on efface le message au bout de 3000ms (3s)
        setTimeout(() => {
            divMess.remove();
            $('.animated').removeClass('fadeInRight animated slideInRight flipInX bounceIn fadeOutRight');
        }, 3000);
        // la valeur de input n'est pas vide    
    } else {
        // on construit une variable non modifiable 'li' contenant une balise li
        var li = $('<li>');
        
        // on construit une variable non modifiable 'divMess' et 'divCheck' contenant une balise div
        var divMess = $('<div>');
        var divCheck = $('<div>');
        
        var check, archive;
        
        // on lui attribut des classes aux variable
        li.addClass('list-group-item d-flex justify-content-between align-items-center animated flipInX p-2');
        divMess.addClass('alert alert-success animated fadeInUp mx-3');
        divCheck.addClass('check');
        
        // on utilise la fonction pour creer les spans de Font Awesome 
        check = createSpanFa('checkbox','fa fa-square-o text-muted mr-2',{'aria-hidden': 'true'});
        
        archive = createSpanFa('archive text-danger animated fadeInRight d-none',  
        'fa fa-archive',  
        {'aria-hidden': 'true'}
        );
        
        // on ajoute dans la 'div' du check la balise 'span' et la valeur entré dans l'input
        divCheck.append(check).append(input.val());
        
        // on ajoute dans le 'li' la 'div' du check
        li.append(divCheck).append(archive);
        
        // on ajoute dans la 'div' du message du text
        divMess.text('Task added successfully!');
        
        // on ajout dans la 'list' la 'li
        list.append(li);
        
        // on insert dans le 'container' juste avant la 'list' la 'divMess'
        divMess.insertBefore(list);
        
        // on efface le message au bout de 3000ms (3s)
        setTimeout(() => {

            // on enleve le message
            divMess.remove();

            // on enleve les class d'animation
            $('.animated').removeClass('fadeInRight animated slideInRight flipInX bounceIn fadeOutRight');
        }, 3000);
        
        // on initialise la valeur de l'input
        input.val('');
    }
});

// on ecoute dans body le click sur la div check
$("body").on("click", ".check", function(event) {    
    
    // on désactive ou réactive les class pour compléter ou non les tâches 
    $(this).find('.checkbox>i').toggleClass('text-muted fa-check-square-o fa-square-o text-success animated bounceIn');
    
    //on active ou desactive les class du bouton de suppression des tâches
    $(this).closest('li').find('.archive').toggleClass('d-none animated fadeInRight');
    
});

// on ecoute dans body le click sur la span archive de suppression des tâches
$("body").on("click", ".archive", function(event) {    
    
    // si l'utilisateur confirme la suppression
    //if (confirm('Are you sure?') === true) {
        
        // on cherche l'ancètre li le plus proche en enlevant et ajoutznt des class d'animation
        var li = $(this).closest('li').removeClass('animated flipInX').addClass('animated fadeOutRight'); 
        
        // on cherche l'ancètre ul 
        var list = $(this).closest('ul');
        
        // on boucle sur 1000ms
        setTimeout(() => {
            // on efface la li
            li.remove();
            // on enleve les class d'animation
            $('.animated').removeClass('fadeInRight animated slideInRight flipInX bounceIn fadeOutRight');
        }, 1000);
   // }
});

// fonction pour fabriquer la span des fonts awesome
function createSpanFa( spanClassAdd,  faClassAdd,  FaAttr = null) {
    
    // déclaration des variables pour accueillir les balises span et i
    var span = $('<span>');
    var fa = $('<i>');
    
    // on met les classes pour la span demander par la fonction
    span.addClass(spanClassAdd);
    
    // on met les classes pour la i demander par la fonction
    fa.addClass(faClassAdd);
    
    // on met les attributs pour la i demander par la fonction
    for (var attr in FaAttr) {
        fa.attr(attr,FaAttr[attr]);
    }
    
    // on retourne la span construite
    return span.append(fa);
}
