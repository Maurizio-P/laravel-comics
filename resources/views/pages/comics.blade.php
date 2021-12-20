@extends('layout.default')
@section('page_title', 'Comics')
@section('content')
<div class="bg-color">

    <div class="row-col">
        <div class="jumbotron">
            <img src="{{ asset('img/jumbotron.jpg') }}" alt="">
        </div>
        <div class="comics-section">
            <div class="container">
                <div class="comics-container">
                    {{-- card --}}
                   @foreach ($comics as $singleComics)
                   <div class="card-comics">
                    <div class="cover-comics">
                        <img src="{{ $singleComics['thumb']}}" alt="series">
                        <div class="overlay">
                            <h4>{{$singleComics['title']}}</h4>
                            <h5>{{$singleComics['price']}}</h5>
                        </div>
                    </div>
                        <h5>{{$singleComics['series']}}</h5>
                    </div>

                       
                   @endforeach
                    <div class="current-series">
                        <h5>Current Series</h5>
                    </div>
                    <button>load more</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
