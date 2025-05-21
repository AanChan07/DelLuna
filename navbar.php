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
    
    <!-- Tombol Login -->
<div class="login">
  <div class="text-wrapper-4" style="cursor: pointer;">Login/Registrasi</div>
</div>

<!-- Pop-Up Login -->
<div class="overlay-login" style="display: none;"></div>
<div class="div-login" style="display: none;">
  <div class="text-login-atas">Login</div>
  <i class="fas fa-times close-login"></i>

  <div class="text-login-1">Belum punya akun</div>
  <div class="text-login-2" style="cursor: pointer;" >Daftar Disini</div>

  <div class="pass">
    <div class="text-pass">Password</div>
    <input type="password" placeholder="Masukkan password" class="input-pass-field">
  </div>

  <div class="input-email">
    <div class="text-input-email">Alamat Email</div>
    <input type="email" placeholder="Masukkan alamat email" class="input-email-field">
  </div>

  <div class="tombol-login">
    <div class="text-tombol-login" style="cursor: pointer;">Login</div>
  </div>
</div>

  </header>

  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const loginBtn = document.querySelector(".text-wrapper-4");
    const popup = document.querySelector(".div-login");
    const overlay = document.querySelector(".overlay-login");
    const closeBtn = document.querySelector(".close-login");
    const popupLoginBtn = document.querySelector(".tombol-login");
    const regisBtn = document.querySelector(".text-login-2");

    loginBtn.addEventListener("click", () => {
      popup.style.display = "block";
      overlay.style.display = "block"; // ← tampilkan overlay juga
    });

    closeBtn.addEventListener("click", () => {
      popup.style.display = "none";
      overlay.style.display = "none"; // ← sembunyikan overlay juga
    });

    window.addEventListener("click", (event) => {
      if (!popup.contains(event.target) && !loginBtn.contains(event.target)) {
        popup.style.display = "none";
        overlay.style.display = "none"; // ← sembunyikan overlay jika klik luar popup
      }
    });

    // Fungsi tombol Login di popup
    popupLoginBtn.addEventListener("click", () => {
      // Saat tombol Login diklik, redirect ke halaman index.php
      window.location.href = "index.php";
    });

   
    regisBtn.addEventListener("click", () => {
      window.location.href = "registrasi.php";
    });
  });
</script>

</div>
