<?php include 'header.php';?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){ ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 250px;"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $product['name']; ?></h3>
                        <h3>TK. <?php echo $product['price']; ?></h3>
                    <hr/>
                        <a href="action.php?pages=detail&&id=<?php echo $product['id'];?>" class="btn btn-outline-success">Details</a>
                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
