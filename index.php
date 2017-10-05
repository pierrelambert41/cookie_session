<?php
require 'inc/head.php';


// redirection login si pas de session
if (empty($_SESSION['loginname'])){
    header ("location: login.php");
    exit();
}

$panier = $_COOKIE["panier"];

if (!empty($_GET)) {

    switch ($_GET["ajout"]) {

        case "cookie1":
            $panier["cookie1"]++;
            setCookie("panier[cookie1]", $panier["cookie1"]);
            break;
        case "cookie2":
            $panier["cookie2"]++;
            setCookie("panier[cookie2]", $panier["cookie2"]);
            break;
        case "cookie3":
            $panier["cookie3"]++;
            setCookie("panier[cookie3]", $panier["cookie3"]);
            break;
        case "cookie4":
            $panier["cookie4"]++;
            setCookie("panier[cookie4]", $panier["cookie4"]);
            break;

    }
}

?>

    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpeg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                        <a href="index.php?ajout=cookie1" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                        <?php echo $panier["cookie1"]?>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpeg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="index.php?ajout=cookie2" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                        <?php echo $panier["cookie2"]?>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpeg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="index.php?ajout=cookie3" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                        <?php echo $panier["cookie3"]?>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Penny !</p>
                        <a href="index.php?ajout=cookie4" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                        <?php echo $panier["cookie4"] ?>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>