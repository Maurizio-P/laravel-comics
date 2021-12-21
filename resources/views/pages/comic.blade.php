@extends('layout.default')
@section('page_title', 'Comics')

@section('content')
    {{-- <h1>{{$comic["title"]}}</h1> --}}
    {{-- @php
        dump($comic)
    @endphp --}}
    <div class="bg-blue">
        <div class="container">
            <div class="img-container">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
        </div>
    </div>
    <section class="white-section">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="title-comic">{{$comic['title']}}</h1>
                    <div class="cart">
                        <div class="row">
                            <div class="col-8">
                                <div class="container-price">
                                    <div class="price">
                                        <h6>U.S. Price:</h6>
                                        <h6>{{$comic['price']}}</h6>
                                    </div>
                                    <div class="available">
                                        <h6>available</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <h6>Check available</h6>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>{{$comic['description']}}</p>
                    </div>
                </div>
                <div class="col-4">
                    <img src={{ asset('img/adv.jpg') }} alt="">
                </div>
            </div>

        </div>
    </section>

    <section class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3>Talent</h3>
                    <div class="artist">
                        <h5>
                            Art by: 
                        </h5>
                        <div class="list-art">
                            @foreach ($comic['artists'] as $artist)
                                <a href="#">{{$artist}},</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="written">
                        <h5>
                            Written by:
                        </h5>
                        <div class="listen-written">
                            @foreach ($comic['writers'] as $writer)
                                <a href="#">{{$writer}},</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <h3>Specs</h3>
                    <div class="series">
                        <h5>
                            Series:
                        </h5>
                        <div class="series-comic">
                            <h5><a href="">{{$comic['series']}}</a></h5>
                        </div>
                    </div>
                    <div class="prices">
                        <h5>
                            U.S. Price:
                        </h5>
                        <div class="price-comic">
                            <h5><a href="">{{$comic['price']}}</a></h5>
                        </div>
                    </div>
                    <div class="date">
                        <h5>
                            On sale date:
                        </h5>
                        <div class="date-comic">
                            <h5><a href="">{{$comic['sale_date']}}</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection