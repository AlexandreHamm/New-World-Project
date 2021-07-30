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

function contact(){
    contactForm.style.opacity = '100%';
    contactForm.style.pointerEvents = 'all';
}