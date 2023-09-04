<x-layout.home-layout>


    <div class="input">
        <input type="text" class="search" />
        <button class="search-btn">
            <img src="./images/search-2.png" alt="" />
        </button>
        <button class="category-btn">
            category <img src="./images/chevron-down.png" alt="" />
        </button>
        <div class="category-box">
            <div class="active-state">
                <img src="./images/ratings.png" alt="" />
                <a href="./ratings.html" class="ratings-scale">
                    <p>Ratings</p>
                    <p class="small">5 stars, 4 stars, 3 stars, 2 stars,...</p>
                </a>
            </div>
            <div>
                <img src="./images/trending-up.png" alt="" />
                <a href="./experience.html" class="ratings-scale">
                    <p>Experience</p>
                    <p class="small">20+ years, 10+ years, 5+ years,...</p>
                </a>
            </div>
            <div>
                <img src="./images/map-pin.png" alt="" />
                <a href="./distance.html" class="ratings-scale">
                    <p>Distance</p>
                    <p class="small">20km, 10km, 5km, 2km</p>
                </a>
            </div>
            <div>
                <img src="./images/dollar-sign.png" alt="" />
                <a href="./price.html" class="ratings-scale">
                    <p>Price</p>
                    <p class="small">10 Vet Doctors</p>
                </a>
            </div>
        </div>
    </div>
    <!-- main section -->
    <main class="container">
        <div class="top">
            <h3 class="doctor">Ratings</h3>

            <div class="underline"></div>
            <div class="five">
                <p>5 starts</p>
                <div class="rate-stars">
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                    <img src="{{ asset('images/Star.png') }}" alt="" />
                </div>
            </div>
        </div>
        <div class="" style="
    display: grid;
    gap: 2rem;
    width: 100%;
    align-items: stretch;
    grid-template-columns: repeat(5, 200px);
">

            @foreach($doctors as $doctor)

                <div class="user-info">
                    <a  href="{{ route('doctors.details', $doctor->id) }}">
                        <img src="{{ $doctor->image }}" alt="" style="width: 100%" />
                        <div class="user-details">
                            <div class="book">
                                <div class="rate-stars">
                                    <img src="{{ asset('images/Star.png') }}" alt="" />
                                    <img src="{{ asset('images/Star.png') }}" alt="" />
                                    <img src="{{ asset('images/Star.png') }}" alt="" />
                                    <img src="{{ asset('images/Star.png') }}" alt="" />
                                    <img src="{{ asset('images/Star.png') }}" alt="" />
                                </div>
                                <a href="{{ route('appointment', $doctor->id) }}" class="books">
                                    book appointment <img src="./images/email.png" alt="" />
                                </a>
                            </div>
                            <h4 class="doctor-name">{{ $doctor->name }}</h4>
                            <p>{{$doctor->experience}}+ years experience</p>
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p>{{ $doctor->location }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </main>
</x-layout.home-layout>
