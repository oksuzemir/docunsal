<footer>
  <div class="footer-mid-line"></div>
  <div class="footer-mid">
    <div class="footer-mid-overlay"></div>
    <div class="footer-mid-inner">
      <div class="konten">
        <div class="footer-mid-content">
          <div class="footer-mid-social">
            <div class="footer-logo">
              <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
              </a>
            </div>

            <div class="footer-mid-list">
              <ul>
                <li>
                  <a href="https://www.google.com/maps/place/Do%C3%A7.+Dr.+%C3%9Cnsal+%C3%96zkuvanc%C4%B1,+%C3%9Croloji,+%C3%87ocuk+%C3%BCrolojisi/@41.054768,28.995737,16z/data=!4m5!3m4!1s0x0:0x7e527f238f4315ae!8m2!3d41.0547677!4d28.9957373?hl=tr" target="_blank" rel="noreferrer"> <i class="fa fa-map-marker"></i> <?php pll_e('Teşvikiye Mahallesi Valikonağı Caddesi, Fulya Sk. No: 2A, 34000 Şişli/İstanbul'); ?></a>
                </li>
                <li>
                  <a href="tel:<?php pll_e('056132724'); ?>"> <i class="fa fa-phone"></i><?php pll_e('056132724'); ?></a>
                </li>
                <li>
                  <a href="mailto:ozkuvanciunsal@gmail.com"> <i class="fa  fa-envelope"></i> ozkuvanciunsal@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-mid-departments">
            <div class="footer-mid-title"><?php pll_e('Site Haritası'); ?></div>
            <?php html5blank_nav(); ?>
            <ul>
              <li><a href="<?php pll_e('/kvkk-ve-aydinlatma-metni'); ?>"><?php pll_e('KVKK ve Aydınlatma Metni'); ?></a></li>
            </ul>
          </div>
          <div class="footer-mid-avail">
            <div class="footer-mid-title"><?php pll_e('Google Harita'); ?></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.6506743129307!2d28.9935486154155!3d41.05476767929599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab75d11c5e4bf%3A0x7e527f238f4315ae!2zRG_Dpy4gRHIuIMOcbnNhbCDDlnprdXZhbmPEsSwgw5xyb2xvamksIMOHb2N1ayDDvHJvbG9qaXNp!5e0!3m2!1str!2str!4v1653533211952!5m2!1str!2str" width="370" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="konten">
      <div class="footer-bottom-inner">
        <div class="footer-copy">
          © 2022, <a href="/">Doç. Dr. Ünsal Özkuvancı</a> <?php pll_e('Tüm Hakları Saklıdır.'); ?>


        </div>
        <div class="footer-bottom-social">
          <ul>
            <li><a target="_blank" rel="noreferrer" href="https://tr-tr.facebook.com/unsalozkuvanci"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" rel="noreferrer" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a target="_blank" rel="noreferrer" href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="sidenav-overlay"></div>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/multislider.min.js"></script>
<script>
  $('#exampleSlider').multislider({
    interval: 10000,
    slideAll: true,
    duration: 1200
  });
  $('#exampleSlider2').multislider({
    interval: 10000,
    slideAll: true,
    duration: 1200
  });
  $('#exampleSlider3').multislider({
    interval: 10000,
    slideAll: true,
    duration: 1200
  });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script>
  if ($(window).width() < 1150) {
    $(".top-nav-right-top").prependTo(".top-nav");
  }

  if ($(window).width() < 1150) {
    $(".mobile-nav").appendTo(".side-nav .sidenav-content");
  }
</script>
<!-- Lazy img -->
<script defer>
  const imgObserver = new IntersectionObserver((entries, self) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        lazyLoad(entry.target);
        self.unobserve(entry.target);
      }
    });
  });
  document.querySelectorAll('.lazy-picture').forEach((picture) => {
    imgObserver.observe(picture);
  });
  const lazyLoad = (picture) => {
    const img = picture.querySelector('img');
    const sources = picture.querySelectorAll('source');

    sources.forEach((source) => {
      source.srcset = source.dataset.srcset;
      source.removeAttribute('data-srcset');
    });
    img.src = img.dataset.src;
    img.removeAttribute('data-src');
  }
</script>

<script defer>
  document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      });

      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {
      var lazyloadThrottleTimeout;
      lazyloadImages = document.querySelectorAll(".lazy");

      function lazyload() {
        if (lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
            if (img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
          });
          if (lazyloadImages.length == 0) {
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
        }, 20);
      }

      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    }
  })
</script>
<?php wp_footer(); ?>
</body>

</html>