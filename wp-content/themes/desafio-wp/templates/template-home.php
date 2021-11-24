<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage DESAFIO-WP
 * @since 1.0
 */

get_header();
?>

<section class="hero">
    <div class="linha">
        <h2 class="intro">Introducing</h2>
        </div>
        <div class="linha">
        <div class="coluna col1"><h1 class="heroh1">Revolutionary <span class="azul">co-working space to realize your innovation</span></h1></div>
        
        <div class="coluna col2"><h2 class="texto">In frispes, we spearhead new initiatives and provide mentorship to a new startup, and help grow their opportunities in key local, regional and global markets</h2></div>       
        </div>
<div class="bghero">

    <div class="slider2 sombra">
      <div class="slide2 slide--1">
        <img src="/wp-content/themes/desafio-wp/img/bg_hero.png" alt="">
      </div>

      <div class="slide2 slide--2">
        <img src="/wp-content/themes/desafio-wp/img/bg_hero-2.jpg">
      </div>

      <div class="slide2 slide--3">
        <img src="/wp-content/themes/desafio-wp/img/bg_hero-3.jpg">
      </div>
      
      <button class="slider__btn slider__btn--left">&larr;</button>
      <button class="slider__btn slider__btn--right">&rarr;</button>
      <div class="dots2"></div>
    </div>
   
<!-- 
  <img src="/wp-content/themes/desafio-wp/img/bg_hero.png" alt="" class="imghero sombra"> -->
  <div class="boxspace">
    <h3 class="titspace">Find your space now</h3>
    <form name="formspace" type="post" class="formspace">
      <div class="custom-select" style="width:365px;">
        <label class="location">Location</label>
        <select>
          <option value="0">Malang, Indonesia</option>
          <option value="1">Malang, Indonesia</option>
          <option value="2">Bali, Indonesia</option>
          <option value="3">Denpasar, Indonesia</option>
          
        </select>
      </div>
    </form>
    <form name="formspace" type="post" class="formspace">
      <div class="custom-select" style="width:365px;">
        <label class="location">Type</label>
        <select>
          <option value="0">Private Office</option>
          <option value="1">Private Office</option>
          <option value="2">Shared Office</option>
          
        </select>
      </div>
    </form>
    <form name="formspace" type="post" class="formspace">
      <div class="custom-select2" style="width:365px;background-color: #0D2C4A;">
        <label class="location">Date</label>
        <input type=text name="bdate" id="bdate" class="datepicker" value="9 Aug 2020" style="color:#fff; border-bottom:0; font-family: Lato; font-size: 16px; line-height: 26px; margin: 0;padding-left: 16px;padding-top: 23px;cursor: pointer;">
        <!--<select class="esconde">
          <option value="0">9 Aug 2020</option>         
        </select>-->
      </div>
    </form>
  <div class="botao">
    <a href="#" class="botenvia">FIND MY SPACE</a>
  </div>
  </div>
</div>

</section>

<section class="spaces">

  <div class="linha linhacenter">
    <div class="coluna col2"><h2 class="spacesh2">Our Spaces</h2></div>
    
    <div class="coluna col1"><h3 class="texto2">Our space is designed to give you a different experience when working with your team or presonally</h3></div>       
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-1.jpg"><h4>Working with Team</h4></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-2.jpg" class="imagem"></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-3.jpg"><h4>Custom Office</h4></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-1.jpg"><h4>Working with Team</h4></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-2.jpg" class="imagem"></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-3.jpg"><h4>Custom Office</h4></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-1.jpg"><h4>Working with Team</h4></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-2.jpg" class="imagem"></div>
          <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/space-3.jpg"><h4>Custom Office</h4></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

</section>

<section class="clients">
  <div class="linhablock">
    <h2 class="spacesh2 center">Who uses Frispes?</h2>
    <h3 class="texto2 texto3 center">Big brands, small bussiness, new startuo and inividuals</h3>
    <div class="swiper-button-next">&rarr;</div>
    <div class="swiper-button-prev">&larr;</div>
    <div class="swiper2 clientes">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-google.png" alt="Google"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-tokopedia.png" alt="Tokopedia"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-upwork.png" alt="Upwork"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-microsoft.png" alt="Microsoft"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-shopify.png" alt="Shopify"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-stripe.png" alt="Stripe"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-google.png" alt="Google"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-tokopedia.png" alt="Tokopedia"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-upwork.png" alt="Upwork"></div>
        <div class="swiper-slide"><img src="/wp-content/themes/desafio-wp/img/logo-microsoft.png" alt="Microsoft"></div>
       </div>
    </div>
  </div>
</section>
<section class="facilities">
  <div class="linha">
      <h2 class="intro" style="margin-bottom: 12px;">Our Facilities</h2>
      </div>
      <div class="linha">
      <div class="coluna colfacil"><h2 class="spacesh2 mt0">All facilities are designed to meet all your needs</h2></div>
      </div>
      <div class="linha">
        <div class="coluna col2">
          <ul class="ulfacilities" id="ulfac">
            <li><a href="#/" class="ativo" onclick="mudaFoto('facilities-photo-1')">Spacious parking area</a></li>
            <li><a href="#/" onclick="mudaFoto('facilities-photo-2')">Comfortable spaces</a></li>
            <li><a href="#/" onclick="mudaFoto('facilities-photo-3')">Cozy cafe</a></li>
            <li><a href="#/" onclick="mudaFoto('facilities-photo-4')">Child playground</a></li>
            <li><a href="#/" onclick="mudaFoto('facilities-photo-5')">Outdoor spaces</a></li>
          </ul>
        </div>
        <div class="coluna col1" id="photofac"> </div>
      </div>
</section>

<section class="reviews">
  <div class="linha">
      <h2 class="intro" style="margin-bottom: 12px;">Reviews</h2>
      </div>
      <div class="linha">
      <div class="coluna colfacil"><h2 class="spacesh2 mt0">What our customers<br>are saying</h2></div>
      </div>

      <div class="swiper3 testimo">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <p>Our team has been working at frispes for almost 2 months because our office still closed. During working at frispes, we feel a new experience, we can feel working with a beautiful, modern, and comfortable space. And cozy cafe with high-speed internet  in there. Thank you for frispes and team.</p>
            <div class="testautor"><div style="width:70px;"><img src="/wp-content/themes/desafio-wp/img/photo-review-1.png" alt="Photo 1" class="fotesti"></div><div><h4>Pedro Ibanez</h4><h5>UI Designer at Google</h5></div></div>
          </div>
          <div class="swiper-slide">
            <p>The high-speed internet at frispes was so amazing. I can get best experience when running video call with my clients. Frispes has spacious and safe parking area, that’s what i need because i used to work as freelancer for a long time.</p>
            <div class="testautor"><div style="width:70px;"><img src="/wp-content/themes/desafio-wp/img/photo-review-2.png" alt="Photo 2" class="fotesti"></div><div><h4>Raymond Thual</h4><h5>Professional Freelancer</h5></div></div>
          </div>
          <div class="swiper-slide">
            <p>Just three words : Frispes is Awesome!</p>
            <div class="testautor"><div style="width:70px;"><img src="/wp-content/themes/desafio-wp/img/photo-review-3.png" alt="Photo 3" class="fotesti"></div><div><h4>Yuli Berlian</h4><h5>IOS Dev at Tokopedia</h5></div></div>
          </div>

          <div class="swiper-slide">
            <p>Our team has been working at frispes for almost 2 months because our office still closed. During working at frispes, we feel a new experience, we can feel working with a beautiful, modern, and comfortable space. And cozy cafe with high-speed internet  in there. Thank you for frispes and team.</p>
            <div class="testautor"><div style="width:70px;"><img src="/wp-content/themes/desafio-wp/img/photo-review-1.png" alt="Photo 1" class="fotesti"></div><div><h4>Pedro Ibanez</h4><h5>UI Designer at Google</h5></div></div>
          </div>
          <div class="swiper-slide">
            <p>The high-speed internet at frispes was so amazing. I can get best experience when running video call with my clients. Frispes has spacious and safe parking area, that’s what i need because i used to work as freelancer for a long time.</p>
            <div class="testautor"><div style="width:70px;"><img src="/wp-content/themes/desafio-wp/img/photo-review-2.png" alt="Photo 2" class="fotesti"></div><div><h4>Raymond Thual</h4><h5>Professional Freelancer</h5></div></div>
          </div>
          <div class="swiper-slide">
            <p>Just three words : Frispes is Awesome!</p>
            <div class="testautor"><div style="width:70px;"><img src="/wp-content/themes/desafio-wp/img/photo-review-3.png" alt="Photo 3" class="fotesti"></div><div><h4>Yuli Berlian</h4><h5>IOS Dev at Tokopedia</h5></div></div>
          </div>

        </div>
        <div class="swiper-pagination3"></div>
      </div>

</section>

<section class="subscribe">

  <div class="linha">    
      <div class="coluna col50">
        <h2 class="subscribe">Became a member</h2>
        <h2 class="spacesh2 mt0 mb0" style="color: #fff;">Ready to try different<br>work experience now?</h2>
      <h3 class="texto4">Get the best working experience that you never feel before</h3>
    <a href="#/" class="botsignup">SIGN UP NOW</a>
    </div>
    <div class="coluna col50 bgsubscribe"></div>
      </div>

</section>

<footer class="rodape">
<div class="linha">
  <div class="col2"><h1>Frispes</h1><h2>We offer comfortable spaces, cozy cafe, high-speed internet, spacious parking area and many more for your best workspaces and meetings</h2>
  <a href="#/"><img src="/wp-content/themes/desafio-wp/img/insta-icon.png" alt="Instagram"></a>
  <a href="#/"><img src="/wp-content/themes/desafio-wp/img/yt-icon.png" alt="Youtube"></a>
  <a href="#/"><img src="/wp-content/themes/desafio-wp/img/fb-icon.png" alt="Facebook"></a>
  </div>
  <div class="col15"><h3>Spaces</h3>
    <ul><li><a href="#/">Co-working spaces</a></li>
    <li><a href="#/">Meeting rooms</a></li>
    <li><a href="#/">Event spaces</a></li>
    <li><a href="#/">Child playground</a></li>
    <li><a href="#/">Cafe & resto</a></li>
  </ul>
  </div>
  <div class="col15 col151"><h3>Company</h3>
    <ul><li><a href="#/">About us</a></li>
    <li><a href="#/">Pricing</a></li>
    <li><a href="#/">Careers</a></li>
    <li><a href="#/">Press</a></li>
  </ul>
  </div>
  <div class="col15 pl10"><h3>Support</h3>
    <ul><li><a href="#/">FAQs</a></li>
    <li><a href="#/">Privacy Policy</a></li>
    <li><a href="#/">Help</a></li>  
  </ul>
  </div>
  <div class="col15 col20"><h3>Contact Us</h3>
    <ul><li>E. &nbsp;<a href="#/">Hello@frispes.com</a></li>
    <li>A. &nbsp; <a href="#/">Jalan Jayakatwang  No.301
      Ngasem, Kediri</a></li>
    <li>P. &nbsp;  <a href="#/">(+62) 82334670000</a></li>  
  </ul>
  </div>
  
</div>
</footer>

    <script>
      var x, i, j, l, ll, selElmnt, a, b, c;
      /*look for any elements with the class "custom-select":*/
      x = document.getElementsByClassName("custom-select");
      l = x.length;
      for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
          /*for each option in the original select element,
          create a new DIV that will act as an option item:*/
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
              /*when an item is clicked, update the original select box,
              and the selected item:*/
              var y, i, k, s, h, sl, yl;
              s = this.parentNode.parentNode.getElementsByTagName("select")[0];
              sl = s.length;
              h = this.parentNode.previousSibling;
              for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                  s.selectedIndex = i;
                  h.innerHTML = this.innerHTML;
                  y = this.parentNode.getElementsByClassName("same-as-selected");
                  yl = y.length;
                  for (k = 0; k < yl; k++) {
                    y[k].removeAttribute("class");
                  }
                  this.setAttribute("class", "same-as-selected");
                  break;
                }
              }
              h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
          });
      }
      function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i)
          } else {
            y[i].classList.remove("select-arrow-active");
          }
        }
        for (i = 0; i < xl; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
          }
        }
      }
      /*if the user clicks anywhere outside the select box,
      then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);


// DATE CUSTOM
var currYear = (new Date()).getFullYear();

/*
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var options = [defaultDate => new Date(currYear-5,1,31), maxDate => new Date(currYear-5,12,31), yearRange => [1928, currYear-5], format => 'd mmm yyyy']
    var instances = M.Datepicker.init(elems, options);
  });
*/
$(document).ready(function() {
  $(".datepicker").datepicker({
    defaultDate: new Date(currYear-1, 1,31),
    // setDefaultDate: new Date(2000,01,31),
    yearRange: [1900, currYear],
    format: "d mmm yyyy"    
  });
});


      </script>
  
  <script src="/wp-content/themes/desafio-wp/js/slider.js"></script>

      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          loop: true,
          loopFillGroupWithBlank: false,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
           },
          breakpoints: {
            400: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
          },
        });
        var swiper = new Swiper(".clientes", {
          navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
          slidesPerView: 6,
          spaceBetween: 30,
          loop: true,
          loopFillGroupWithBlank: false,
          breakpoints: {
            400: {
              slidesPerView: 2,
              spaceBetween: 5,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 6,
              spaceBetween: 30,
            },
          },
        });

        var swiper = new Swiper(".testimo", {
          slidesPerView: 4,
          spaceBetween: 30,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination3",
            clickable: true,
           },
          breakpoints: {
            400: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 30,
            },
          },
        });
        


        function mudaFoto(a) {
          var b = '/wp-content/themes/desafio-wp/img/';
          var c = '.jpg';
          var targetDiv = document.querySelector('#photofac');
          targetDiv.style.backgroundImage = 'url(' + b + a + c + ')';
        document.getElementById('photofac').src=b+a+'.jpg';
    }


    var navUl = document.getElementById('ulfac');
navUl.addEventListener( 'click', checkLi );

function checkLi( event ) {
    // Only apply our actions if we really clicked on the link.
  if ( event.target.tagName === 'A' ) {
    navUl.querySelectorAll( 'a' ).forEach( el => el.classList.remove( 'ativo' ) );
    event.target.classList.add( 'ativo' );
  }
}
      </script>

<script src='/wp-content/themes/desafio-wp/js/navigation.js?ver=1.0.0' id='desafio-wp-navigation-js'></script>
<script src='/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
