/*USADO PARA OWL CAROUSEL - LÍNEA DE CODIGO: 119 EN ARCHIVO "index.php"*/
$('.owl-carousel').owlCarousel({ 
    loop:true,
    margin:80,
    nav:true,
    center: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})