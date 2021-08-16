let contactForm = document.querySelector('.formulaire'),
    confirmation = document.querySelector('.confirmation'),
    cont = 0;


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
    if(cont == 0){
        $('.container').css({'position':'absolute','right':'0','transform':'translate(0)','width':'85vw','height':'100vh','margin-top':'0'});
        $('.divLogo').css('transform','translateX(-15.5vw) translateY(-20%) scale(80%)');
        $('nav').css({'max-width':'15vw','height':'100vh','max-height':'100vh','top':'0','transform':'translateX(-50vw) translateY(-2%)'});
        $('.navbar-nav').css('flex-direction','column');
        $('.dropbtn').css({'width':'15vw','height':'100px','max-height':'80px','font-size':'1.5rem'});
        $('.dropdown-content').css('left','15vw');
        $('.guide').css('transform','translateY(3.2vh)');
        $('.build').css('transform','translateY(11.45vh)');
        $('.bgvid').css('display','none');
        cont = 1;
    }
    else if(cont == 1){
        $('.container').css({'position':'relative','right':'-50%','transform':'translateX(-50%)','width':'70vw','height':'100vh','margin-top':'2rem'});
        $('.divLogo').css('transform','translateX(0) translateY(0%) scale(100%)');
        $('nav').css({'max-width':'70vw','max-height':'50px','transform':'translateX(-50%) translateY(0)'});
        $('.navbar-nav').css('flex-direction','row');
        $('.dropbtn').css({'width':'100%','height':'100%','max-height':'50px','font-size':'24px'});
        $('.dropdown-content').css('left','');
        $('.guide').css('transform','translateY(0)');
        $('.build').css('transform','translateY(0)');
        $('.bgvid').css('display','block');
        cont = 0;
    }
}