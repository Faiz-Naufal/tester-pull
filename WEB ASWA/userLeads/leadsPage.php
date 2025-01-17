<?php
require '../feature/function.php';
$leads = query('SELECT * FROM properti_jual');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Iklan</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</head>

<body style="font-family: 'Kanit', sans-serif;">
    <header class="bg-navbar1">
        <div class="d-flex justify-content-between align-items-center" style="text-align: center;">
            <div class="m-3" id="backButton">
                <img src="../img/arrow-left.svg" alt="" id="back">
            </div>
            <h2 class="fw-bold">Iklan Saya</h2>
            <div></div>
        </div>
    </header>

    <main style="height: 100%;">
        <div class="px-5 w-100 mt-3">
            <a href="createLeads.php" class="btn btn-khusus w-100 rounded-5 fs-5"><img src="../img/leads-icon.svg"
                    alt="" class="pe-1">Buat Iklan</a>
        </div>
        <?php if (empty($leads)): ?>
            <div class="d-flex text-center align-items-center justify-content-center" style="height: 70vh">
                <h1 class="text-abu opacity-25">Anda belum memiliki iklan</h1>
            </div>
        <?php else: ?>
            <?php foreach ($leads as $lead): ?>
                <?php $harga = number_format($lead["harga"], 0, ',') ?>
                <div class="px-5 mt-3">
                    <div class="card p-3 rounded-4 d-flex flex-row gap-5 flex-wrap">
                        <div style="max-width: 530px; max-height: 300px; border: 2px solid black; overflow: hidden"
                            class="rounded-4">
                            <img src="../img/uploadan/<?= $lead["gambar"] ?>" alt="<?= $lead["gambar"] ?>"
                                style="width: 100%; height: 100%; object-fit: cover">
                        </div>
                        <div class="w-50">
                            <p style="font-size: 40px; font-weight: 500; color: #776B5D" class="m-0"><?= $lead["judul"] ?></p>
                            <p style="color: #B0A695; font-size: 28px; font-weight: 500">Rp. <?= $harga ?></p>
                            <p style="font-size: 24px;"><?= $lead["lokasi"] ?></p>
                            <div class="d-flex gap-3">
                                <p style="font-size: 20px; color: #776B5D"><img src="../img/tempat-tidur.svg" alt="icon"
                                        class="me-3"><?= $lead["kamar_tidur"] ?></p>
                                <p style="font-size: 24px; color: #776B5D">|</p>
                                <p style="font-size: 20px; color: #776B5D"><img src="../img/tempat-mandi.svg" alt="icon"
                                        class="me-3"><?= $lead["kamar_mandi"] ?></p>
                            </div>
                            <div class=" d-flex gap-3">
                                <a href="detailLeadsPage.php?id_jual=<?= $lead["id_jual"] ?>"
                                    class="btn btn-khusus px-4 py-1 rounded-3" style="font-size: 23px;">Lihat</a>
                                <a href="editLeads.php?id_jual=<?= $lead["id_jual"] ?>"
                                    class="btn btn-khusus px-4 py-1 rounded-3" style="font-size: 23px;">Edit</a>
                                <a href="deleteLeads.php?id_jual=<?= $lead["id_jual"] ?>"
                                    class="btn btn-login px-4 py-1 rounded-3" style="font-size: 23px;"
                                    onclick="return confirm('Apakah anda yakin untuk menghapus iklan?')">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif ?>
    </main>

    <footer class="container-fluid p-2 d-flex justify-content-around flex-wrap gap-5 mt-3 position-relative" style="background: #e6e6e6; bottom: 0;">
        <div class="social-media d-flex flex-column gap-2 align-items-center" style="width: 20rem">
            <h5 class="fw-bold text-abu">Social Media</h5>
            <div class="d-flex gap-3">
                <a href="https://instagram.com/_tuyy68">
                    <img src="../img/icon 4.png" class="me-2" alt="" width="30">
                </a>
                <a href="https://www.facebook.com/profile.php?id=100093661991910&mibextid=ZbWKwL">
                    <img src="../img/icon 5.png" class="me-2" alt="" width="30">
                </a>
                <a href="https://www.tiktok.com/@gunturprakoso359?_t=8maBjJB9ZmD&_r=1">
                    <img src="../img/icon 6.png" class="me-2" alt="" width="30">
                </a>
            </div>
        </div>

        <div class="tentang d-flex flex-column gap-2 align-items-center text-abu" style="width: 20rem">
            <h5 class="fw-bold">Tentang</h5>
            <ul style="list-style-type: none;" class="d-flex flex-column gap-2">
                <li><a class="text-abu" style="text-decoration: none;" href="../footer/s&k.html">Syarat & Ketentuan</a>
                </li>
                <li><a class="text-abu" style="text-decoration: none;" href="../footer/kebijakan.html">Kebijakan
                        Privasi</a></li>
                <li><a class="text-abu" style="text-decoration: none;" href="../footer/tentang.html">Tentang Kami</a>
                </li>
                <li><a class="text-abu" style="text-decoration: none;" href="../footer/hakCipta.html">Hak Cipta</a></li>
            </ul>
        </div>

        <div class="kontak d-flex flex-column gap-2 align-items-center text-abu" style="width: 20rem;">
            <h5 class="fw-bold">Kontak</h5>
            <div class="d-flex align-items-center gap-3">
                <img src="../img/icon 7.png" alt="" width="30">
                <span>089999999999</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <img src="../img/whatsapp.svg" alt="" width="30">
                <span>089999999999</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <img src="../img/whatsapp.svg" alt="" width="30">
                <span>089999999999</span>
            </div>
        </div>
    </footer>
    <script>
        const backButton = document.getElementById("backButton");

        backButton.addEventListener('click', () => {
            window.history.back()
        })
    </script>
</body>

</html>