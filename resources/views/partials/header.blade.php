@php
     $linkNav = [
                [
                    "linkText" => "Characters",
                    "href" => "/"
                ],
                [
                    "linkText" => "Comics",
                    "href" => "comics"
                ],
                [
                    "linkText" => "Movies",
                    "href" => "#"
                ],
                [
                    "linkText" => "TV",
                    "href" => "#"
                ],
                [
                    "linkText" => "Games",
                    "href" => "#"
                ],
                [
                    "linkText" => "Collectibles",
                    "href" => "#"
                ],
                [
                    "linkText" => "Videos",
                    "href" => "#"
                ],
                [
                    "linkText" => "Fans",
                    "href" => "#"
                ],
                [
                    "linkText" => "News",
                    "href" => "#"
                ],
                [
                    "linkText" => "Shop",
                    "href" => "#"
                ],
];

$urlName = Request::route()->getName();
@endphp

<header>
    <nav class="navbar">
        <div class="container">

            <a href="" class="navbar-brand">
                <img src='{{ asset('/img/dc-logo.png') }}' alt="">
            </a>
            <ul class="navbar-nav">
                @foreach ($linkNav as $link)
                <li class="nav-item">
                    @php
                       $myPage = $link["href"];
                       $active = strpos($urlName, $myPage) === 0;
                    @endphp
                    <a href="{{ $link['href'] }}" class="nav-link {{ $active ? 'active' : "" }}">{{$link['linkText']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>

        <div class="jumbotron">
            <img src="{{ asset('img/jumbotron.jpg') }}" alt="">
        </div>
</header>