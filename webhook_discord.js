let msg;

function add(a,b,c){
    msg = a + '\n' + b + '\n' + c
    sendMessage();
}

function sendMessage() {
    var request = new XMLHttpRequest();
    request.open("POST", "https://discord.com/api/webhooks/869547241860395058/vV7hV497JqhnhpUkPV4TmcCtkuLJrraA5VfV_KfQasxMKmQdwh5rOzzA0-rIAdEFfM5-");

    request.setRequestHeader('Content-type', 'application/json');

    var params = {
        username: "K. N. Project",
        avatar_url: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi0Vir59aEznFwj5WJE9XQFGsk_fc9FnHnZnlMFFKXfcCJcK89TlNwFT0815d7bUTYWc4&usqp=CAU",
        content: msg
}

request.send(JSON.stringify(params));
}