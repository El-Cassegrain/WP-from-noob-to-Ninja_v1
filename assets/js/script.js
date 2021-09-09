/* Script */

/* Sidenav */
const closeBtn = document.querySelector('#close-btn')
const aside = document.querySelector('aside')
const openBtn = document.querySelector('#open-btn')
const tabNav = document.querySelector('#tab-nav')

closeBtn.addEventListener('click', function () {
    aside.classList.add('hide-aside')
    openBtn.removeAttribute('hidden')
    openBtn.classList.add('show-menu')
    tabNav.classList.remove('sidenav-opened')
    tabNav.classList.add('sidenav-closed')

    /* GSAP Animation Sidenav*/
    var tl = gsap.timeline({
        defaults: {
            duration: 0.15
        }
    });
    tl.to("#svg-wrapper", {
        stagger: 0.2,
        opacity: 0
    });

    var tl2 = gsap.timeline({
        defaults: {
            duration: 0.15
        }
    });
    tl2.to(".logo-wrapper", {
        opacity: 0
    });

    var tl3 = gsap.timeline({
        defaults: {
            duration: 0.05
        }
    });
    tl3.to("#link1", {
        x: -25,
        opacity: 0
    });
    tl3.to("#link2", {
        x: -35,
        opacity: 0
    });
    tl3.to("#link3", {
        x: -45,
        opacity: 0
    });
    tl3.to("#link4", {
        x: -55,
        opacity: 0
    });
})

openBtn.addEventListener('click', function () {
    aside.classList.remove('hide-aside')
    openBtn.setAttribute('hidden', 'true')
    tabNav.classList.add('sidenav-opened')
    tabNav.classList.remove('sidenav-closed')

    /* GSAP Animation Sidenav */
    var tl = gsap.timeline({
        defaults: {
            duration: 0.8
        }
    });
    tl.to("#svg-wrapper", {
        y: 0,
        opacity: 1
    });

    var tl2 = gsap.timeline({
        defaults: {
            duration: 0.65
        }
    });
    tl2.to(".logo-wrapper", {
        opacity: 1
    });

    var tl3 = gsap.timeline({
        defaults: {
            duration: 0.25
        }
    });
    tl3.to("#link1", {
        x: 0,
        opacity: 1
    });
    tl3.to("#link2", {
        x: 0,
        opacity: 1
    });
    tl3.to("#link3", {
        x: 0,
        opacity: 1
    });
    tl3.to("#link4", {
        x: 0,
        opacity: 1
    });
});

/* Forms */
jQuery(function ($) {
    $('.wpcf7-form-control').focus(function () {
        $(this).parent().parent().addClass('is-focused has-label');
    })

    $('.field-input').blur(function () {
        $parent = $(this).parent().parent();

        if ($(this).val() == '') {
            $parent.removeClass('has-label')
        }
        $parent.removeClass('is-focused');
    })

    $('textarea').focus(function () {
        $(this).parent().parent().addClass('is-focused has-label');
    })

    $('textarea').blur(function () {
        $parent = $(this).parent().parent();

        if ($(this).val() == '') {
            $parent.removeClass('has-label')
        }
        $parent.removeClass('is-focused');
    })
});

/* Engage modal autofocus */
var myModal = document.getElementById('engageModal')
var myInput = document.getElementById('firstInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})

