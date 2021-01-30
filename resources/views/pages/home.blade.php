@extends('layouts.app')

@section('title')
Traveefour
@endsection

@section('content')
<!-- HEADER -->
<header class="text-center">
    <h1>Explore the Beautiful World <br> As Easy One Click</h1>
    <p class="mt-3">You will see beautiful <br> moment you never see before</p>
    <a href="#" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<!-- Content Main -->
<main>
    <div class="container">
        <!-- STATISTICS -->
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <!-- DESTINATIONS -->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Popular Destination</h2>
                    <p>Something that you never try <br>
                        before in this world</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:
                         linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)),
                         url('frontend/images/popular-1.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">DERATAN, BALI</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:
                         linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)),
                         url('frontend/images/popular-2.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">BROMO, JATIM</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:
                         linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)),
                         url('frontend/images/popular-3.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">SUMBA, NTT</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:
                         linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)),
                         url('frontend/images/popular-4.jpg');">
                        <div class="travel-country">INDONESIA</div>
                        <div class="travel-location">KARIMUN, JATENG</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NETWORK -->
    <section class="section-networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies are trusted us <br>
                        more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/Logos_partner.png" alt="Logo Partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They're Loving US</h2>
                    <p>Moments were giving them <br>
                        the best experience</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Irene Strong</h3>
                            <p class="testimonial">
                                "It was glorious and I could
                                not stop to say wohooo for
                                every single moment
                                Dankeeeeee"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Bromo
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Elijah M. Henderson</h3>
                            <p class="testimonial">
                                "an extraordinary
                                sight that I have never
                                met before."
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Sumba
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-3.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Stefan</h3>
                            <p class="testimonial">
                                "I was amazed by
                                the scenery in Karimun
                                Jawa. A memorable
                                vacation for me"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Karimun Jawa
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
