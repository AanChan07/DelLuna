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



            <div class="background-border">
                <div class="overlap">
                    <div class="gambar">
                        <img class="background-image" src="img/1.png">
                    </div>
                    <div class="container">
                        <div class="overlap-group">
                            <div class="text-wrapper">BEACHFRONT HOTEL</div>
                            <div class="text-wrapper-2">DEL LUNA</div>
                        </div>
                    </div>
                    <div class="link">
                        <div class="text-wrapper-3">Rencanakan Liburan Anda</div>
                    </div>
                </div>
            </div>

            <div class="overlap-5">
                <form action="rooms.php" method="post" class="desaign-dashboard">
                    <div class="form-block">
                        <label for="checkin" style="display:block;">Check In</label>
                        <input type="date" name="checkin" required>
                    </div>

                    <div class="form-block">
                        <label for="checkout" style="display:block;">Check Out</label>
                        <input type="date" name="checkout" required>
                    </div>

                    <div class="form-block">
                        <label for="adults" style="display:block;">Dewasa</label>
                        <select id="adults" name="adults" required>
                            <option hidden selected></option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                        </select>
                    </div>

                    <div class="form-block">
                        <label for="children" style="display:block;">Anak-Anak</label>
                        <select id="children" name="children">
                            <option hidden selected></option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                        </select>
                    </div>
                    <div class="cari">
                        <div class="CRI">
                            <div class="container-3">
                                <button type="submit" class="overlap-group-7" style="all: unset; cursor: pointer;">
                                    <div class="text-wrapper-29">Cari</div>
                                    <i class="fa-solid fa-magnifying-glass search"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="overlap-2">
                <div class="overlay"></div>
                <div class="container-2">
                    <div class="text-wrapper-18">Pilihan Kamar</div>
                    <p class="p">
                        Rasakan pengalaman menginap yang istimewa di akomodasi kami yang dirancang dengan cermat,
                        menawarkan
                        pemandangan laut yang menenangkan serta fasilitas terkini. Anda dapat memilih dari berbagai
                        jenis kamar
                        yang sesuai dengan kebutuhan Anda.
                    </p>
                    <div class="overlap-4">
                        <img class="element" src="img/kamar.png" />
                        <div class="r">
                            <div class="overlap-group-3">
                                <p class="roms">
                                    xcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est
                                    laborum.
                                </p>
                                <div onclick="openPopup('popup-cabin')" class="text-wrapper-19">Cabin Room</div>
                            </div>
                            <div class="xmartlabs-team-image"><img class="img-3" src="img/deluxe.png"
                                    onclick="openPopup('popup-cabin')" style="cursor: pointer;" /></div>
                        </div>

                        <div class="r-oom">
                            <div class="overlap-group-3">
                                <p class="roms">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor
                                    sit amet,
                                    consectetur adipiscing elit.
                                </p>

                                <div onclick="openPopup('popup-deluxe')" class="text-wrapper-19">Deluxe Room</div>

                            </div>
                            <div class="xmartlabs-team-image"><img class="img-3" src="img/deluxe.png"
                                    onclick="openPopup('popup-deluxe')" style="cursor: pointer;" /></div>
                        </div>
                        <div class="r-2">
                            <div class="overlap-group-3">
                                <p class="roms">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint
                                    occaecat cupidatat
                                    non proident.
                                </p>
                                <div onclick="openPopup('popup-executive')" class="text-wrapper-21">Executive Room</div>

                            </div>
                            <div class="xmartlabs-team-image"><img class="img-3" src="img/haneymon.png"
                                    onclick="openPopup('popup-executive')" style="cursor: pointer;" /></div>
                        </div>

                        <!-- POPUP CABIN -->
                        <div id="popup-cabin" class="popup-overlay">
                            <div class="popup-content">
                                <span class="close-button" onclick="closePopup('popup-cabin')">&times;</span>
                                <img src="img/deluxe.png" alt="Cabin Room">
                                <h2>Cabin Room</h2>
                                <h3><i class="fa-solid fa-bed icon"></i> Deskripsi Kamar:</h3>
                                <p>
                                    Kamar Cabin dirancang minimalis dengan suasana hangat dan nyaman, ideal untuk
                                    pelancong solo atau pasangan yang mencari kenyamanan fungsional.
                                </p>

                                <h3><i class="fa-solid fa-circle-check icon"></i> Rate Termasuk:</h3>
                                <ul>
                                    <li><i class="fa-solid fa-mug-hot"></i> Minuman selamat datang</li>
                                    <li><i class="fa-solid fa-water"></i> 2 botol air mineral setiap hari</li>
                                    <li><i class="fa-solid fa-wifi"></i> Wi-Fi gratis</li>
                                    <li><i class="fa-solid fa-dumbbell"></i> Akses Sport Centre:
                                        <ul>
                                            <li>- Kolam renang</li>
                                            <li>- Gym</li>
                                            <li>- Sauna</li>
                                            <li>- Steam & Jacuzzi</li>
                                        </ul>
                                    </li>
                                    <li><i class="fa-solid fa-receipt"></i> Sudah termasuk pajak dan biaya layanan</li>
                                </ul>

                                <h3><i class="fa-solid fa-credit-card icon"></i> Kebijakan Pembayaran:</h3>
                                <ul>
                                    <li>-Jaminan kartu kredit diperlukan</li>
                                    <li>- Hotel dapat mengotorisasi kartu sebelum kedatangan</li>
                                </ul>

                                <h3><i class="fa-solid fa-ban icon"></i> Kebijakan Pembatalan:</h3>
                                <ul>
                                    <li>- Tidak tersedia pembatalan gratis</li>
                                    <li>- Pembatalan dalam waktu kurang dari ketentuan akan dikenakan biaya 1 malam</li>
                                    <li>- No-show akan dikenakan biaya penuh</li>
                                </ul>

                                <h3><i class="fa-solid fa-user-group icon"></i> Kapasitas Kamar:</h3>
                                <ul>
                                    <li>Maksimal 2 tamu</li>
                                </ul>

                                <h3><i class="fa-solid fa-child icon"></i> Kebijakan Anak:</h3>
                                <ul>
                                    <li>- Anak-anak diperbolehkan</li>
                                    <li>- Gratis untuk 1 anak di bawah 12 tahun menggunakan tempat tidur yang ada</li>
                                    <li>- Ranjang bayi gratis atas permintaan</li>
                                    <li>- Maksimal 1 extra bed atau ranjang bayi per kamar</li>
                                </ul>

                                <h3><i class="fa-solid fa-clock icon"></i> Check-in / Check-out:</h3>
                                <ul>
                                    <li>- Check-in: 15.00</li>
                                    <li>- Check-out: 12.00</li>
                                </ul>
                            </div>
                        </div>

                        <!-- POPUP DELUXE -->
                        <div id="popup-deluxe" class="popup-overlay">
                            <div class="popup-content">
                                <span class="close-button" onclick="closePopup('popup-deluxe')">&times;</span>
                                <img src="img/deluxe.png" alt="Deluxe Room">
                                <h2>Deluxe Room</h2>
                                <h3><i class="fa-solid fa-star"></i> Deskripsi Kamar:</h3>
                                <p>
                                    Kamar Deluxe memberikan kenyamanan ekstra dengan ruang lebih luas, cocok untuk tamu
                                    yang menginginkan pengalaman menginap yang lebih lapang dan elegan. Dilengkapi
                                    dengan fasilitas modern serta akses lengkap ke area rekreasi.
                                </p>

                                <h3><i class="fa-solid fa-circle-check"></i> Rate Termasuk:</h3>
                                <ul>
                                    <li><i class="fa-solid fa-mug-hot"></i> Welcome Drink</li>
                                    <li><i class="fa-solid fa-water"></i> 2 botol air mineral setiap hari</li>
                                    <li><i class="fa-solid fa-wifi"></i> Wi-Fi gratis</li>
                                    <li><i class="fa-solid fa-dumbbell"></i> Akses gratis ke Sport Centre:
                                        <ul>
                                            <li>- Kolam renang</li>
                                            <li>- Gym</li>
                                            <li>- Sauna</li>
                                            <li>- Steam & Jacuzzi</li>
                                        </ul>
                                    </li>
                                    <li><i class="fa-solid fa-receipt"></i> Harga sudah termasuk pajak dan biaya layanan
                                    </li>
                                </ul>

                                <h3><i class="fa-solid fa-credit-card"></i> Kebijakan Pembayaran:</h3>
                                <ul>
                                    <li>- Diperlukan jaminan kartu kredit untuk mengamankan pemesanan</li>
                                    <li>- Hotel berhak melakukan otorisasi kartu kredit sebelum tamu tiba</li>
                                </ul>

                                <h3><i class="fa-solid fa-ban"></i> Kebijakan Pembatalan:</h3>
                                <ul>
                                    <li>- Pembatalan gratis tidak tersedia</li>
                                    <li>- Pembatalan dalam periode kurang dari ketentuan akan dikenakan biaya 1 malam
                                    </li>
                                    <li>- No-show akan dikenakan biaya penuh</li>
                                </ul>

                                <h3><i class="fa-solid fa-user-group"></i> Kapasitas Maksimal Kamar:</h3>
                                <ul>
                                    <li>Maksimal 2 tamu dewasa</li>
                                </ul>

                                <h3><i class="fa-solid fa-child"></i> Kebijakan Anak:</h3>
                                <ul>
                                    <li>- Semua anak diperbolehkan</li>
                                    <li>- Gratis! 1 anak di bawah 12 tahun menginap tanpa biaya dengan tempat tidur yang
                                        tersedia</li>
                                    <li>- Kot bayi gratis berdasarkan permintaan</li>
                                    <li>- Maksimal 1 tempat tidur tambahan per kamar</li>
                                    <li>- Semua permintaan ekstra harus dikonfirmasi oleh manajemen</li>
                                </ul>

                                <h3><i class="fa-solid fa-clock"></i> Kebijakan Check-in / Check-out:</h3>
                                <ul>
                                    <li>- Check-in: pukul 15.00</li>
                                    <li>- Check-out: pukul 12.00</li>
                                </ul>
                            </div>
                        </div>

                        <!-- POPUP EXECUTIVE -->
                        <div id="popup-executive" class="popup-overlay">
                            <div class="popup-content">
                                <span class="close-button" onclick="closePopup('popup-executive')">&times;</span>
                                <img src="img/haneymon.png" alt="Executive Room">
                                <h2>Executive Room</h2>
                                <h3><i class="fa-solid fa-bed icon"></i> Deskripsi Kamar:</h3>
                                <p>
                                    Executive Room adalah kamar suite luas (52 m<sup>2</sup>) dengan fasilitas ruang
                                    tamu, memberikan pengalaman menginap tak terlupakan di Batam dengan layanan terbaik
                                    dan keramahan khas Pacific Palace Hotel.
                                </p>

                                <h3><i class="fa-solid fa-circle-check icon"></i> Rate Termasuk:</h3>
                                <ul>
                                    <li><i class="fa-solid fa-mug-hot"></i> Minuman selamat datang</li>
                                    <li><i class="fa-solid fa-utensils"></i> Sarapan harian</li>
                                    <li><i class="fa-solid fa-water"></i> 2 botol air mineral setiap hari</li>
                                    <li><i class="fa-solid fa-wifi"></i> Wi-Fi gratis</li>
                                    <li><i class="fa-solid fa-dumbbell"></i> Akses Sport Centre:
                                        <ul>
                                            <li>- Kolam renang</li>
                                            <li>- Gym</li>
                                            <li>- Sauna</li>
                                            <li>- Steam & Jacuzzi</li>
                                        </ul>
                                    </li>
                                    <li><i class="fa-solid fa-receipt"></i> Sudah termasuk pajak dan biaya layanan</li>
                                </ul>

                                <h3><i class="fa-solid fa-credit-card icon"></i> Kebijakan Pembayaran:</h3>
                                <ul>
                                    <li>- Jaminan kartu kredit diperlukan</li>
                                    <li>- Hotel dapat mengotorisasi kartu sebelum kedatangan</li>
                                </ul>

                                <h3><i class="fa-solid fa-ban icon"></i> Kebijakan Pembatalan:</h3>
                                <ul>
                                    <li>- Pembatalan gratis tidak tersedia untuk tarif ini</li>
                                    <li>- Pembatalan kurang dari waktu yang ditentukan akan dikenakan biaya 1 malam</li>
                                    <li>- No-show akan dikenakan biaya penuh</li>
                                </ul>

                                <h3><i class="fa-solid fa-user-group icon"></i> Kapasitas Kamar:</h3>
                                <ul>
                                    <li>Maksimal 2 tamu</li>
                                </ul>

                                <h3><i class="fa-solid fa-child icon"></i> Kebijakan Anak:</h3>
                                <ul>
                                    <li>- Anak-anak diperbolehkan</li>
                                    <li>- Gratis untuk 1 anak di bawah 12 tahun menggunakan tempat tidur yang ada</li>
                                    <li>- Ranjang bayi gratis atas permintaan</li>
                                    <li>- Maksimal 1 extra bed atau ranjang bayi per kamar</li>
                                </ul>

                                <h3><i class="fa-solid fa-clock icon"></i> Check-in / Check-out:</h3>
                                <ul>
                                    <li>- Check-in: 15.00</li>
                                    <li>- Check-out: 12.00</li>
                                </ul>

                                <h3><i class="fa-solid fa-circle-info icon"></i> Fasilitas Kamar:</h3>
                                <ul>
                                    <li><i class="fa-solid fa-snowflake"></i> Air Conditioner</li>
                                    <li><i class="fa-solid fa-bath"></i> Kamar mandi dengan bathtub</li>
                                    <li><i class="fa-solid fa-tv"></i> TV layar datar dengan saluran satelit</li>
                                    <li><i class="fa-solid fa-mug-saucer"></i> Pembuat kopi / teh</li>
                                    <li><i class="fa-solid fa-bottle-water"></i> Air mineral gratis</li>
                                    <li><i class="fa-solid fa-broom"></i> Layanan kebersihan harian</li>
                                    <li><i class="fa-solid fa-phone"></i> Telepon langsung</li>
                                    <li><i class="fa-solid fa-lock"></i> Kunci elektronik</li>
                                    <li><i class="fa-solid fa-hairdryer"></i> Pengering rambut</li>
                                    <li><i class="fa-solid fa-couch"></i> Ruang tamu / duduk</li>
                                    <li><i class="fa-solid fa-wine-glass-alt"></i> Mini bar</li>
                                    <li><i class="fa-solid fa-film"></i> Saluran film & olahraga</li>
                                    <li><i class="fa-solid fa-smoking-ban"></i> Kamar bebas rokok tersedia</li>
                                    <li><i class="fa-solid fa-concierge-bell"></i> Layanan kamar 24 jam</li>
                                    <li><i class="fa-solid fa-vault"></i> Brankas</li>
                                    <li><i class="fa-solid fa-shoe-prints"></i> Sandal kamar</li>
                                    <li><i class="fa-solid fa-volume-mute"></i> Jendela kedap suara</li>
                                    <li><i class="fa-solid fa-bell"></i> Panggilan bangun tidur</li>
                                    <li><i class="fa-solid fa-pen-nib"></i> Meja kerja</li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <a href="index.php">
                        <div class="lihat-semua-room">
                            <div class="text-wrapper-22">Booking Sekarang</div>
                        </div>
                    </a>
                </div>

                <div class="background-border-2">
                    <div class="heading">
                        <p class="nikmati-berbagai">
                            <span class="text-wrapper-23">Nikmati berbagai </span>
                            <span class="text-wrapper-24">aktivitas</span>
                            <span class="text-wrapper-23"> yang dapat lakukan selama menginap di </span>
                            <span class="text-wrapper-24">Hotel</span>
                            <span class="text-wrapper-23">&nbsp;</span>
                            <span class="text-wrapper-24">Del Luna</span>
                        </p>
                    </div>
                    <p class="text-wrapper-25">Semua tersedia untuk menciptakan momen istimewa selama masa menginap Anda
                    </p>

                    <div class="vertical-divider-4"></div>
                    <div class="overlay-blur-4">
                        <img class="clip-path-group-5" src="img/kuliner.png" />
                    </div>

                    <div class="vertical-divider-5"></div>
                    <div class="overlay-blur-5">
                        <img class="clip-path-group-4" src="img/renang.png" />
                    </div>

                    <div class="vertical-divider-6"></div>
                    <div class="overlay-blur-6">
                        <img class="clip-path-group-4" src="img/relaksasi.png" />
                    </div>

                    <div class="vertical-divider-7"></div>
                    <div class="overlay-blur-7">
                        <img class="clip-path-group-4" src="img/olahraga.png" />
                    </div>

                    <div class="vertical-divider-8"></div>
                    <div class="overlay-blur-8">
                        <div class="clip-path-group-4"><img class="group-3" src="img/sunset.png" /></div>
                    </div>
                    <?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                    ?>

                    <a href="facilities.php"
                        class="lihat-semua-room-2 <?php if ($current_page == 'facilities.php')
                            echo 'active'; ?>">
                        <div class="text-wrapper-22">Lihat Fasilitas</div>
                    </a>

                </div>
            </div>



            <?php include 'footer.php'; ?>
        </div>
    </div>


    <script>
        function openPopup(id) {
            const popup = document.getElementById(id);
            if (popup) popup.style.display = 'flex';
        }

        function closePopup(id) {
            const popup = document.getElementById(id);
            if (popup) popup.style.display = 'none';
        }

        window.addEventListener('click', function (e) {
            ['popup-cabin', 'popup-deluxe', 'popup-executive'].forEach(id => {
                const popup = document.getElementById(id);
                if (e.target === popup) popup.style.display = 'none';
            });
        });

    </script>

</body>

</html>