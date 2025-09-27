@extends('layout.template')

@section('title', 'Selamat Datang')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

{{--tampilan awal--}}
    <div class="hero-wrap d-flex align-items-center justify-content-center" style="background-image: url('images/home/logo5.jpg'); background-size: cover; height: 100vh;filter: brightness(85%);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-md-10 text-md-left">
                    <h1 class="mb-8">Selamat Datang di <span style="color: #ff5722;"><strong>WORKNEST</strong></span>-Dini
                    <br><strong> Dari Kita Untuk<span style="color: #3822ff;"> Warga</span> Bantu Masa Depan Negara</strong></h1>
                    <h5 class="caps text-light">Aplikasi berbasis website untuk mencarikan pekerjaan</h5>
                    <a href="/login" class="btn btn-primary">Daftarkan Dirimu!</a>
                </div>
            </div>
        </div>
    </div>

<div class="hero-wrap d-flex align-items-center justify-content-center p-4" style="background-image: url('images/home/logo1.jpg'); background-size: cover; height: 80vh; filter: brightness(85%);">
    <div class="overlay"></div>
    <div class="container bg-info-subtle p-4 rounded">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white">
                <h2 class="mb-4"><strong> Mengapa Mencari Pekerjaan Di WorkNest.com</strong></h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card">
                    <img src="images/home/logo1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Profil & CV Generator</h5>
                        <p class="card-text">Buat profil sesuai dengan dibutuhkan recruiter dan buat jadi CV 1x klik</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/home/logo1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Status Lamaran</h5>
                        <p class="card-text">Pantau status lamaran terbaru Anda dari awal-akhir dengan mudah.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/home/logo1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Preferensi & Job Alert</h5>
                        <p class="card-text">Cari lowongan sesuai preferensi Anda dalam hitungan detik.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/home/logo1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Profile Matching</h5>
                        <p class="card-text">Dapatkan Informasi Lowongan yang cocok dengan profil Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="container bg-primary-subtle p-4 rounded">
    <h3 class="mb-2 text-center">Pekerjaan Paling Top</h3>
    <div class="row p-2">
        @foreach ($lokers as $loker)
        <div class="col-lg-4"> <!-- Set column width to 4 for each card -->
            <div class="card mb-3">
                <img src="/images/{{ $loker['foto_sampul'] }}" class="card-img-top" alt="..." style="height: 400px;"> <!-- Set a fixed height for the card image -->
                <div class="card-body">
                    <h5 class="card-title">{{ $loker['nama_loker'] }}</h5>
                    <p class="card-text">Gaji yang ditawarkan : Rp.{{ $loker['gaji'] }} Rupiah</p>
                    <p class="card-text">Open Recruitment : {{ $loker['deskripsi'] }}</p>
                    <a href="/loker/{{ $loker['id'] }}" class="btn btn-success">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center my-4">
        {{ $lokers->links('pagination::bootstrap-4', ['onEachSide' => 1]) }}
    </div> --}}


    {{--bagian footer--}}
<footer class="bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
	<div class="container bg-dark text-light">
		<div class="row mb-5">
				<div class="col-md pt-5">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2"><strong>About</strong></h2>
							<p>WORKNEST adalah platform berbasis website yang bertujuan untuk membantu
                                masyarakat dalam mencari pekerjaan, Worknest berasal dari bahasa latin yaitu Sarang Pekerjaan ini menandakan
                                website kami tempatnya mencari lowongan kerja Dengan tagline
                                "Dari Kita Untuk Warga, Bantu Masa Depan Negara".
                            </p>
								<ul class="footer-social list-unstyled float-md-left float-lft height: 20vh mb-2">
									<li class="footer-social">
                                        <i class="bi bi-instagram">
                                        <a href="https://www.instagram.com/nzipc1/" target="_blank">instagram<span
									    class="fa fa-instagram"></span></a></i>
                                    </li>

									<li class="footer-social">
                                        <i class="bi bi-facebook">
                                        <a href="#"target="_blank">Facebook<span
                                        class="fa fa-facebook"></span></a></i>
                                    </li>

									<li class="footer-social">
                                        <i class="bi bi-twitter-x">
                                        <a href="https://x.com/dam07256283?t=MwxpbqLlp-GkVC61EtCBUg&s=09" target="_blank">Twitter<span
										class="fa fa-twitter"></span></a></i>
                                    </li>
								</ul>
					</div>
                </div>
		    <div class="col-md pt-5 border-left">
				<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2"><strong>Perusahan tergabung</strong></h2>
								<ul class="list-unstyled">
									<li><a class="py-2 d-block">PT.Prima Indonesia</a></li>
									<li><a class="py-2 d-block">PT.Salindo</a></li>
									<li><a class="py-2 d-block">PT.Cinta Sejati</a></li>
									<li><a class="py-2 d-block">PT PLN (Persero)</a></li>
									<li><a class="py-2 d-block">PT Bank Rakyat Indonesia</a></li>
									<li><a class="py-2 d-block">PT Gudang Garam Tbk (GGRM)</a></li>
								</ul>
				</div>
			</div>
            <div class="col-md pt-5 border-left">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2 bg-info"><strong>Have a Questions?</strong></h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.755895578505!2d100.05730021067109!3d-0.32050889967498936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd50de4f97014f1%3A0x687fbd97e321901a!2sKedai%20Dini!5e0!3m2!1sid!2sid!4v1703685722447!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">Jl. Syekhhabdmanan, Lubuk Basung,
                                Kec. Lubuk Basung, Kabupaten Agam, Sumatera Barat 26452</span></li>
                            <li><a href="https://wa.me/62813000000?text=Ingin%20Melaporkan%20Masalah"><span
                                                                            class="icon fa fa-whatsapp"></span><span class="text">08130000000 Admin
                                                                            1</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                                                            class="text">worknest.dinik.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
	    </div>
</footer>



@endsection
