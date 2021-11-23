document.querySelector('.mobile_menu').addEventListener('click',menuMobile);

function menuMobile(){

    let lista = document.getElementById('lista');
    if(lista.classList.contains('show')){

        lista.classList.remove('show');
        lista.classList.add('close');
        
    }else{

        lista.classList.remove('close');
        lista.classList.add('show');

    }
}