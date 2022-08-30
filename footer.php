<footer class="footer-area section_gap" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 single-footer-widget">
                <h4>À propos de</h4>
                <ul>
                    <li><a href="#">AGAES</a></li>
                    <li><a href="#">Pourquoi AGAES ?</a></li>
                    <li><a href="#">Vos avantages</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 single-footer-widget">
                <h4>Lien rapide</h4>
                <ul>
                    <li><a href="#">Emploi</a></li>
                    <li><a href="#">Relations</a></li>
                    <li><a href="#">conditions d'utilisation</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 single-footer-widget">
                <h4>Solution</h4>
                <ul>
                    <li><a href="#">Logiciel pour college</a></li>
                    <li><a href="#">Logiciel pour universite</a></li>
                    <li><a href="#">Integration</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 single-footer-widget">
                <h4>Ressources</h4>
                <ul>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Experts</a></li>
                    <li><a href="#">Agences</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 single-footer-widget">
                <h4>Bulletin</h4>
                <p class="text-white">Vous pouvez nous faire confiance. nous n'envoyons que des offres promotionnelles,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form action="#" method="get" class="form-inline">
                        <input class="form-control bg-white" name="EMAIL" placeholder="Your Email Address" required="" type="email">
                        <button class="click-btn btn btn-default">
                            <span>S'Abonner</span>
                        </button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="nom" tabindex="-1" value="" type="text">
                        </div>
                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2022 Tous droits réservés | Ce modèle est fait par
                 <!--<i class="fab fa-heart" aria-hidden="true"></i>--><a class="text-blue" href="#">GROUPE BBP.</a><br><a class="text-blue" href="#">az</a></p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
</main>
  <!-- Rights -->

  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP  --> 
</div>
<!-- End Page Wrapper -->
<div  class="talents__item" id="talents__item">
    <div class="items bg-dark ">
        <span onclick="toggle()" class="boutonv affichage">&times;</span>
    </div>
    <div class="container-fluid">
        <video class="w-100 h-100" src="video/test2.mp4" type="video/mp4" controls preload="metadata" autoplay></video>
    </div>
</div>
<!-- JavaScripts --> 
<script src="js/vendors/jquery/jquery.min.js"></script> 
<script src="js/vendors/wow.min.js"></script> 
<script src="js/vendors/bootstrap.min.js"></script> 
<script src="js/vendors/own-menu.js"></script> 
<script src="js/vendors/jquery.sticky.js"></script> 
<script src="js/vendors/owl.carousel.min.js"></script> 
<script src="js/vendors/jquery.magnific-popup.min.js"></script>
  <script src="js/adminlte.min.js"></script>
  <script src="js/bootstrap mini.js"></script>
  <script src="js/bootstrap.min.502.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
<script src="js/main.js"></script>
  <script src="js/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true,
        },
        loop :true,
    });
</script>-->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        effect: "coverflow",
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 0,
            slideShadows: true,
        },
        loop:true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    function toggle(){
        var blur = document.getElementById('blur');
        blur.classList.toggle('active');
        var talents__item = document.getElementById('talents__item');
        talents__item.classList.toggle('active');

    }
</script>
<script>
    const nav = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if(window.scrollY > 100) {
            nav.classList.add('scroll');
        }
        else{
            nav.classList.remove('scroll');
        }
    });
</script>
</body>
</html>