<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>CryptoVenezuela</title>
     <link rel="stylesheet" href="css/style.css" />
     <link rel="stylesheet" href="css/app.css" />
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/all.css" />
     <link rel="stylesheet" href="css/animete.min.css" />
     <link rel="stylesheet" href="css/flaticon.css" />
     <link rel="stylesheet" href="css/jquery-ui.min.css" />
     <link rel="stylesheet" href="css/owl.transitions.css" />
     <link rel="stylesheet" href="css/responsive.css" />
     <link rel="stylesheet" href="css/theme-default.css" />
     <link rel="stylesheet" href="css/widget.css" />
     <link rel="stylesheet" href="css/jquerytable.css" />
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
     
</head>
<body style="overflow: hidden" >
   
<div  class="menu">

    @yield('main')

</div>
<!------ Include the above in your HEAD tag ---------->
<div>
 @include('inicio.footer')
 </div>
<!--===================================================-->
<div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"></script>

<script src="js/all.min.js"> </script>
<script src="js/app.js"> </script>
<script src="js/imagesloaded.pkgd.min.js"> </script>
<script src="js/isotope.pkgd.min.js"> </script>
<script src="js/jquery-3.2.1.min.js"> </script>
<script src="js/jquery-ui.min.js"> </script>
<script src="js/jquery.appear.js"> </script>
<script src="js/jquery.counterup.min.js"> </script>
<script src="js/jquery.meanmenu.js"> </script>
<script src="js/jquery.nivo.slider.pack.js"> </script>
<script src="js/jquery.scrollUp.js"> </script>
<script src="js/owl.carousel.min.js"> </script>
<script src="js/swiper.min.js"> </script>
<script src="js/theme.js"> </script>
<script src="js/venobox.js"> </script>
<script src="js/venobox.min.js"> </script>
<script src="js/waypoints.min.js"> </script>
<script src="js/wow.min.js"> </script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"></script>
<script>
    $(window).on('scroll', function () {
   var scrolled = $(window).scrollTop();
   if (scrolled > 300) $('.go-top').addClass('active');
   if (scrolled < 300) $('.go-top').removeClass('active');
});

$('.go-top').on('click', function () {
   $("html, body").animate({
       scrollTop: "0"
   }, 1200);
});
</script>

<script>
   "use strict";
   jQuery,
   jQuery(document).ready(function (o) {
       0 < o(".offset-side-bar").length &&
       o(".offset-side-bar").on("click", function (e) {
           e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
       }),
       0 < o(".close").length &&
       o(".close").on("click", function (e) {
           e.preventDefault(), o(".cart-group").removeClass("isActive");
       }),
       0 < o(".navSidebar-button").length &&
       o(".navSidebar-button").on("click", function (e) {
           e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
       }),
       0 < o(".close").length &&
       o(".close").on("click", function (e) {
           e.preventDefault(), o(".info-group").removeClass("isActive");
       }),
       o("body").on("click", function (e) {
           o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
       }),
       o(".dt-sidebar-widget").on("click", function (e) {
           e.stopPropagation();
       }),
       0 < o(".xs-modal-popup").length &&
       o(".xs-modal-popup").magnificPopup({
           type: "inline",
           fixedContentPos: !1,
           fixedBgPos: !0,
           overflowX: "auto",
           closeBtnInside: !1,
           callbacks: {
               beforeOpen: function () {
                   this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
               },
           },
       });
   });

</script>

<script>

/* Extra class "tab_last" 
to add border to right side
of last tab */
$('ul.tabs li').last().addClass("tab_last");

$(document).ready(function() {
    $('#example').DataTable({
        pageLength: 10,
        lengthMenu: [10],
        order: [[ 1, "asc" ]],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
       
    });
    });


</script>

<script>
  $(function(){ 
$('.ocultar:first').show();
$('.depertment-list a').on('click', function(){
    $('.ocultar').hide();
   var enlace = $(this).attr('href');
   $(enlace).fadeIn(1000);

   return false;
});
});
 </script>
 </body>
</html>

