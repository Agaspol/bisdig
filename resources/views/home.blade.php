
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GRS JOGJA</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-SMw3Zzg03OFM4iN7S4LrB8wqV0uznCFUBB+e2pR7S3TtPfdKJ9BnJG5ABaA5F1MDz3d3JF1dYx6o1i1G/MKdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-SMw3Zzg03OFM4iN7S4LrB8wqV0uznCFUBB+e2pR7S3TtPfdKJ9BnJG5ABaA5F1MDz3d3JF1dYx6o1i1G/MKdxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<!-- Navbar start -->
<nav class="navbar">
    <a href="#home" class="navbar-logo">Griyah<span> Terapi</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
      {{-- <span id="opening-hours", style="color: white">Jam Buka: 08:00 - 18:00</span> --}}
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Mari Terapi Sehat <span>Griyah JOGJA</span></h1>
        <p style="color: white">Griyah jogja adalah terapi tradisional dari yogyakarta berdiri sejak tahun 1980</p>
        <p style="color: white">Buka Jam 08.00 - 18.00</p>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/tentangkami.png" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa Terapi diGriyah Jogja?</h3>
        <p>Griya Ruqyah Syar’iyyah merupakan
            tempat  terapi & penyembuhan tradisional.
            Tempat ini juga menyediakan
            Jasa pijat,ruqyah,dan penyembuhan
            tulang Melalui tenaga terapis yang
            berpengalaman dan profesional
            Kami.</p>
        <p>kami
            berusaha memberikan pelayanan yang
            terbaik dalam melayani customer.
            Kepuasan customer adalah kepuasan</p>
      </div>
    </div>
  </section>
  <!-- About Section end -->

<!--tombol wa-->
<div class="whatsapp-button">
    <a href="https://wa.me/+6281804179330" target="_blank">
      <i class="fab fa-whatsapp">WA</i>
    </a>
  </div>

{{-- <!--tombol jadwal-->
<div class="floating-schedule-button">
    <a href="#" class="schedule-tooltip">
      <i class="far fa-clock"></i>
      <span class="tooltiptext">Jam Buka: 08:00 - 18:00</span>
    </a>
  </div> --}}

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>Layanan</span> Kami</h2>
    <p>Kami memberikan layanan terbaik untuk pelanggan dan memberikan jasa terapi yang sangat memuaskan secara pengobatan terapi tradisional
    </p>
    <div style="display:flexbox">
    <div class="row">
        @forelse ($products as $product)
      <div class="menu-card">
        <img src="{{ Storage::url('products/' . $product->image) }}" alt="{{ $product->title }}" class="menu-card-img">
        <h3 class="menu-card-title">- {{ $product->title }} -</h3>
        <p class="menu-card-price">{{ "Rp " . number_format($product->price,2,',','.') }}</p>
      </div>
        @empty
        <div class="col-md-12">
            <div class="alert alert-info text-center">No products available</div>
    @endforelse
    </div>
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <div class="contact-content">
        <h2><span>Kontak</span> Kami</h2>
        <p>Hubungi kami jika ada pertanyaan dan saran agar menjadi lembaga yang baik dan profesional</p>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63248.01664774149!2d110.23474672167966!3d-7.789712899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af79f46cfb5d3%3A0x7d04aa44cbe7697f!2sGRIYA%20RUQYAH%20SYAR&#39;IYAH%20(GRS%20Jogja%20%26%20PAZ%20jogja)!5e0!3m2!1sen!2sid!4v1719331788359!5m2!1sen!2sid" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

  </section>
  <!-- Contact Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://www.instagram.com/abd_grsjogja"><i data-feather="instagram"></i></a>
      <a href="https://youtube.com/@abdrohman9444?feature=shared"><i data-feather="youtube"></i></a>
      <a href="https://wa.me/+6282325054448" class="whatsapp"><i class="bi bi-whatsapp"></i></a>

    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#contact">Kontak</a>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>
  <!-- resources/views/home.blade.php -->

@if(session('success'))
<script>
    window.onload = function() {
        alert("{{ session('success') }}");
    }
</script>
@endif
</body>

</html>
