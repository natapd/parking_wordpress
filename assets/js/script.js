var MainNav = document.querySelector('.main-nav');
var Toggle = document.querySelector('.main-nav__toggle');

MainNav.classList.remove('main-nav--nojs');

Toggle.addEventListener('click', function() {
    if (MainNav.classList.contains('main-nav--closed')) {
        MainNav.classList.remove('main-nav--closed');
        MainNav.classList.add('main-nav--opened');
    } else {
        MainNav.classList.add('main-nav--closed');
        MainNav.classList.remove('main-nav--opened');
    }
});
// Фотогалерея
var pictures = [
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_1_2400.jpg',
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_2_2400.jpg',
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_3_2400.jpg',
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_4_2400.jpg'
];
var pictures_small = [
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_1_768x2.jpg',
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_2_768x2.jpg',
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_3_768x2.jpg',
    '<?php echo get_template_directory_uri() ?>/assets/img/IMG_4_768x2.jpg'
];
var smallPhoto = document.querySelectorAll('.photos__item');
var fullpic = document.querySelector('.full');
var fullpic_1200 = document.querySelector('.full-1200');

var ChangePhoto = function(kn, pic, picSmall) {
    kn.addEventListener('click', function() {
        if (window.innerWidth >= 1200) {
            fullpic_1200.srcset = pic;
        } else {
            fullpic.src = picSmall;
        }

    });

};
for (var i = 0; i < smallPhoto.length; i++) {
    ChangePhoto(smallPhoto[i], pictures[i], pictures_small[i]);
};



var Popup = document.querySelector('.formEmail');
var EmailLink1 = document.querySelector('.EmailLink');
var EmailLink2 = document.querySelector('.EmailLink2');
var CloseBtn = document.querySelector('.close-popup');
var onCloseClick = function() {
    Popup.classList.add("hidden");
}

var onLinkClick = function() {

    Popup.classList.remove("hidden");
    CloseBtn.addEventListener('click', onCloseClick);
}

EmailLink1.addEventListener('click', onLinkClick);
EmailLink2.addEventListener('click', onLinkClick);

