
const sideNav = document.querySelector('.side-nav')
const sidenNavcontent = document.querySelector('.sidenav-content')
const sidenNavclose = document.querySelector('.sidenav-closebtn')
const sideNavoverlay = document.querySelector('.sidenav-overlay')
const overlaySearch = document.querySelector('.search-overlay')
const searchBtn = document.querySelector('.top-nav-right-searchbtn')
const searchClose = document.querySelector('.search-overlay-close')
const topNavlang = document.querySelector('.top-nav-right-lang')
const tabures = document.querySelectorAll('[data-tabure-target]')
const tabureContents = document.querySelectorAll('[data-tabure-content]')


$(document).ready(function() {

    $('#nav-icon1').click(function() {
        $(topNavlang).slideToggle("fast");
    });


    $('#nav-icon2').click(function() {
        $(sideNav).addClass('sidenav-active')
        $(sidenNavcontent).addClass('sidenav-content-active')
        $(sideNavoverlay).addClass('sidenav-overlay-active')


    });
    $(sideNavoverlay).click(function() {
        $(sideNav).removeClass('sidenav-active')
        $(sidenNavcontent).removeClass('sidenav-content-active')
        $(sideNavoverlay).removeClass('sidenav-overlay-active')


    });
    $(sidenNavclose).click(function() {
        $(sideNav).removeClass('sidenav-active')
        $(sidenNavcontent).removeClass('sidenav-content-active')
        $(sideNavoverlay).removeClass('sidenav-overlay-active')


    });

    $(searchBtn).click(function() {
        $(overlaySearch).fadeIn()
    });

    $(searchClose).click(function() {
        $(overlaySearch).fadeOut()
    });

    if ($(window).width() < 1150) {
        $(".menu-item-has-children > a").after('<i class="fa fa-angle-right"></i>');
        $('.menu-item-has-children .fa-angle-right').click(function() {
            $(this).next('.sub-menu').slideToggle("fast");
            $(this).toggleClass("rotate-angle")
        });
    }

    tabures.forEach(tabure => {
        tabure.addEventListener('click', () => {
            const target = document.querySelector(tabure.dataset.tabureTarget)
            tabureContents.forEach(tabureContent => {
                tabureContent.classList.remove('aktif')
            })
            tabures.forEach(tabure => {
                tabure.classList.remove('aktif')
            })
            tabure.classList.add('aktif')
            target.classList.add('aktif')
        })
    })
    const de = document.querySelectorAll(".harf-siniri");
    for(var i = 0; i < de.length; i++){
      var ben = de[i].innerHTML;
      var den = ben.substr(0, 160); 
      de[i].innerHTML =  den + "..."; // yazdır
  
    }


})