<!DOCTYPE html>
<html lang="en">
@include('partial.header')
<head>
  <meta charset="UTF-8">
  <title>Explore Your Community</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-HDuj6UyF6UdiE3r+8/s7VIMnxXdpTzz7/znawFTR8z0fqxGoGJArz7pIaomG8+ndpVKJXO9aMC+2QvLu8nyixQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  @include('partial.navbar')
  <div class="container my-5">
    <div class="app">
        <header class="header-community">
            <div class="community-box">
                <h2>DUNIA TANI COMMUNITY</h2>
                <h1>Find Our Community Here!</h1>
                <p>
                    Dunia Tani Community is a community 
                    where agricultural enthusiasts and experts
                    in Indonesia gather to share and develop 
                    future agricultural talents. It doesn't matter what 
                    your starting point is, we aim to support every idea and 
                    create a big impact, and it starts with you.
                </p>
                <a href="#middle" class="cta community-cta">Click Here!</a>
                <div id="middle"></div>
            </div>
            <img src="../asset/detailcommunity.png" alt="" class="detailcommunity-banner" width="300" height="200">
        </header>
  </div>
        
  <!-- Community Cards -->
  <div class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <div class="event-card community-card">
              <img src="../asset/com-1.png" alt="">
              <h1>Platform Pengembangan Petani</h1>
              <p>Platform edukasi untuk pendampingan dan pengembangan para petani muda Indonesia</p>
              <a href="https://www.instagram.com/akupetani.id/" class="cta" target="_blank">Join</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="event-card community-card">
              <img src="../asset/com-2.jpg" alt="">
              <h1>Media Sharing Info Pertanian</h1>
              <p>Media sharing tentang hal-hal yang berkaitan dengan bidang pertanian dan perkebunan</p>
              <a href="https://www.instagram.com/agrotek.id/" class="cta" target="_blank">Join</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="event-card community-card">
            <img src="../asset/com-3.jpg" alt="">
            <h1>Media Sharing Info Hidroponik</h1>
            <p>Media sharing tips dan tutorial yang berkaitan dengan bidang hidroponik dan info lainnya</p>
            <a href=" https://www.instagram.com/hidroponik.farm/" class="cta" target="_blank">Join</a>
          </div>
        </div>
      </div>
    </div>
    <br></br>

  @include('partial.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>