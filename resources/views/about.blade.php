@extends('layout.template')

@section('title', 'About')

@section('content')
	<div class="hero-wrap hero-wrap-2 js-fullheight " >
					<div class="overlay"></div>
			<div class="container bg-dark-subtle">
				<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
					<div class="col-md-9 ftco-animate pb-5">
						<h1 class="mb-0 bread text-center "><strong>About Us</strong></h1>
					</div>
				</div>
	        </div>
				</div>

				<div class="ftco-section ftco-about ftco-no-pt img">
								<div class="container">
									<div class="row d-flex">
										<div class="col-md-12 about-intro">
											<div class="row">
												<div class="col-md-6 d-flex align-items-stretch">
													<div class="img d-flex w-100 align-items-center justify-content-center md-3"
														style="background-image:url(images/home/kerja.jpg);">
													</div>
												</div>
					<div class="col-md-6 pl-md-2 py-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section">
								<span class="subheading">Tentang kami</span>
								<h2 class="mb-4">WorkNest-Dini</h2>
								<p>WORKNEST adalah platform berbasis website yang bertujuan untuk membantu
                                masyarakat dalam mencari pekerjaan, Worknest berasal dari bahasa latin yaitu Sarang Pekerjaan ini menandakan
                                website kami tempatnya mencari lowongan kerja Dengan tagline
                                "Dari Kita Untuk Warga, Bantu Masa Depan Negara".
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</div>
</div>

<div class="ftco-section testimony-section bg-bottom">
    <div class="overlay"></div>
<div class="container bg-dark-subtle">
    <div class="row justify-content-center pb-4">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Tim Kita</span>
            <h2 class="mb-4">Our Team</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
        <div class="col-lg-5 mb-5">
            <div class="card shadow" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/images/home/dini.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Developer-pengembang</h5>
                            <p class="card-text">Saya Dini sebagai pengembang website ini, agar bisa digunakan sesuai kebutuhan
                                pengguna dan harapan saya website ini bisa berguna sebaik-baiknya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="card shadow" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Designer-perancang</h5>
                            <p class="card-text">Saya Dini sebagai perancang website ini, agar bisa digunakan sesuai kebutuhan
                                pengguna dan harapan saya website ini bisa berguna sebaik-baiknya.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="/images/home/dini.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
