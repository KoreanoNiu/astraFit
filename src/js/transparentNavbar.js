const navbar = document.querySelector('header');
window.onscroll = ( function() {
    var scroll = document.documentElement.scrollTop || document.body.scrollTop;

    if(scroll/1000 > 1){
      navbar.style.backgroundColor = 'rgba(255, 255, 255, 1)';
    }else{
      navbar.style.backgroundColor = 'rgba(255, 255, 255, ' + scroll/1000 + ')';
    }
  });