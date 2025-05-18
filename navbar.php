<?php
// Dapatkan nama file PHP yang sedang dibuka
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="navbar">
  <header class="header">
    <div class="logo">
      <div class="overlap-group-2">
        <img class="vector" src="img/vektor-1.png" />
      </div>
    </div>
    <div class="div-2"></div>
    
    <a href="index.php" class="text-wrapper-5 <?php if($current_page == 'index.php') echo 'active'; ?>">HOME</a>
    <a href="rooms.php" class="text-wrapper-6 <?php if($current_page == 'rooms.php') echo 'active'; ?>">ROOMS</a>
    <a href="facilities.php" class="text-wrapper-7 <?php if($current_page == 'facilities.php') echo 'active'; ?>">FACILITIES</a>
    <a href="about.php" class="text-wrapper-8 <?php if($current_page == 'about.php') echo 'active'; ?>">ABOUT US</a>
    <a href="faqs.php" class="text-wrapper-9 <?php if($current_page == 'faqs.php') echo 'active'; ?>">FAQS</a>
    <a href="contact.php" class="text-wrapper-10 <?php if($current_page == 'contact.php') echo 'active'; ?>">CONTACT US</a>
    
    <div class="login" onclick="openLoginPopup()">
      <div class="text-wrapper-4">Login/Registrasi</div>
    </div>
  </header>
</div>
