<?php
$metaTitle = 'Products – AEC Precision Engineering Components';
$metaDescription = 'Explore industrial gauges, CNC tool holders, die sets, pulleys, gears, molds, and custom precision components by AEC.';
include 'data/products.php';
include 'partials/header.php';
?>
<section class="page-banner"><div class="container"><h1>Products</h1></div></section>
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <?php foreach($products as $idx=>$p): ?>
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo ($idx%3)*60; ?>">
        <div class="product-card h-100">
          <img src="images/products/<?php echo $p['image']; ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
          <div class="p-3 d-flex flex-column">
            <h3><?php echo htmlspecialchars($p['name']); ?></h3>
            <p><?php echo htmlspecialchars($p['description']); ?></p>
            <a href="product-details.php?id=<?php echo $p['id']; ?>" class="btn btn-sm btn-outline-primary mt-auto">View Details</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
