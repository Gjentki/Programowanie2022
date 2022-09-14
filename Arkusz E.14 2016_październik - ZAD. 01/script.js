function passwordtest() {
    var passwd = document.getElementById("password").value;
if (passwd.length >= "7") {
    document.getElementById("wynik").innerHTML = "<h1>dobre hasło</h1>".fontcolor('green');
} else if (passwd.length >=4 && passwd.length <=6) {
    document.getElementById("wynik").innerHTML = "<h1>średnie hasło</h1>".fontcolor('orange');
}else {
    document.getElementById("wynik").innerHTML = "<h1>słabe hasło</h1>".fontcolor('red');
}

}