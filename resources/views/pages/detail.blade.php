@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Travel Package
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Bromo, Jatim</h1>
                        <p>Republic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/d1.jpg" class="xzoom" id="main_image"
                                    xoriginal="frontend/images/d1.jpg" width="100">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/d1.jpg">
                                    <img src="frontend/images/d1.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/d1.jpg">
                                </a>
                                <a href="frontend/images/d2.jpg">
                                    <img src="frontend/images/d2.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/d2.jpg">
                                </a>
                                <a href="frontend/images/d3.jpg">
                                    <img src="frontend/images/d3.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/d3.jpg">
                                </a>
                                <a href="frontend/images/d4.jpg">
                                    <img src="frontend/images/d4.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/d4.jpg">
                                </a>
                                <a href="frontend/images/d5.jpg">
                                    <img src="frontend/images/d5.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/d5.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>About Destination</h2>
                        <p>Mount Bromo (Indonesian: Gunung Bromo), is an active volcano and part of the Tengger
                            massif, in East Java, Indonesia. At 2,329 meters (7,641 ft) it is not the highest peak
                            of the
                            massif, but is the best known. The massif area is one of the most visited tourist
                            attractions
                            in East Java, Indonesia.</p>
                        <p>The volcano belongs to the Bromo Tengger Semeru National Park. The name of Bromo
                            derived from Javanese pronunciation of Brahma, the Hindu creator god.</p>
                        <div class="features row">
                            <div class="col-md-4 border-end">
                                <img src="frontend/images/ic_event.png" alt="icon event" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Upacara Kasodo</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-end">
                                <img src="frontend/images/ic_language.png" alt="icon language" class="features-image">
                                <h3>Language</h3>
                                <p>Bahasa Indonesis</p>
                            </div>
                            <div class="col-md-4">
                                <img src="frontend/images/ic_food.png" alt="icon foods" class="features-image">
                                <h3>Foods</h3>
                                <p>Local Foods</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="member my-2">
                            <img src="/frontend/images/m1.png" class="member-image">
                            <img src="/frontend/images/m2.png" class="member-image">
                            <img src="/frontend/images/m3.png" class="member-image">
                            <img src="/frontend/images/m4.png" class="member-image">
                            <img src="/frontend/images/m5.png" class="member-image">
                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">1 Feb, 2021</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type of Trip</th>
                                <td width="50%" class="text-right">Open Public</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$80,00/person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
</script>
@endpush
