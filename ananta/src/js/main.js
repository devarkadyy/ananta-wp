const burger = document.querySelector('.burger')
const menu = document.querySelector('.header-inner__wrap')
    burger.onclick  = function (){
    burger.classList.toggle('active')
        menu.classList.toggle('active')
}
const jsArrow = document.querySelector('.js-menu-item-parent')
const jsMenu = document.querySelector('.navigation_level2')
const jsLink = document.querySelector('.header-inner__item--parent .header-inner__link')
jsArrow.onclick = function (e){
    e.preventDefault()
    jsLink.classList.toggle('active')
    jsArrow.classList.toggle('active')
    jsMenu.classList.toggle('active')

}

jQuery(document).ready(function($) {

    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        autoplay: false
    });
})



