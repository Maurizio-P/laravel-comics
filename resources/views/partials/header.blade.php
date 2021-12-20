@php
     $linkNav = [
                [
                    "linkText" => "Characters",
                    "href" => "/"
                ],
                [
                    "linkText" => "Comics",
                    "href" => "/comics"
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
            ]
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
                    <a href="{{ $link['href'] }}" class="nav-link">{{$link['linkText']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>