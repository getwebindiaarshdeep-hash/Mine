<?php
$metaTitle = 'Gallery – AEC Tool Room and Machining';
$metaDescription = 'Photo gallery of AEC precision engineering, machining setups, tooling and finished components.';
include 'partials/header.php';
$galleryImages = ['gallery-1.svg','gallery-2.svg','gallery-3.svg','gallery-4.svg','gallery-5.svg','gallery-6.svg'];
?>
<section class="page-banner"><div class="container"><h1>Gallery</h1></div></section>
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <?php foreach($galleryImages as $i=>$img): ?>
      <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $i*50; ?>">
        <div class="gallery-item"><img src="images/gallery/<?php echo $img; ?>" alt="AEC gallery image <?php echo $i+1; ?>"></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
