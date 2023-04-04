<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')

        <header class="header event-header">
            <img src="../asset/event-banner.png" alt="" class="header__banner event-banner">
            <div class="header__box header__box-course event__box">
                <h2>Events to Attend</h2>
                <h1 class="header__title header__title-course">Add relationships by participating in farming events</h1>
                <p>Take the opportunity to dive into invaluable learnings in our latest events.</p>
            </div>
        </header>

        <div id="about"  class="about">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <div class="about_img">
                           <figure><img src="../asset/event-2.jpeg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="titlepage">
                        <?php
                           echo '<h1>Pasar Tani Goes to Mall by Kementrian Pertanian</h1><br>';
                           echo '<h3>19 Oktober 2022</h3><br><br>';
                           echo '<p>"Dunia Tani goes to mall" adalah tema yang menunjukkan upaya sektor pertanian untuk memperkenalkan diri dan produk-produknya kepada masyarakat luas melalui pusat perbelanjaan modern. Platform "dunia tani" menjadi salah satu cara untuk mempromosikan sektor ini secara lebih terbuka dan inovatif.</p>';
                           echo '<p>Dalam memperkenalkan platform "dunia tani" ke khalayak publik melalui mall, sektor pertanian dapat memanfaatkan teknologi dan media sosial untuk memperluas jangkauan dan meningkatkan efektivitas promosi. Dengan demikian, sektor pertanian semakin mampu menarik minat dan kepercayaan konsumen, serta meningkatkan pangsa pasarnya.</p>';
                           echo '<p>Melalui promosi yang kreatif dan inovatif di pusat perbelanjaan, sektor pertanian juga dapat menunjukkan bahwa pertanian bukan lagi sektor yang ketinggalan zaman dan tidak menarik. Sektor ini menawarkan produk-produk berkualitas tinggi dengan harga yang kompetitif, serta memegang prinsip-prinsip keberlanjutan dan keseimbangan ekologi.</p>';
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


        @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>