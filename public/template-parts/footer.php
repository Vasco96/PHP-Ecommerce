<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  $cartMgr = new CartManager();
  $cartId = $cartMgr->getCurrentCartId();
  $totCartItems = $cartMgr->getCartTotal($cartId)[0]['num_products'];
  $totCartItems = !$totCartItems ? 0 : $totCartItems;
?>
  <!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>Indirizzo</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.0855545523577!2d13.824535397467912!3d45.60892466517419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477b6a0906412435%3A0xe9556b015e0deced!2sEmmemme%20Srl!5e0!3m2!1sit!2sit!4v1671144655702!5m2!1sit!2sit" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="box">
        <h3>Links</h3>
        <a href="#home">Home</a>
        <a href="#about-us">Chi siamo</a>
        <a href="#our-brands">Marchi</a>
        <a href="#contact-us">Contatti</a>
    </div>

    <div class="box">
        <h3>Contattaci</h3>
        <p>Telefono:<a href="tel: 0402820060"> 0402820060</a>
        <p>Fax:<a href="tel: 0402823511"> 0402823511</a>
        <p>Email:<a href="mailto: info@emmemmedistribuzione.com">info@emmemmedistribuzione.com</a>
    </div>

    <div class="box">
        <h3>Seguici</h3>
        <a href="https://it-it.facebook.com/people/Emmemme-srl/100054488737673/">Facebook</a>
    </div>

</div>

<div class="credit"> copyright @ 2021 by <span>mr. web designer</span> </div>

</section>

<!-- footer section ends -->
<script src="https://kit.fontawesome.com/bbf00fa09d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/public.js"></script>
</body>

</html>
