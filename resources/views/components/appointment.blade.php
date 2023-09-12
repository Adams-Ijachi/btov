
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('signup.css') }}" />
    <link rel="stylesheet" href="{{ asset('signin.css') }}" />
    <link rel="stylesheet" href="{{ asset('user.css') }}" />
    <link rel="stylesheet" href="{{ asset('appointment.css') }}" />
    <link rel="stylesheet" href="{{ asset('user-details.css') }}" />

    <title>Appointment</title>
</head>
<body>
<x-layout.nav />

<!-- back button -->

<!-- main container -->
<main class="">
    <div class="overlay"></div>
    <form id="regForm" action="{{ route('book', $doctor->id )}}" method="POST" class="form-design">
        @csrf
        <div class="form-content">
            <section class="label-step">
                <div class="back-box">
                    <a class="back-btn" href="./user-details.html"
                    ><img src="./images/back.png" alt="" /> back</a
                    >
                </div>
                <div class="steps" style="text-align: center">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <!-- <span class="step"></span> -->
                </div>
            </section>
            <!-- step One "tab" for each step in the form: -->
            <div class="tab">
                <h3 class="pets">Tell me about your pets</h3>
                <div class="pet-container">
                    <div class="pet-box">
                        <!-- <img src="./images/doctor.png" alt="" /> -->
                        <label for="">
                            <!-- <i class="fa fa-camera" aria-hidden="true"> -->
                            <input type="file" id="file" />
                        </label>
                    </div>
                    <div class="gender">
                        <!-- <label for="cars">Gender</label> -->
                        <select name="gender" id="gender">
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <input placeholder="Name"  name="name" type="text" class="input-box" />
                    </div>
                    <div class="form-input">
                        <input placeholder="Breed" name="breed" type="text" class="input-box" />
                    </div>

                    <div class="form-input">
                        <input
                            placeholder="Weight in kg"
                            type="number"
                            class="input-box"
                            name="weight"
                        />
                    </div>
                    <div class="form-input">
                        <input type="date" class="input-box" name="dob" />

                        <small>Enter your best guess for the date of birth</small>
                    </div>

                </div>
            </div>
            <!-- step 2 of the form -->
            <div class="tab">
                <h3 class="pets">Your pet's current health</h3>
                <div class="pet-container">
                    <p class="question">
                        Has your pet had any surgeries in the past?
                    </p>
                    <div class="form-input">
                        <div class="form-input-radio">
                            <input
                                type="radio"
                                id="html"
                                class="radio"
                                name="had_surgery"
                                value="1"
                            />
                              <label for="yes">Yes</label>
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="form-input-radio">
                            <input
                                type="radio"
                                id="html"
                                class="radio"
                                name="had_surgery"
                                value="0"
                            />
                              <label for="yes">No</label>
                        </div>
                    </div>

                    <!-- <br /> -->
                    <p class="question medication">
                        Does your pet currently take any medication(s)?
                    </p>
                    <div class="form-input">
                        <div class="form-input-radio">
                            <input
                                type="radio"
                                id="html"
                                class="radio"
                                name="had_medications"
                                value="1"
                            />
                              <label for="yes">Yes</label>
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="form-input-radio">
                            <input
                                type="radio"
                                id="html"
                                class="radio"
                                name="had_medications"
                                value="0"
                            />
                              <label for="No">No</label>
                        </div>
                    </div>

                    <div class="form-input question-tag">
                        <p class="question medication">
                            Has your pet been examined by a veterinarian in the last 12
                            months?
                        </p>
                    </div>
                    <div class="form-input">
                        <div class="form-input-radio">
                            <input
                                type="radio"
                                id="html"
                                class="radio"
                                name="had_examinations"
                                value="1"
                            />
                              <label for="yes">Yes</label>
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="form-input-radio">
                            <input
                                type="radio"
                                id="html"
                                class="radio"
                                name="had_examinations"
                                value="0"
                            />
                              <label for="yes">No</label>
                        </div>
                    </div>

                </div>
            </div>
            <!-- step 3 of the form -->
            <div class="tab">
                <h3 class="pets">Provide Details</h3>
                <div class="pet-container">
                    <div class="form-input step-3">
                        <div class="form-box-container">
                            <div class="form-box">
                                <div class="first-name">
                                    <label for="first_name">Details</label>
                                    <textarea name="details"  rows="5">

                                    </textarea>
                                </div>
                            </div>
{{--                            <div class="form-input step-3">--}}
{{--                                <label for="email">Email</label>--}}
{{--                                <input placeholder="Name" type="text" class="input-box" />--}}
{{--                            </div>--}}
{{--                            <div class="form-input step-3">--}}
{{--                                <label for="email">Phone Number</label>--}}
{{--                                <input--}}
{{--                                    placeholder="08122233556"--}}
{{--                                    type="number"--}}
{{--                                    class="input-box"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="form-input step-3">--}}
{{--                                <label for="email">Address</label>--}}
{{--                                <input--}}
{{--                                    placeholder="Rayfield Jos"--}}
{{--                                    type="text"--}}
{{--                                    class="input-box"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="form-input step-3">--}}
{{--                                <label for="city">City</label>--}}
{{--                                <input--}}
{{--                                    placeholder="Rayfield Jos"--}}
{{--                                    type="text"--}}
{{--                                    class="input-box"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="form-input step-3">--}}
{{--                                <label for="state">State</label>--}}
{{--                                <input--}}
{{--                                    placeholder="Plateau"--}}
{{--                                    type="text"--}}
{{--                                    class="input-box"--}}
{{--                                    name="state"--}}
{{--                                />--}}
{{--                            </div>--}}
{{--                            <div class="form-input step-3">--}}
{{--                                <label for="email">Postal Code</label>--}}
{{--                                <input--}}
{{--                                    placeholder="12200"--}}
{{--                                    type="number"--}}
{{--                                    class="input-box"--}}
{{--                                    name="postal_code"--}}
{{--                                />--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div style="float: right">
                <button
                    class="prev-btn"
                    type="button"
                    id="prevBtn"
                    onclick="nextPrev(-1)"
                >
                    Previous
                </button>
                <div class="btn-container">
                    <button
                        class="next-btn"
                        type="button"
                        id="nextBtn"
                        onclick="nextPrev(1)"
                    >
                        Next
                    </button>
                </div>
                </div>
            </div>
            <div class="success">
                <div class="success-img">
                    <img src="./images/success.png" alt="" />
                </div>
                <p class="text-success">success</p>
                <a href="./index.html" class="success-btn"> ok </a>
            </div>
        </div>
    </form>
</main>
<!--End of main container -->
<script src="https://use.fontawesome.com/8fe1b193ce.js"></script>
<script src="{{ asset('toggle.js') }}"></script>
<script src="{{ asset('appointment.js') }}"></script>
</body>
</html>

