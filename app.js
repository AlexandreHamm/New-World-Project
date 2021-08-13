let contactForm = document.querySelector('.formulaire'),
    confirmation = document.querySelector('.confirmation'),
    c = 0;


function home(){
    $('.white').fadeIn();
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
    $('.white').fadeOut();
    contactForm.style.opacity = '100%';
    contactForm.style.pointerEvents = 'all';
}

function fullscreen(){
    if(c == 0){
        $('.container').css({'position':'absolute','right':'0','transform':'translate(0)','width':'85vw','height':'100vh','margin-top':'0'});
        $('.fullscrnBtn').css({'top':'0','right':'0'});
        $('.bgvid').css('display','none');
        c = 1;
    }
    else if(c == 1){
        $('.container').css({'position':'relative','right':'-50%','transform':'translateX(-50%)','width':'70vw','height':'100vh','margin-top':'2rem'});
        $('.fullscrnBtn').css({'top':'20vh','right':'13.7vw'});
        $('.bgvid').css('display','block');
        c = 0;
    }
}