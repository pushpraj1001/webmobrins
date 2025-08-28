<?php
$message_sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email = trim(htmlspecialchars($_POST['email'] ?? ''));
    $service = trim(htmlspecialchars($_POST['service'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    // Simple server-side validation
    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        // Send email (configure $to)
        $to = "hello@webmobrins.com"; // replace with real address
        $subject = "Contact form: $service";
        $body = "Name: $name\nEmail: $email\nService: $service\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";
        // Use mail() if your host supports it
        @mail($to, $subject, $body, $headers);
        $message_sent = true;
    }
}
?>

<?php include 'includes/header.php'; ?>

<section class="section">
  <div class="container">
    <div class="section-head reveal"><h2>Contact Us</h2><p class="muted">Start the conversation</p></div>

    <?php if ($message_sent): ?>
      <div class="alert success">Thanks! Your message has been sent. We'll respond shortly.</div>
    <?php else: ?>
      <form class="contact-form reveal" method="post" action="contact.php" novalidate>
        <div class="form-grid">
          <input type="text" name="name" placeholder="Your name" required>
          <input type="email" name="email" placeholder="Your email" required>
          <select name="service">
            <option value="Mobile App Development">Mobile App Development</option>
            <option value="Web Application Development">Web Application Development</option>
            <option value="E-Commerce Solutions">E-Commerce Solutions</option>
            <option value="Design">UI/UX & Design</option>
          </select>
        </div>
        <textarea name="message" rows="6" placeholder="Tell us about your project" required></textarea>
        <button class="btn primary" type="submit">Send Message</button>
      </form>
    <?php endif; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
