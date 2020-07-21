var btnPrev = document.querySelector('.prev');

var btnNext = document.querySelector('.next');

var images = document.querySelectorAll('.galery .photos img');


var i = 0;

btnPrev.onclick = function() {
    images[i].className = '';
    images[i].style.zIndex = '0';
    i--;
    if (i < 0) {
        i = images.length-1;
    }
    images[i].className = 'photos-active';
    images[i].style.zIndex = '1';
   
}


btnNext.onclick = function () {
    images[i].className = '';
    images[i].style.zIndex = '0';
    i++;
     if(i >= images.length) {
        i = 0;
    }
    images[i].className = 'photos-active';
    images[i].style.zIndex = '1';
   
}