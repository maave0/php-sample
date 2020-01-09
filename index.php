<?php require_once('./header.php'); ?>
<?php require_once('./product_data.php'); ?>

<!-- 
    PHP sample code by Robert Hanson
    MIT licensed Bootstrap template from https://github.com/BlackrockDigital/startbootstrap-shop-homepage
    drop this into /www/ of an Ampps server to see it run 
-->

<div class="container">

<div class="row">

    <div class="col-lg-3">
        <h1 class="my-4">Coffee Shoppe</h1>
        <div class="list-group">
        <a href="#" class="list-group-item">Featured Products</a>
        <a href="#" class="list-group-item strike">All Products</a>
        </div>
    </div>
    
    <div class="col-lg-9">
        <div class="row">
        <?php foreach($products as $product): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $product['name'] ?></a>
                        </h4>
                        <h5>
                            $<?php echo number_format($product['price'],2) ?>
                            <?php if($product['sale']): ?>
                                <span class="text-danger">Sale!</span>
                            <?php endif ?>
                        </h5>
                        <p class="card-text"><?php echo $product['desc'] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                        <?php
                        //rating stars
                        for($i=1; $i<=$product['rating']%5; $i++) {
                            echo '&#9733'; //filled in star
                        }
                        for($i=5; $i>$product['rating']%5; $i--) {
                            echo '&#9734'; //empty star
                        }
                        echo ' ('.$product['rating'].')';
                        ?>
                        </small>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
</div>



<?php require_once('./footer.php'); ?>