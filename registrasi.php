<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/globals.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="desaign-dashboard">
        <div class="div">
            <?php include 'navbar.php'; ?>

            <div class="atas">
                <div class="text-nav">Registrasi</div>
            </div>

            <div class="box-regis">
                <div class="rectangle-regis"></div>

                <div class="regis-nama">
                    <div class="text-regis">Nama Lengkap <span class="text-message-1">*</span></div>
                    <input type="nama" placeholder="Masukkan nama lengkap" class="regis-field">
                </div>

                <div class="regis-nomor">
                    <div class="text-regis">No. Telepon <span class="text-message-1">*</span></div>
                    <input type="nomor" placeholder="Contoh: 082388272388" class="regis-field">
                </div>

                <div class="regis-email">
                    <div class="text-regis">Alamat Email <span class="text-message-1">*</span></div>
                    <input type="email" placeholder="Contoh: hhanisa@gmail.com" class="regis-field">
                </div>

                <div class="regis-alamat">
                    <div class="text-regis">Alamat <span class="text-message-1">*</span></div>
                    <textarea type="alamat" placeholder="Contoh: JI. Flamboyan No. 36, Batu 10, Kecamatan TanjungPinang"
                        class="regis-alamat-field"></textarea>
                </div>

                <div class="regis-foto">
                    <div class="text-regis">Upload Foto KTP <span class="text-message-1">*</span></div>
                    <input type="file" name="foto_ktp" accept="image/*" class="regis-foto-field" required>
                </div>

                <div class="regis-pass">
                    <div class="text-regis">Password <span class="text-message-1">*</span></div>
                    <input type="password" placeholder="Masukkan password" class="regis-field">
                </div>

                <div class="regis-pass-k">
                    <div class="text-regis">Konfirmasi Password <span class="text-message-1">*</span></div>
                    <input type="password-k" placeholder="Masukkan kembali password" class="regis-field">
                </div>

                <div class="setuju-setuju">
                    <div class="text-regis-1">Saya setuju dengan</div>
                    <div class="text-regis-2">Syarat dan ketentuan yang berlaku</div>
                    <input type="checkbox" name="setuju" required>
                </div>

                <div class="tombol-signup">
                    <div class="text-tombol-regis" style="cursor: pointer;">Sign-Up</div>
                </div>

            </div>


            <?php include 'footer.php'; ?>
        </div>
    </div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const registrasiBtn = document.querySelector(".text-tombol-regis");

    // Fungsi tombol signup di popup
    registrasiBtn.addEventListener("click", () => {
      window.location.href = "index.php";
    });
});

</script>

</body>

</html>
