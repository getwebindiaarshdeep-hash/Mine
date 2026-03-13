<?php
include 'data/products.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$product = null;
foreach($products as $item){ if($item['id'] === $id){ $product = $item; break; } }
if(!$product){ $product = $products[0]; }
$metaTitle = $product['name'].' | AEC Products';
$metaDescription = $product['description'];
include 'partials/header.php';
?>
<section class="page-banner"><div class="container"><h1><?php echo htmlspecialchars($product['name']); ?></h1></div></section>
<section class="py-5">
  <div class="container" data-aos="fade-up">
    <div class="row g-4 align-items-center">
      <div class="col-md-6"><img class="img-fluid rounded shadow" src="images/products/<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>"></div>
      <div class="col-md-6">
        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
        <p><?php echo htmlspecialchars($product['details']); ?></p>
        <a href="contact.php" class="btn btn-accent">Request Quote</a>
        <a href="products.php" class="btn btn-outline-secondary ms-2">Back to Products</a>
      </div>
    </div>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
