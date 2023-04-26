<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  global $loggedInUser;
?>

  <div class="container">
<h1>Il Cruscotto di <?php echo $loggedInUser->first_name; ?></h1>

<div class="card mb-3 mt-3">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <h4>
      <a href="<?php echo ROOT_URL; ?>shop?page=cart" class="underline">Continua gli acquisti &raquo;
          <span class="badge badge-primary badge-pill">
            <span class="js-totCartItems"></span> prodotti nel carrello
          </span>   
      </a>
      </h4>
    </li>
    <li class="list-group-item"><h4><a href="<?php echo ROOT_URL; ?>shop?page=my-orders" class="underline">Visualizza lo storico dei i miei ordini &raquo;</a></h4></li>
    <li class="list-group-item"><h4><a href="<?php echo ROOT_URL; ?>user?page=profile" class="underline">Modifica i miei dati &raquo;</a></h4></li>
  </ul>
</div>
</div>

<div id="myAccountDropdown" class="_3iG3MJz"><button type="button" icon="_3iH_8F6 ToKj3Yy _3e2i979" icontype="accountUnfilled" data-testid="myAccountIcon" class="_6iPIuvw q-RpDXn _2SSHFPv" aria-expanded="false" aria-controls="myaccount-dropdown" aria-label="Il mio account"><span type="accountUnfilled" class="_3iH_8F6 ToKj3Yy _3e2i979 -rhP1cz gBrrjX4 _2nHArcS"></span></button><div class="Gmnwu_e" data-testid="myaccount-dropdown" id="myaccount-dropdown"><div class="_33s2s-y"><div class="Z8dxicz"><div class="_10AVfLf"><div class="_3dfrZFm"><div class="_3hSCfS2"><span class="k3_c4ux"><a class="_1336dMe _1uUU2Co _1336dMe _1uUU2Co _1iiIFDL" href="https://my.asos.com/my-account?lang=it-IT&amp;store=IT&amp;country=IT&amp;keyStoreDataversion=ornjx7v-36" data-testid="signin-link">Accedi</a><div class="_3xmyjOP" aria-hidden="true"></div><a class="_1336dMe _1uUU2Co _1336dMe _1uUU2Co _1iiIFDL" href="https://my.asos.com/identity/register?lang=it-IT&amp;store=IT&amp;country=IT&amp;keyStoreDataversion=ornjx7v-36&amp;returnUrl=https%3A%2F%2Fwww.asos.com%2Fit%2F" data-testid="signup-link">Registrati</a></span></div><button icon="_1xgEXu7 _2Dd1zdj qBDvXfo" class="_6iPIuvw q-RpDXn" data-testid="myaccount-close-btn" aria-label="Chiudi" type="button"><span class="_1xgEXu7 _2Dd1zdj qBDvXfo -rhP1cz gBrrjX4 _2nHArcS"></span></button></div><div class="_12ChTgQ"><ul class="_1LxmvWx"><li><a href="https://my.asos.com/my-account?country=IT&amp;keyStoreDataversion=ornjx7v-36&amp;lang=it-IT&amp;nlid=nav%20header&amp;store=IT" class="yPAUReS IAtMKef _2LRr-ij" data-testid="myaccount-link"><span class="CjZA9Ep _2RQ1Y7O _21TZCIw mEAMKy7"></span>Il mio account</a></li><li><a href="https://my.asos.com/my-account/orders?country=IT&amp;keyStoreDataversion=ornjx7v-36&amp;lang=it-IT&amp;nlid=nav%20header&amp;store=IT" class="yPAUReS IAtMKef _2LRr-ij" data-testid="myorders-link"><span class="_37wOqxg _2RQ1Y7O _21TZCIw mEAMKy7"></span>I miei ordini</a></li><li><a href="https://my.asos.com/my-account/returns?country=IT&amp;keyStoreDataversion=ornjx7v-36&amp;lang=it-IT&amp;nlid=nav%20header&amp;store=IT" class="yPAUReS IAtMKef _2LRr-ij" data-testid="myreturns-link"><span class="_3tx3o-N _2RQ1Y7O _21TZCIw mEAMKy7"></span>I miei resi</a></li><li><a href="https://www.asos.com/it/assistenza-clienti/resi-rimborsi/?nlid=nav%20header" class="yPAUReS IAtMKef _2LRr-ij" data-testid="returnsinformation-link"><span class="_2W-DtGN _2RQ1Y7O _21TZCIw mEAMKy7"></span>Informazioni sui resi</a></li><li><a href="https://my.asos.com/my-account/contact-preferences?country=IT&amp;keyStoreDataversion=ornjx7v-36&amp;lang=it-IT&amp;nlid=nav%20header&amp;store=IT" class="yPAUReS IAtMKef _2LRr-ij" data-testid="contactpreferences-link"><span class="_2jqSWSL _2RQ1Y7O _21TZCIw mEAMKy7"></span>Preferenze di contatto</a></li></ul></div></div></div></div></div></div>
