<html lang="fr" class="default">
<script type="module" src="/component.js"></script>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Boutique prêt à porter femme en ligne | Joya le store</title>
  <link rel="stylesheet" href="style/style_.css">
</head>

<body id="category" class="lang-fr country-fr currency-eur layout-full-width page-category tax-display-enabled category-id-16 category-robes category-id-parent-11 category-depth-level-4 has-breadcrumb">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3ND5MP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>

  <main id="page">
    <header id="header">
      <?php require('./components/header.php'); ?>
    </header>

    <aside id="notifications">
      <div class="container"></div>
    </aside>

    <section id="wrapper">
      <nav data-depth="4" class="breadcrumb">
        <div class="container">
          <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="https://www.joyalestore.com/">
                <span itemprop="name">Accueil</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>

            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="https://www.joyalestore.com/10-tous-les-produits">
                <span itemprop="name">Tous les produits</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>

            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="https://www.joyalestore.com/11-pret-a-porter">
                <span itemprop="name">Prêt à porter</span>
              </a>
              <meta itemprop="position" content="3" />
            </li>

            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="https://www.joyalestore.com/16-robes">
                <span itemprop="name">Robes</span>
              </a>
              <meta itemprop="position" content="4" />
            </li>
          </ol>
        </div>

        <div class="category-cover hidden-sm-down">
          <img src="https://www.joyalestore.com/themes/leo_cool_stuff/assets/img/bg-breadcrumb.jpg" class="img-fluid" alt="Breadcrumb image" />
        </div>
      </nav>

      <div class="container">
        <?php require('./components/articleDetails.php');?>
      </div>
    </section>

		<footer id="footer" class="footer-container">
			<?php require ("./components/footer.php"); ?>
		</footer>
    <div id="back-top" style="display: none">
      <a href="#" class="fa fa-angle-up"></a>
    </div>
  </main>

  <div data-type="dropdown" style="position: fixed; top: 10px; right: 10px" class="leo-fly-cart solo type-fixed enable-dropdown offset-right">
    <div class="leo-fly-cart-icon-wrapper">
      <a href="javascript:void(0)" class="leo-fly-cart-icon" data-type="dropdown"><i class="material-icons"></i></a>
      <span class="leo-fly-cart-total">0</span>
    </div>
    <div class="leo-fly-cart-cssload-loader" style="display: none"></div>
  </div>

  <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none"></ul>
  <div id="my-app"></div>
  <div class="modal leo-modal leo-modal-cart fade" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title h6 text-xs-center leo-warning leo-alert">
            <i class="material-icons">info_outline</i>
            Vous devez saisir une quantité
          </h4>

          <h4 class="modal-title h6 text-xs-center leo-info leo-alert">
            <i class="material-icons">info_outline</i>
            La quantité minimum de commande d'achat du produit est
            <strong class="alert-min-qty"></strong>
          </h4>

          <h4 class="modal-title h6 text-xs-center leo-block leo-alert">
            <i class="material-icons">block</i>
            Il n'y a pas assez de produits en stock
          </h4>
        </div>

      </div>
    </div>

  </div>
  <div class="leo-notification" style="width: 270px; top: 10px; right: 10px"></div>
  <div class="leo-temp leo-temp-success">
    <div class="notification-wrapper">
      <div class="notification notification-success">
        <strong class="noti product-name"></strong>
        <span class="noti noti-update">Le produit a été mis à jour dans votre panier</span>
        <span class="noti noti-delete">Le produit a été retiré de votre panier</span>
        <span class="noti noti-add"><strong class="noti-special"></strong> Produit a été ajouté à votre
          panier</span>
        <span class="notification-close">X</span>
      </div>
    </div>
  </div>
  <div class="leo-temp leo-temp-error">
    <div class="notification-wrapper">
      <div class="notification notification-error">
        <span class="noti noti-update">la mise à jour d'erreur</span>
        <span class="noti noti-delete">Suppression d'erreur</span>
        <span class="noti noti-add">Erreur d'ajout. S'il vous plaît aller à la page des détails du
          produit et essayez à nouveau</span>

        <span class="notification-close">X</span>
      </div>
    </div>
  </div>
  <div class="leo-temp leo-temp-warning">
    <div class="notification-wrapper">
      <div class="notification notification-warning">
        <span class="noti noti-min">La quantité minimum de commande d'achat du produit est
          <strong class="noti-special"></strong></span>
        <span class="noti noti-max">Il n'y a pas assez de produits en stock</span>

        <span class="notification-close">X</span>
      </div>
    </div>
  </div>
  <div class="leo-temp leo-temp-normal">
    <div class="notification-wrapper">
      <div class="notification notification-normal">
        <span class="noti noti-check">Vous devez saisir une quantité</span>

        <span class="notification-close">X</span>
      </div>
    </div>
  </div>
  <?php require('./components/modals.php');?>
</body>

</html>