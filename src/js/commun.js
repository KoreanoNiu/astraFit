const buttonOpen = document.querySelector('.bars');

document.querySelector('main').addEventListener('click', function(){
    if(buttonOpen.classList.contains('active')){
        document.querySelector('.full-menu').classList.remove('opened');
        buttonOpen.classList.remove('active');
    }
});