<?php require 'inc/head.php';
$panier = $_COOKIE["panier"];

$total = 0;
$total += $panier["cookie1"];
$total += $panier["cookie2"];
$total += $panier["cookie3"];
$total += $panier["cookie4"];
?>

<section class="cookies container-fluid">
    <div class="row">
        <h3>Contenu de votre panier</h3>
        <?php echo " Vous avez " . $panier["cookie1"] . " cookie(s) aux noix de pécan <br/>";?>
        <?php echo " Vous avez " . $panier["cookie2"] . " cookie(s) aux pépites de chocolat <br/>";?>
        <?php echo " Vous avez " . $panier["cookie3"] . " cookie(s) tout chocolatés <br/>";?>
        <?php echo " Vous avez " . $panier["cookie4"] . " cookie(s) aux M&M's <br/><br/>";?>
        <a href="index.php"><button type="button" class="btn btn-warning">Modifier mon panier</button><br/></a>
        <a href="init.php"><button type="button" class="btn btn-danger">Vider mon panier</button></a>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
