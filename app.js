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

// FOLLOWING MOUSE EFFECT
function mousecursor() {
    if ($("body")) {
        const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
        let n, i = 0,
            o = !1;
        window.onmousemove = function (s) {
            o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
        }, $("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
        }), $("body").on("mouseleave", "a, .cursor-pointer", function () {
            $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
        }), $("body").on("mouseenter", "img, .cursor-pointer", function () {
            e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
        }), $("body").on("mouseleave", "img, .cursor-pointer", function () {
            $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
        }), 
        
        e.style.visibility = "visible", t.style.visibility = "visible"
    }
};

$(function () {
    mousecursor();
});

// INPUT NUMBER LOCKS

$(".info").change(function () {
    if (parseInt($(this).val()) > parseInt($(this).attr("max"))) {
       $(this).val($(this).attr("max"));
    } else if (parseInt($(this).val()) < parseInt($(this).attr("min"))) {
       $(this).val($(this).attr("min"));
    }
});

// CURSOR IN/OUT OF WINDOW

$(document).mouseenter(function () {
    $('.progress-wrap').css('display','block');
});
$(document).mouseleave(function () {
    $('.progress-wrap').css('display','none');
});
