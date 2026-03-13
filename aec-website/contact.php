<?php
$metaTitle = 'Contact AEC – Request a Quote';
$metaDescription = 'Contact AEC Aral Engineering Co. for CNC machining, gauges, die manufacturing, and precision engineering requirements.';
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name && $phone && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        $line = date('c')." | $name | $phone | $email | ".str_replace(["\n","\r"],' ',$message).PHP_EOL;
        file_put_contents(__DIR__.'/data/contact_submissions.log', $line, FILE_APPEND);
        $success = true;
    }
}
include 'partials/header.php';
?>
<section class="page-banner"><div class="container"><h1>Contact Us</h1></div></section>
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-5" data-aos="fade-right">
        <h2>Get in Touch</h2>
        <p><strong>Address:</strong><br>Plot No. 177, HSIIDC Industrial Estate, Alipur, Barwala, Panchkula, Haryana, India</p>
        <p><strong>Phone:</strong><br>+91 76960 33307<br>+91 98725 87399</p>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <?php if($success): ?><div class="alert alert-success">Thank you! Your inquiry has been submitted.</div><?php endif; ?>
        <form method="post" class="contact-form">
          <div class="row g-3">
            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
            <div class="col-md-6"><input type="text" name="phone" class="form-control" placeholder="Phone" required></div>
            <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
            <div class="col-12"><textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea></div>
            <div class="col-12"><button class="btn btn-accent" type="submit">Submit Inquiry</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include 'partials/footer.php'; ?>
