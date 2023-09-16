<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <title>Home</title>
</head>
<body>
<x-layout.nav />
<main class="containner">
    <section class="containner-content">
        <article>
            <p class="title">CANINE CARE HUB</p>
            <h2 class="text-header">
                Dog Care <span><img src=" {{ asset('images/w9cvvmw7 1.png') }} " alt="" /></span>
            </h2>
            <h2>
                for today <br />
                Dog parents
            </h2>
            <p class="text">
                Video call a vet, book a house visit, get medications and home test
                kits - all from comfort of your own home.
            </p>
            <div class="btn-container">
                <a href="{{ route('signup') }}">get started </a>
                <button class="btn-play">
                    <img src="{{ asset('images/play-circle.png') }}" alt="" />
                    play video
                </button>
            </div>
        </article>

        <div class="background">
            <img src="{{ asset('images/man.png') }}" alt="" />
        </div>
        <button class="trusted">
            <img src="{{ asset('images/check-circle') }}.png" alt="" />
            Trusted vet
        </button>
        <img class="twitter" src="{{ asset('images/twitter.png') }}" alt="" />
        <button class="online">
            <img src="{{ asset('images/monitor.png') }}" alt="" />
            online assesment
        </button>
        <div class="rating">
            <div class="rating-content">
                <img src="{{ asset('images/adams.png') }}" alt="" />
                <div>
                    <h4>
                        Adams Abraham
                        <span
                        ><img
                                class="check-circle"
                                src="{{ asset('images/check-circle') }}-2.png"
                                alt=""
                            /></span>
                    </h4>

                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                </div>
            </div>
            <p class="best">“This is the best Vet I’ve ever come to”</p>
        </div>
    </section>
</main>
</body>
</html>


