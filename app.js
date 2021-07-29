let contactForm = document.querySelector('.formulaire'),
    confirmation = document.querySelector('.confirmation');


function home(){
    contactForm.style.opacity = '0';
    contactForm.style.pointerEvents = 'none';
}

function guides(){
    contactForm.style.opacity = '0';
    contactForm.style.pointerEvents = 'none';
}

function builds(){
    contactForm.style.opacity = '0';
    contactForm.style.pointerEvents = 'none';
}

function fr(){
    a = document.getElementById('a')[0].placeholder='Nom du personnage';
    b = document.getElementById('b')[0].placeholder='Niveau du personnage';
    c = document.getElementById('c')[0].placeholder='Pour quelle raison nous contactez-vous ?';
}
function en(){
    a = document.getElementById('a')[0].placeholder='Character Name';
    b = document.getElementById('b')[0].placeholder='Character Level';
    c = document.getElementById('c')[0].placeholder='What is the reason of you contacting us ?';
}

function contact(){
    contactForm.style.opacity = '100%';
    contactForm.style.pointerEvents = 'all';
}