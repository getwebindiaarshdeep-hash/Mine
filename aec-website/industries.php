<?php
$metaTitle = 'Industries Served – AEC';
$metaDescription = 'AEC serves automotive, industrial machinery, manufacturing, tooling and engineering companies with precision components.';
include 'partials/header.php';
?>
<section class="page-banner"><div class="container"><h1>Industries Served</h1></div></section>
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <?php $industries=['Automotive Industry','Industrial Machinery','Manufacturing','Tool & Die Industry','Engineering Companies'];
      foreach($industries as $i=>$industry): ?>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?php echo $i*70; ?>">
        <div class="feature-box"><i class="fa-solid fa-industry"></i><h3><?php echo $industry; ?></h3><p>Reliable precision components and tooling support for demanding production environments.</p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
