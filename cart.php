<?php
require 'inc/head.php';


if (!isset($_SESSION['panier'])) {

    $_SESSION['panier'] = array();
}
$productId = $_GET['add_to_cart'];
$_SESSION['panier'][] = $catalog[$productId]['name'];
$_SESSION['panier']['qte'] = count($catalog[$productId]);
$total = $_SESSION['panier']['qte'] = count($catalog[$productId]);
// $_SESSION['panier'] = []; pour vider le panier et voir les erreurs

?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['panier'] as $productName) : ?>
            <li><?= $productName ?></li>
        <?php endforeach ?>
    </div>
</section>
<?php require 'inc/foot.php' ?>