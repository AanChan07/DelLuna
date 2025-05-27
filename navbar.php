<?php
session_start();
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

    <a href="index.php" class="text-wrapper-5 <?php if ($current_page == 'index.php')
      echo 'active'; ?>">HOME</a>
    <a href="rooms.php" class="text-wrapper-6 <?php if ($current_page == 'rooms.php')
      echo 'active'; ?>">ROOMS</a>
    <a href="facilities.php" class="text-wrapper-7 <?php if ($current_page == 'facilities.php')
      echo 'active'; ?>">FACILITIES</a>
    <a href="about.php" class="text-wrapper-8 <?php if ($current_page == 'about.php')
      echo 'active'; ?>">ABOUT US</a>
    <a href="faqs.php" class="text-wrapper-9 <?php if ($current_page == 'faqs.php')
      echo 'active'; ?>">FAQS</a>
    <a href="contact.php" class="text-wrapper-10 <?php if ($current_page == 'contact.php')
      echo 'active'; ?>">CONTACT
      US</a>

    <!-- Tombol Login -->
    <?php if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true): ?>
      <!-- Tampilkan tombol Login/Registrasi -->
      <div class="login">
        <div class="text-wrapper-4" style="cursor: pointer;">
          Login/Registrasi
        </div>
      </div>
    <?php else: ?>
      <!-- Ikon Profil -->
      <i class="fas fa-user-circle fa-2x" id="profileIcon"
        style="position: absolute; cursor:pointer;color:#ffffff; top: 12px; right: 200px; transition:color 0.3s ease;"></i>

      <div class="profile-menu" id="profileMenu"
        style="display:none;position:absolute; right: 120px; background:#fff;border:1px solid #ddd;box-shadow:0 4px 8px rgba(0,0,0,0.1);padding:10px 0;margin-top:10px;border-radius:5px;min-width:120px;">
        <a href="profil.php"
          style="display:block;padding:8px 20px;color:#333;text-decoration:none;font-weight:500;transition:background-color 0.2s ease;">Profil</a>
        <a href="logout.php"
          style="display:block;padding:8px 20px;color:#333;text-decoration:none;font-weight:500;transition:background-color 0.2s ease;">Logout</a>
      </div>

    <?php endif; ?>


    <!-- Pop-Up Login -->
    <div class="overlay-login" style="display: none;"></div>
    <div class="div-login" style="display: none;">
      <div class="text-login-atas">Login</div>
      <i class="fas fa-times close-login"></i>

      <div class="text-login-1">Belum punya akun</div>
      <div class="text-login-2" style="cursor: pointer;">Daftar Disini</div>

      <div class="pass">
        <div class="text-pass">Password</div>
        <input type="password" placeholder="Masukkan password" class="input-field">
      </div>

      <div class="input-email">
        <div class="text-pass">Alamat Email</div>
        <input type="email" placeholder="Masukkan alamat email" class="input-field">
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
    const profileIcon = document.getElementById("profileIcon");
    const profileMenu = document.getElementById("profileMenu");

    // Tampilkan popup login
    if (loginBtn) {
      loginBtn.addEventListener("click", (e) => {
        e.stopPropagation(); // ← Tambahkan ini agar tidak ditangkap oleh window click
        popup.style.display = "block";
        overlay.style.display = "block";
      });
    }

    // Tombol close login
    if (closeBtn) {
      closeBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        popup.style.display = "none";
        overlay.style.display = "none";
      });
    }

    // Klik di luar popup login → tutup popup
    document.addEventListener("click", function (event) {
      if (
        popup &&
        popup.style.display === "block" &&
        !popup.contains(event.target) &&
        !loginBtn.contains(event.target)
      ) {
        popup.style.display = "none";
        overlay.style.display = "none";
      }

      // Tutup menu profil jika klik di luar
      if (
        profileMenu &&
        profileMenu.style.display === "block" &&
        !profileMenu.contains(event.target) &&
        !profileIcon.contains(event.target)
      ) {
        profileMenu.style.display = "none";
      }
    });

    // Login simulasi
    if (popupLoginBtn) {
      popupLoginBtn.addEventListener("click", () => {
        window.location.href = "login.php";
      });
    }

    // Pindah ke registrasi
    if (regisBtn) {
      regisBtn.addEventListener("click", () => {
        window.location.href = "registrasi.php";
      });
    }

    // Klik ikon profil → toggle menu
    if (profileIcon) {
      profileIcon.addEventListener("click", function (e) {
        e.stopPropagation(); // Penting untuk mencegah window click menutup langsung
        profileMenu.style.display =
          profileMenu.style.display === "block" ? "none" : "block";
      });
    }
  });
</script>


</div>
