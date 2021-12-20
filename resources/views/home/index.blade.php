@extends('layout.default')

@section('page_title', 'DC HOME')

@section('content')
<div class="bg-color">

    <div class="row-col">
        <div class="jumbotron">
            <img src="{{ asset('img/jumbotron.jpg') }}" alt="">
        </div>
        {{-- <div class="comics-section">
            <div class="container">
                <div class="comics-container">
                    
                    <div class="current-series">
                        <h5>Current Series</h5>
                    </div>
                    <button>load more</button>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection