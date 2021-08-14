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
        $('.divLogo').css('transform','translateX(-80%) translateY(-20%) scale(80%)');
        $('nav').css('transform','translateX(-111%) translateY(-20%)');
        $('.navbar-nav').css('flex-direction','column');
        $('.dropbtn').css({'width':'15.35vw','height':'100px','max-height':'100px','font-size':'1.8rem'});
        $('.guide').css('transform','translateX(185%) translateY(21.5%)');
        $('.build').css('transform','translateX(185%) translateY(56.2%)');
        $('.bgvid').css('display','none');
        cont = 1;
    }
    else if(cont == 1){
        $('.container').css({'position':'relative','right':'-50%','transform':'translateX(-50%)','width':'70vw','height':'100vh','margin-top':'2rem'});
        $('.divLogo').css('transform','translateX(0) translateY(0%) scale(100%)');
        $('nav').css('transform','translateX(-50%) translateY(0)');
        $('.navbar-nav').css('flex-direction','row');
        $('.dropbtn').css({'width':'100%','height':'100%','max-height':'50px','font-size':'24px'});
        $('.bgvid').css('display','block');
        cont = 0;
    }
}