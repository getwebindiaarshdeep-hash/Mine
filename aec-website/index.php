<?php
$metaTitle = 'AEC – Precision Engineering Solutions | Panchkula';
$metaDescription = 'Precision engineering solutions by AEC: CNC machining services, tool room machining, industrial gauges, molds and dies in Panchkula.';
include 'partials/header.php';
include 'data/products.php';
?>
<header class="hero-section d-flex align-items-center">
  <div class="container text-white" data-aos="fade-up">
    <h1>Precision Engineering Solutions</h1>
    <p class="lead">High accuracy machining, tooling, gauges and industrial components.</p>
    <a href="products.php" class="btn btn-accent me-2">View Products</a>
    <a href="contact.php" class="btn btn-outline-light">Request Quote</a>
  </div>
</header>

<section class="py-5 bg-light-gray">
  <div class="container" data-aos="fade-up">
    <h2>About AEC</h2>
    <p>Aral Engineering Co. is a precision engineering and machining company delivering high-accuracy components, gauges, molds, dies, and industrial fabrication solutions for manufacturing excellence.</p>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4" data-aos="fade-up">Why Choose Us</h2>
    <div class="row g-4">
      <?php $why=[['fa-ruler-combined','Precision Engineering'],['fa-gears','Custom Manufacturing'],['fa-industry','Advanced Tool Room'],['fa-certificate','Quality Manufacturing'],['fa-truck-fast','Timely Delivery']];
      foreach($why as $i=>$item): ?>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?php echo $i*80; ?>">
        <div class="feature-box">
          <i class="fa-solid <?php echo $item[0]; ?>"></i>
          <h3><?php echo $item[1]; ?></h3>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-5 bg-light-gray">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-0">Featured Products</h2>
      <a href="products.php" class="btn btn-sm btn-metal">All Products</a>
    </div>
    <div class="row g-4">
      <?php foreach(array_slice($products,0,6) as $p): ?>
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="product-card">
          <img src="images/products/<?php echo $p['image']; ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
          <div class="p-3">
            <h3><?php echo htmlspecialchars($p['name']); ?></h3>
            <p><?php echo htmlspecialchars($p['description']); ?></p>
            <a href="product-details.php?id=<?php echo $p['id']; ?>" class="btn btn-sm btn-outline-primary">View Details</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container" data-aos="fade-up">
    <h2 class="mb-4 text-center">Industries Served</h2>
    <div class="row text-center g-3">
      <div class="col-md"><div class="industry-pill">Automotive Industry</div></div>
      <div class="col-md"><div class="industry-pill">Industrial Machinery</div></div>
      <div class="col-md"><div class="industry-pill">Manufacturing</div></div>
      <div class="col-md"><div class="industry-pill">Tool &amp; Die Industry</div></div>
      <div class="col-md"><div class="industry-pill">Engineering Companies</div></div>
    </div>
  </div>
</section>

<section class="cta-section py-5 text-center text-white">
  <div class="container" data-aos="zoom-in">
    <h2>Get a Quote for Custom Manufacturing</h2>
    <a href="contact.php" class="btn btn-accent mt-3">Contact Us</a>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
