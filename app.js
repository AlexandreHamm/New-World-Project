let contactForm = document.querySelector('.formulaire'),
    confirmation = document.querySelector('.confirmation'),
    fra = document.querySelector('.fr'),
    eng = document.querySelector('.en'),
    frLang = document.querySelector('.frLang'),
    enLang = document.querySelector('.enLang');
    


function home(){
    contactForm.style.opacity = '0';
    contactForm.style.pointerEvents = 'none';
    confirmation.style.opacity = '0%';
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
    frLang.style.display = 'block';
    enLang.style.display = 'none';
    eng.style.display = 'none';
    fra.style.display = 'block';
    a = document.getElementById('a').placeholder='Nom du personnage';
    b = document.getElementById('b').placeholder='Niveau du personnage';
    c = document.getElementById('c').placeholder='Pour quelle raison nous contactez-vous ?';
}
function en(){
    frLang.style.display = 'none';
    enLang.style.display = 'block';
    fra.style.display = 'none';
    eng.style.display = 'block';
    a = document.getElementById('a').placeholder='Character Name';
    b = document.getElementById('b').placeholder='Character Level';
    c = document.getElementById('c').placeholder='What is the reason of you contacting us ?';
}

function contact(){
    contactForm.style.opacity = '100%';
    contactForm.style.pointerEvents = 'all';
}