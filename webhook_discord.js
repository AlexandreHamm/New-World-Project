let form = document.querySelector('form');
let a,
    b,
    c;


    //////////////////////// JS /////////////////////////////

// function add(a,b,c){
//         console.log('Ca fonctionne fdp');
//         msg = '`IG Name: ' + a + '\n\n' + 'Level: ' + b + '\n\n' + 'Message: ' + c + '`'
//         sendMessage();
//         form.style.opacity = '0'
//         form.style.pointerEvents = 'none'
//         msgSent.style.opacity = '100'
// }

// function sendMessage() {
//     var request = new XMLHttpRequest();
//     request.open("POST", "https://discord.com/api/webhooks/869547241860395058/vV7hV497JqhnhpUkPV4TmcCtkuLJrraA5VfV_KfQasxMKmQdwh5rOzzA0-rIAdEFfM5-");

//     request.setRequestHeader('Content-type', 'application/json');

//     var params = {
//         username: "K. N. Project",
//         avatar_url: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi0Vir59aEznFwj5WJE9XQFGsk_fc9FnHnZnlMFFKXfcCJcK89TlNwFT0815d7bUTYWc4&usqp=CAU",
//         content: msg
// }

// request.send(JSON.stringify(params));
// }


    //////////////////////// JQUERY /////////////////////////

// this is the id of the form

$(".formBtn").click(function(e) { 

    e.preventDefault(); // avoid to execute the actual submit of the form.

    let form = $(".formcontent");

    $('form').each(function() {
        if ($('.info').val() != '') {
            a = document.getElementById('a').value,
            b = document.getElementById('b').value,
            c = document.getElementById('c').value;

            $(".formBtn").prop('disabled', true); 

            $.ajax({
                type: "POST",
                url: "https://discord.com/api/webhooks/869954184324210739/fOdF39yL-B4Jz5QHscBk9KiAYt-3wTpDQzf9KQtlSCLFVCxlDD41G93yYquFF5ZxqGR0",
                headers: {
                    'Content-Type': 'application/json',
                },
                data: JSON.stringify({
                    // the username to be displayed
                    username: 'Captain Thorpe',
                    // the avatar to be displayed
                    avatar_url:
                      'https://i.imgur.com/zPqXIWH.png',
                    // contents of the message to be sent
                    embeds: [
                        {
                            // decimal number colour of the side of the embed
                            color: 16293483,
                            // author
                            // - icon next to text at top (text is a link)
                            author: {
                                name: 'Cave Canem',
                                url: 'https://alexandreh.promo-90.codeur.online/New-World-Project/',
                                icon_url: 'https://i.imgur.com/wKKjAdG.png',
                            },
                            // embed title
                            // - link on 2nd row
                            title: 'Application',
                            url:
                                'https://alexandreh.promo-90.codeur.online/New-World-Project/',
                            // thumbnail
                            // - small image in top right corner.
                            thumbnail: {
                                url:
                                'https://i.imgur.com/hmiiHeO.png',
                            },
                            // embed description
                            // - text on 3rd row
                            description: ' ',
                            // custom embed fields: bold title/name, normal content/value below title
                            // - located below description, above image.
                            fields: [
                                {
                                name: 'Nom du personnage :',
                                value: a,
                                },
                                {
                                name: 'Level :',
                                value: b,
                                },
                                {
                                name: 'Message :',
                                value: c,
                                },
                                // {
                                // name: 'field 3',
                                // value: 'other value',
                                // },
                            ],
                            // image
                            // - picture below description(and fields)
                            image: {
                                url:
                                'https://i.imgur.com/6J5PRTX.png',
                            },
                            // footer
                            // - icon next to text at bottom
                            footer: {
                                text: 'new world',
                                icon_url:
                                'https://i.imgur.com/RBojflk.png',
                            },
                        },
                      ],
                }),
                
                success: function(data)
                {
                $(".formcontent").addClass('hideForm');
                $(".confirmation").css('opacity','100%');
                },
                error: function(){
                    // COMME SUCCESS, MAIS MESSAGE D'ERREUR
                }
                });
        }
        else{
            alert('Veuillez renseigner tous les champs.');
            return false
        }
    });    
    
    }); 

// $('.formBtn').on('click',function(){ 
//     $('input').each(function() {
//         if ($(this).val() != '') {
//             console.log('all inputs filled');
//             msg = '`IG Name: ' + a + '\n\n' + 'Level: ' + b + '\n\n' + 'Message: ' + c + '`'
//             sendMessage();
//             form.style.opacity = '0'
//             form.style.pointerEvents = 'none'
//             msgSent.style.opacity = '100'
//         }
//         else{
//             console.log('theres an empty input');
//             return false
//         }
//     });
// })
