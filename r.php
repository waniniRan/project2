

<?php
// Sample data for a flower product
/*the product and review page*/
$product = [
    'name' => 'Rose Bouquet',
    'price' => '3000',
    'description' => 'A beautiful bouquet of fresh roses.',
    'img'=>'\Images\download.webp'
];
include_once("Templates/heading.php");
?>


<body>
    
        <main>
            <div class="product">
                <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
                <h2><?php echo $product['name']; ?></h2>
                <p class="price">KSH<?php echo number_format($product ['price'], 2); ?></p>
                <p class="description"><?php echo $product['description']; ?></p>
                <button>Add to Cart</button>
            </div>
        </main>
        <footer>
            <?php include_once ("Templates/footer.php");?>
        </footer>
    </div>
</body>
</html>

