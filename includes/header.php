<?php
// header.php - include at top of each page
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>webmobrins — Digital & Mobile Solutions</title>

  <!-- Google Fonts + Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Main stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- meta -->
  <meta name="theme-color" content="#062a33" />
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header" id="header">
    <div class="container">
      <div class="brand">
        <a href="index.php" class="logo">
          <img src="assets/images/logo.png" alt="webmobrins logo" />
        </a>
        <div class="brand-text">
          <span class="company">webmobrins</span>
          <small class="tagline">Digital · Mobile · eCommerce</small>
        </div>
      </div>

      <button id="navToggle" class="nav-toggle" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>

      <nav class="nav" id="nav">
        <ul>
          <li><a href="index.php#hero">Home</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#work">Work</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#team">Team</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">
