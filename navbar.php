
<nav>

    <ul>
        <li><a href="Hakkinda.html">Hakkında</a></li>
        <li><a href="Ozgecmis.html">Öz Geçmiş</a></li>
        <li><a href="Iletisim.html">İletişim</a></li>
        <li><a href="Sehrim.html">Şehrim</a></li>
        <li><a href="Mirasimiz.html">Mirasımız</a></li>
        <li><a href="IlgiAlanlarim.html">İlgi Alanlarım</a></li>
        
        <?php
        // Kullanıcı girişi yapıldıysa çıkış yap seçeneğini göster
        session_start();
        if (isset($_SESSION['username'])) {
            echo "<li><a href='logout.php'>Çıkış Yap</a></li>";
        } else { // Kullanıcı girişi yapılmamışsa giriş yap seçeneğini göster
            echo "<li><a href='Login.html'>Giriş Yap</a></li>";
        }
        ?>
    </ul>
</nav>
