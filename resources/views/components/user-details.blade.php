<x-layout.home-layout>
    <div class="back">
        <a class="back-btn" href="{{ route('doctors') }}"
        ><img src="{{ asset('images/back.png') }}" alt="" /> back</a
        >
    </div>
    <!-- main container -->
    <main class="container-items">
        <div class="image" style="width: 50%">
            <img src="{{ $doctor->image }}" alt="" style="width: 50%" />
        </div>
        <article class="details">
            <h4 class="doc-name">{{ $doctor->name }}</h4>
            <div class="info">
                <img src="./images/trending-up.png" alt="" />
                <p>{{ $doctor->experience }}+ years experience</p>
            </div>
            <div class="info">
                <img src="./images/map-pin.png" alt="" />
                <p>{{ $doctor->location }}</p>
            </div>
            <div class="rate-stars">
                <img src="./images/Star.png" alt="" />
                <img src="./images/Star.png" alt="" />
                <img src="./images/Star.png" alt="" />
                <img src="./images/Star.png" alt="" />
                <img src="./images/Star.png" alt="" />
            </div>
            <div class="time">
                <div class="active-hours">
                    <img src="./images/clock.png" alt="" />
                    <p>Active Hours <span>10am - 5pm</span></p>
                </div>
                <div class="active-hours">
                    <img src="./images/dollar-sign.png" alt="" />
                    <p>Vet Charges <span>{{$doctor->price}}k</span></p>
                </div>
            </div>
            <p>
                Dr. David Oguche is a dedicated and compassionate veterinarian, known
                for her exceptional skills and deep love for animals. Born and raised
                in a small town, he developed a strong bond with animals from a young
                age, which fueled his passion for veterinary medicine.
            </p>
            <p>
                His commitment to continuous learning and staying up-to-date with the
                latest advancements in veterinary science ensures that his patients
                receive the best possible care.
            </p>
            <p>
                With over a decade of experience in the field, Dr. D. Oguche has
                treated a wide range of animals, from domestic pets to wildlife. His
                calm demeanor and ability to connect with both animals and their
                owners have earned his the trust of the local community and beyond.
            </p>
            <a href="{{ route('appointment', $doctor->id) }}" class="appointment">
                Book Appointment <img src="./images/email.png" alt="" />
            </a>
        </article>
    </main>
</x-layout.home-layout>
