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
    frLang.style.setProperty("display", "block", "important")
    enLang.style.setProperty("display", "none", "important")
    fra.style.setProperty("display", "block", "important");
    eng.style.setProperty("display", "none", "important");
    a = document.getElementById('a').placeholder='Nom du personnage';
    b = document.getElementById('b').placeholder='Niveau du personnage';
    c = document.getElementById('c').placeholder='Pour quelle raison nous contactez-vous ?';
}
function en(){
    frLang.style.setProperty("display", "none", "important");
    enLang.style.setProperty("display", "block", "important");
    fra.style.setProperty("display", "none", "important");
    eng.style.setProperty("display", "block", "important");
    a = document.getElementById('a').placeholder='Character Name';
    b = document.getElementById('b').placeholder='Character Level';
    c = document.getElementById('c').placeholder='What is the reason of you contacting us ?';
}

function contact(){
    contactForm.style.opacity = '100%';
    contactForm.style.pointerEvents = 'all';
}