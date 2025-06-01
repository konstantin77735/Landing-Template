<!DOCTYPE html>
<html class="no-webp" lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/firstStyles.min.css" media="none" onload="media='all'">
    <link rel="stylesheet" href="assets/css/basic_components/normalize.min.css" media="none" onload="media='all'">
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">
    <title>Ресторан</title>
    <style>
      body {margin:0}.preloader {position:fixed;left:0;top:0;right:0;bottom:0;background:#111;z-index:1001;}.preloader__row{position:relative;top:50%;left:50%;width:70px;height:70px;margin-top:-35px;margin-left:-35px;text-align:center;animation:preloader-rotate 1s infinite linear;}.preloader__item{position:absolute;display:inline-block;top:0;background-color:#00c2d0;border-radius:100%;width:35px;height:35px;animation:preloader-bounce 1s infinite ease-in-out}.preloader__item:last-child{top:auto;bottom:0;animation-delay:-1s}@keyframes preloader-rotate{100%{transform:rotate(360deg);}} @keyframes preloader-bounce{0%,100%{transform:scale(0);}50%{transform:scale(1)}} .loaded_hiding .preloader{transition:0.3s opacity;opacity:0}.loaded .preloader{display:none}
      
      
    </style>
    <script src="assets/js/firstScripts.js" type="module"></script>
  </head>
  <script async="">
    window.onload = function() {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function() {
    document.body.classList.add('loaded');
    document.body.classList.remove('loaded_hiding');
    }, 500);
    }
      
    
  </script>
  <body>       
    <div class="preloader">
      <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
      </div>
    </div>
    <div class="wrapper nav_wrapper nav_wrapper_mobile">
      <div class="nav"><img class="logo" src="assets/img/2nav/veronica.svg">
        <div class="burger"><span class="burger__line line1"></span><span class="burger__line line2"></span><span class="burger__line line3"></span></div>
        <div class="mobile-menu"></div>
      </div>
    </div>
    <script src="assets/js/basic_components/jquery/jquery.min.js"></script>
    <script src="https://unpkg.com/imask@6.4.2/dist/imask.js"></script>
    <script src="assets/js/basic_components/slickslider/slick.min.js"></script>
    <script src="assets/js/map.js" type="module"></script>
    <script src="assets/js/secondScripts.js" type="module"></script>
    <script async>
      function appendToHead(a,c){
          if("css"==a)
          {var b=document.createElement("link");
          b.rel="stylesheet",
          b.href=c,document.head.appendChild(b)
          }
          if("js"==a||"javascript"==a){
              var d=document.createElement("script");
              d.src=c,document.head.appendChild(d)}
          }
      
      appendToHead('css', 'assets/css/secondStyles.min.css');
    </script>
    <script></script>
  </body>
</html>