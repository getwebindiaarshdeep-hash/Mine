<?php
$metaTitle = 'Services – CNC Machining and Tool Room Solutions';
$metaDescription = 'AEC provides tool room machining, CNC turning and milling, gauges, mold and die manufacturing, fabrication, and repair services.';
include 'partials/header.php';
?>
<section class="page-banner"><div class="container"><h1>Services</h1></div></section>
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <?php $services=[
        'Tool Room Machining','CNC Turning and Milling','Industrial Gauges Manufacturing','Precision Tooling','Mold and Die Manufacturing','Industrial Fabrication','Custom Machining Solutions','Die Machine Repairing'];
      foreach($services as $i=>$service): ?>
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $i*50; ?>">
        <div class="service-card"><h3><?php echo $service; ?></h3><p>Professional execution with strict quality checks, process control, and delivery commitment.</p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
