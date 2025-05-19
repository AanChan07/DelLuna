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
                <div class="text-nav">CONTACT US</div>
            </div>

            <div class="form">
                <div class="contact">
                    <div class="rectangle-2"></div>
                    <img class="gambar2" src="img/gambar2.png" />
                    <img class="gambar1" src="img/gambar1.png" />
                    <p class="text-chat"> Privasi dan data anda aman</p>
                    <p class="text-chat-2"> Jawaban lengkap dan solutif</p>
                    <p class="text-chat-3"> Tim cepat dan profesional</p>
                    <p class="text-chat-4"> Ada Pertanyaan? Silahkan Isi Form Berikut</p>
                    <p class="chat-langsung">
                        <span class="chat-langsung-1">Langsung chat kami di WhatsApp<br /></span>
                        <span class="chat-langsung-2">+62 888 7174 044</span>
                    </p>
                    <div class="bantuan">BUTUH BANTUAN LEBIH CEPAT?</div>
                    <img class="logo2" src="img/logo2.png" />

                    <div class="tombol-kirim">
                        <div class="text-kirim">Kirim</div>
                    </div>

                    <div class="form-group name-group">
                        <label for="name" class="full-name">
                            Nama <span class="text-message-1">*</span>
                        </label>
                        <input type="text" id="name" class="name" placeholder="Masukkan nama lengkap">
                    </div>

                    <div class="form-group phone-group">
                        <label for="phone" class="phone-number">
                            Telepon <span class="text-message-1">*</span>
                        </label>
                        <input type="tel" id="phone" class="pon" placeholder="Masukkan nomor telepon">
                    </div>

                    <div class="form-group email-group">
                        <label for="email" class="email-address">
                            Email <span class="text-message-1">*</span>
                        </label>
                        <input type="email" id="email" class="eemail" placeholder="Masukkan email">
                    </div>

                    <div class="form-group message-group">
                        <label for="message" class="message">
                            Pesan <span class="text-message-1">*</span>
                        </label>
                        <textarea id="message" class="pesan" placeholder="Tulis pesan..."></textarea>
                    </div>

                    <button type="button" class="tombol-kirim" id="btnKirim" disabled>Kirim</button>
                </div>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <script>
        const btnKirim = document.getElementById("btnKirim");
        const inputName = document.getElementById("name");
        const inputPhone = document.getElementById("phone");
        const inputEmail = document.getElementById("email");
        const inputMessage = document.getElementById("message");

        // Fungsi cek semua input terisi
        function checkInputs() {
            if (
                inputName.value.trim() !== "" &&
                inputPhone.value.trim() !== "" &&
                inputEmail.value.trim() !== "" &&
                inputMessage.value.trim() !== ""
            ) {
                btnKirim.disabled = false;
            } else {
                btnKirim.disabled = true;
            }
        }

        // Pasang event listener untuk cek input setiap kali user mengetik
        [inputName, inputPhone, inputEmail, inputMessage].forEach((input) => {
            input.addEventListener("input", checkInputs);
        });

        // Saat tombol diklik
        btnKirim.addEventListener("click", () => {
            alert("Pesan berhasil terkirim!");
            // Bisa tambahkan fungsi reset form jika perlu
            inputName.value = "";
            inputPhone.value = "";
            inputEmail.value = "";
            inputMessage.value = "";
            btnKirim.disabled = true;
        });
    </script>

</body>

</html>
