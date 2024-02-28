<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PWD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon.svg" type="image/svg">
</head>
<body>
    <header>
        <h1>Biodata Diri</h1>
        <img src="bocah.png" width="110" height="160" alt="gambar profil">
        <p>Hallo, saya adalah seorang mahasiswi UNTAN Fakultas MIPA dengan prodi Sistem Informasi.
            <br>Saya mempelajari tentang teknologi terutama seputar <i>web developing</i>,
            saat ini saya sedang belajar kelas pemrograman web dasar.
            <br> Berikut data diri saya: <br> </p>
    </header>
    <main>
        <section>
            <h2>Data Diri</h2>
            <table>
                <tr>
                    <td><b>Nama</b></td>
                    <td>: Tarsisia Uci Suriyani</td>
                </tr>
                <tr>
                    <td><b>Tempat, Tanggal Lahir</b></td>
                    <td>: Sanggau, 15 Agustus 2003</td>
                </tr>
                <tr>
                    <td><b>Hobi</b></td>
                    <td>: Menyanyi, memasak, jalan-jalan</td>
                </tr>
            </table>
        </section>
        <section>
            <h2>Makanan Kesukaan</h2>
            <ul>
                <li>Kwetiaw Goreng Basah</li>
                <li>Ramen</li>
                <li>Sayur Bening</li>
                <li>Apel</li>
            </ul>
        </section>
        <section>
            <h2>Subscribe Newsletter</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="interests">Minat:</label>
                    <select id="interests" name="interests" multiple>
                        <option value="technology">Technology</option>
                        <option value="fashion">Fashion</option>
                        <option value="food">Food</option>
                        <option value="travel">Travel</option>
                        <option value="sports">Sports</option>
                    </select>
                </div>
                <button type="submit">Subscribe Now!</button>
            </form>
        </section>
    </main>
</body>
</html>
