let screenValue = 0; // 0 is standard ; 1 is fullscreen

// HOME BTN

function home(){
    $('.content').load('./src/pages/home.php');
}

// GUIDES BTNS

$('#chxp').click(function () {
    $('.content').load('./src/pages/guides/characterXp.php');
});
$('#wxp').click(function () {
    $('.content').load('./src/pages/guides/weaponXp.php');
});
$('#inv').click(function () {
    $('.content').load('./src/pages/guides/invasions.php');
});
$('#skin').click(function () {
    $('.content').load('./src/pages/guides/skinning.php');
});
$('#min').click(function () {
    $('.content').load('./src/pages/guides/mining.php');
});
$('#log').click(function () {
    $('.content').load('./src/pages/guides/logging.php');
});
$('#harv').click(function () {
    $('.content').load('./src/pages/guides/harvesting.php');
});
$('#fish').click(function () {
    $('.content').load('./src/pages/guides/fishing.php');
});
$('#war').click(function () {
    $('.content').load('./src/pages/guides/wars.php');
});
$('#fort').click(function () {
    $('.content').load('./src/pages/guides/fortresses.php');
});
$('#city').click(function () {
    $('.content').load('./src/pages/guides/cities.php');
});

// BUILDS BTNS

$('#ss').click(function () {
    $('.content').load('./src/pages/builds/swordshield.php');
});
$('#hatch').click(function () {
    $('.content').load('./src/pages/builds/hatchet.php');
});
$('#rap').click(function () {
    $('.content').load('./src/pages/builds/rapier.php');
});
$('#lan').click(function () {
    $('.content').load('./src/pages/builds/lance.php');
});
$('#hamm').click(function () {
    $('.content').load('./src/pages/builds/hammer.php');
});
$('#grtx').click(function () {
    $('.content').load('./src/pages/builds/greataxe.php');
});
$('#bow').click(function () {
    $('.content').load('./src/pages/builds/bow.php');
});
$('#musk').click(function () {
    $('.content').load('./src/pages/builds/musket.php');
});
$('#fires').click(function () {
    $('.content').load('./src/pages/builds/firestaff.php');
});
$('#iceg').click(function () {
    $('.content').load('./src/pages/builds/icegauntlet.php');
});
$('#lifes').click(function () {
    $('.content').load('./src/pages/builds/lifestaff.php');
});

function contact(){
    $('.content').load('./src/pages/contact.php');   
}

function fullscreen(){
    if(screenValue == 0){
        $('.container').css({'position':'absolute','right':'0','transform':'translate(0)','width':'85vw','height':'100vh','margin-top':'0'});
        $('.divLogo').css('transform','translateX(-15.5vw) translateY(-20%) scale(80%)');
        $('nav').css({'max-width':'15vw','height':'100vh','max-height':'100vh','top':'0','transform':'translateX(-50vw) translateY(-2%)'});
        $('.navbar-nav').css('flex-direction','column');
        $('.dropbtn').css({'width':'15vw','height':'100px','max-height':'80px','font-size':'1.5rem'});
        $('.dropdown-content').css('left','15vw');
        $('.guide').css('transform','translateY(3.2vh)');
        $('.build').css('transform','translateY(11.45vh)');
        $('.bgvid').css('display','none');
        screenValue = 1;
    }
    else if(screenValue == 1){
        $('.container').css({'position':'relative','right':'-50%','transform':'translateX(-50%)','width':'70vw','height':'100vh','margin-top':'2rem'});
        $('.divLogo').css('transform','translateX(0) translateY(0%) scale(100%)');
        $('nav').css({'max-width':'70vw','max-height':'50px','transform':'translateX(-50%) translateY(0)'});
        $('.navbar-nav').css('flex-direction','row');
        $('.dropbtn').css({'width':'100%','height':'100%','max-height':'50px','font-size':'24px'});
        $('.dropdown-content').css('left','');
        $('.guide').css('transform','translateY(0)');
        $('.build').css('transform','translateY(0)');
        $('.bgvid').css('display','block');
        screenValue = 0;
    }
}

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
