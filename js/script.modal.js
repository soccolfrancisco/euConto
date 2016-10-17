//Obter o modal
var text01 = document.getElementById('01');
//var text02 = document.getElementById('02');
//var text03 = document.getElementById('03');
var video1 = document.getElementById('video1');
//var video2 = document.getElementById('video2');
//var video3 = document.getElementById('video3');
var menu = document.getElementById('barra-menu');

//Obter o elemento < span> que fecha o modal
var span = document.getElementsByClassName("close")[0];

var modal1 = document.getElementById('myModal1');
//Obter o botão que abre o modal
var btn1 = document.getElementById("myBtn1");
//Quando o usuário clica no botão , abra o modal
btn1.onclick = function () {
    modal1.style.display = "block";
    text01.style.display = "none";
    //text02.style.display = "none";
    //text03.style.display = "none";
    menu.style.display = "none";
    video1.paly();
}

/*var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("myBtn2");
btn2.onclick = function () {
    modal2.style.display = "block";
    text01.style.display = "none";
    text02.style.display = "none";
    text03.style.display = "none";
    menu.style.display = "none";
    video2.paly();
}

var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("myBtn3");
btn3.onclick = function () {
    modal3.style.display = "block";
    text01.style.display = "none";
    text02.style.display = "none";
    text03.style.display = "none";
    menu.style.display = "none";
    video3.paly();
}*/

//Quando o usuário clica em <span> (x), fechar o modal
span.onclick = function () {
    modal1.style.display = "none";
    //modal2.style.display = "none";
   // modal3.style.display = "none";
    text01.style.display = "block";
    //text02.style.display = "block";
    //text03.style.display = "block";
    menu.style.display = "block";
    video1.pause();
    //video2.pause();
    //video3.pause();
}

//Quando o usuário clica em qualquer lugar fora do modal , fechá-lo
window.onclick = function (event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
        text01.style.display = "block";
        //text02.style.display = "block";
        //text03.style.display = "block";
        menu.style.display = "block";
        video1.pause();
    }
    /*if (event.target == modal2) {
        modal2.style.display = "none";
        text01.style.display = "block";
        text02.style.display = "block";
        text03.style.display = "block";
        menu.style.display = "block";
        video2.pause();
    }
    if (event.target == modal3) {
        modal3.style.display = "none";
        text01.style.display = "block";
        text02.style.display = "block";
        text03.style.display = "block";
        menu.style.display = "block";
        video3.pause();
    }*/
}