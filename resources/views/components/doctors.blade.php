<x-layout.home-layout>


    <div class="input">
        <form action="{{ route('doctors.search') }}" style="flex-grow: 5" method="get">
            <input type="text" class="search" name="search" />

            <button class="search-btn">
                <img src="./images/search-2.png" alt="" />
            </button>
        </form>


        <button class="category-btn" style="flex-grow: 1">
            category <img src="./images/chevron-down.png" alt="" />


        </button>
        <div class="category-box">
            <div class="active-state">
                <img src="./images/ratings.png" alt="" />
                <a href="{{ route('doctors.order' , "order=rating") }}" class="ratings-scale">
                    <p>Ratings</p>
                    <p class="small">5 stars, 4 stars, 3 stars, 2 stars,...</p>
                </a>
            </div>
            <div>
                <img src="./images/trending-up.png" alt="" />
                <a href="{{ route('doctors.order' , "order=exp") }}" class="ratings-scale">
                    <p>Experience</p>
                    <p class="small">20+ years, 10+ years, 5+ years,...</p>
                </a>
            </div>
            <div>
                <img src="./images/map-pin.png" alt="" />
                <a href="{{ route('doctors.order' , "order=distance") }}" class="ratings-scale">
                    <p>Distance</p>
                    <p class="small">20km, 10km, 5km, 2km</p>
                </a>
            </div>
            <div>
                <img src="./images/dollar-sign.png" alt="" />
                <a href="{{ route('doctors.order' , "order=price") }}" class="ratings-scale">
                    <p>Price</p>
                    <p class="small">10 Vet Doctors</p>
                </a>
            </div>
        </div>


    </div>
    <!-- main section -->
    <main class="container">
        <div class="top">
            @php
                // get query string
                $query = request()->query('order');

                // check if query string is not empty
                if ($query) {
                    // check if query string is equal to rating
                    if ($query == 'rating') {
                        // set the title to rating
                        $title = 'Rating';
                    } elseif ($query == 'exp') {
                        // set the title to experience
                        $title = 'Experience';
                    } elseif ($query == 'distance') {
                        // set the title to distance
                        $title = 'Distance';
                    } elseif ($query == 'price') {
                        // set the title to price
                        $title = 'Price';
                    }
                } else {
                    // set the title to rating
                    $title = 'Rating';
                }
            @endphp
            <h3 class="doctor">
                {{ $title }}
            </h3>

            <div class="underline"></div>
            @if( $query == 'rating' )
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


            @endif
        </div>
        <div class="container-fluid" style="display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;">


            @forelse($doctors as $doctor)

{{--                <div class="">--}}
{{--                    <a  href="{{ route('doctors.details', $doctor->id) }}">--}}
{{--                        <img src="{{ $doctor->image }}" alt="" style="width: 100%" />--}}
{{--                        <div class="user-details">--}}
{{--                            <div class="book">--}}
{{--                                <div class="rate-stars">--}}
{{--                                    <img src="{{ asset('images/Star.png') }}" alt="" />--}}
{{--                                    <img src="{{ asset('images/Star.png') }}" alt="" />--}}
{{--                                    <img src="{{ asset('images/Star.png') }}" alt="" />--}}
{{--                                    <img src="{{ asset('images/Star.png') }}" alt="" />--}}
{{--                                    <img src="{{ asset('images/Star.png') }}" alt="" />--}}
{{--                                </div>--}}
{{--                                <a href="{{ route('appointment', $doctor->id) }}" class="books">--}}
{{--                                    book appointment <img src="./images/email.png" alt="" />--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <h4 class="doctor-name">{{ $doctor->name }}</h4>--}}
{{--                            <p>{{$doctor->experience}}+ years experience</p>--}}
{{--                            <div class="location">--}}
{{--                                <i class="fa fa-map-marker" aria-hidden="true"></i>--}}
{{--                                <p>{{ $doctor->location }}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

                <div class="card mr-4" style="width: 260px;">
                    <a  href="{{ route('doctors.details', $doctor->id) }}">
                        <img src="{{  $doctor->image  }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body" style="padding: 0;">
                        <div class="user-details" style="height: 100%">
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
                            <div>
                                <p> 	&#8358; {{ $doctor->price }}  </p>
                            </div>
                        </div>

                    </div>
                </div>

            @empty
                    <p>No doctors found</p>
            @endforelse



        </div>
    </main>
</x-layout.home-layout>
