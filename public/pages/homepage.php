<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  if (isset($_POST['add_to_cart'])) {

    $productId = trim($_POST['id']);

    $cm = new CartManager();
    $cartId = $cm->getCurrentCartId();
    //var_dump($cartId); die;
    $cm->addToCart($productId, $cartId);

    $alertMsg = 'add_to_cart';
    echo "<script>location.href='".ROOT_URL."shop?page=products-list&msg=$alertMsg';</script>";
    exit;
  }
  
  $pm = new ProductManager();
  $products = $pm->getAll();
?>




<!-- home section starts  -->
<section class="home" id="home">
<div class="home-container">
        <span> Rinfresca il tuo mondo con noi.</span>
        <p>L'azienda offre una vasta scelta di opzioni per ogni occasione, dalle bevande analcoliche per i non bevitori alle birre artigianali per gli amanti della birra, dai vini pregiati per gli intenditori fino ai superalcolici per i momenti di festa.</p>
        <a href="<?php echo ROOT_URL; ?>auth?page=login" class="btn">Ordina ora</a>
    </div>
<!--<section class="popular-product">
    <h3 class="sub-heading"> Migliori prodotti </h3>
    <h1 class="heading"> Più ordinati </h1>
    <div class="box-container">

<?php if (count($products) > 0) : ?>

    <?php foreach($products as $product) : ?>
    <div class="box" >
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-eye"></a>
      <img src="../images/Dolomia_pet_0,5x24_gas.png" alt="">
      <h3><?php echo esc_html($product->name); ?></h3>
      <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
      </div>
      <span><?php echo esc_html($product->price); ?> €</span>
      <a href="#" class="btn">add to cart</a>
      
    </div>
    <?php endforeach; ?>

<?php else : ?>

<?php endif; ?>




</div>

</section> -->
</section>

<section class="about-us" id="about-us">
  <div class="about-us-container">
    <h3 class="sub-heading">Chi siamo</h3>
    <h1 class="heading"> Perchè scegliere noi </h1>

    <div class="row">

        <div class="content">
            <p>La nostra azienda si occupa di vendita di bevande. 
            <br> Operiamo nella città di Trieste e provincia, il nostro servizio è destinato a bar, ristoranti, pub, manifestazioni ma anche a privati.
            <br>Con una consegna rapida, garantiamo ai nostri clienti e alle loro tavole prodotti di qualità, scelti con attenzione, verificando nel tempo la filiera produttore consumatore finale.
            <br>Invitiamo sempre i nostri clienti ad essere attenti a quanto consumano in casa e fuori casa.
            <br>Siamo lontani dalla logica commerciale di chi ammalia il consumatore con prodotti dal ‘packaging’ accattivante, ma che spesso sono lontani dall’essere di qualità, originali e genuini.
            <br>Non è tanto importante l’immagine del prodotto pubblicizzato ma la sostanza e in particolare ciò che il singolo ingrediente qualitativamente conferisce al prodotto, che si tratti di birra, vino o qualsiasi altra bibita.
            </p>
            
            <div class="icons-container">
                <div class="icons">
                    <i class="fa fa-beer"></i>
                    <span>Ampia scelta</span>
                </div>
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Servizio puntuale</span>
                </div>
                <div class="icons">
                    <i class="fa fa-cog"></i>
                    <span>Manutenzione e assistenza</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>Consulenza a 360°</span>
                </div>
            </div>
            
        </div>

    </div>
  </div>
</section>



<section class="our-brands" id="our-brands">

    <h3 class="sub-heading"> Un po' dei nostri marchi </h3>
    <h1 class="heading"> Marchi </h1>

    <div class="media-scroller snaps-inline">
            <div class="media-element">
                <a href="https://www.paulaner.com/"> <img src="../images/brands/paulaner_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.villacher.com/it/"> <img src="../images/brands/villacher_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.villacher.com/it/"> <img src="../images/brands/schleppe_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.forst.it/it"> <img src="../images/brands/forst_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.hacker-pschorr.com/"> <img src="../images/brands/hacker-pschorr_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.flens.de/en/"> <img src="../images/brands/flensburger_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.brda.si/ita/"> <img src="../images/brands/goriska-brda_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.gruppoitalianovini.it/index.cfm/it/brand/formentini/cantina/"> <img src="../images/brands/formentini_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.fattoriaconcadoro.com/"> <img src="../images/brands/conca_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.bertiolo.com/"> <img src="../images/brands/bertiolo_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.acquadolomia.it/"> <img src="../images/brands/dolomia_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="http://www.kaiserwasser.com/it/"> <img src="../images/brands/kaiserwasser_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.galvanina.com/"> <img src="../images/brands/galvanina_logo.png" alt=""></a>
            </div>
            <div class="media-element">
                <a href="https://www.zuegg.it/"> <img src="../images/brands/zuegg_logo.png" alt=""></a>
            </div>
    </div>
</section>


<section class="contact-us" id="contact-us">

    <h3 class="sub-heading"> Hai domande? </h3>
    <h1 class="heading"> Contattaci! </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="Nome" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Cellulare" class="box">
            <textarea name="" class="box" placeholder="Messaggio" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Invia messaggio" class="btn">
        </form>

        <div class="image">
            <img src="../images/Contact-us.png" alt="">
        </div>

</section>

<!-- home section ends -->

<!--<h1>Benvenuti</h1>
<p class="lead">Benvenuti nel sito! </p>
<p class="lead">Clicca sul bottone per iniziare gli acquisti.</p>
<a href="<?php echo ROOT_URL . 'shop?page=products-list'; ?>" class="btn btn-primary btn-lg mb-5 mt-3">Vai allo Shopping &raquo;</a>-->