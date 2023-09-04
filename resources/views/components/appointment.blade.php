<x-layout.home-layout>

    <!-- main container -->
    <main class="">
        <div class="overlay"></div>
        <form id="regForm" action="{{ route('book', $doctor->id) }}" method="post" class="form-design">
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
                            <select name="cars" id="gender">
                                <option value="">Gender</option>

                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <input placeholder="Name" name="name" type="text" class="input-box" />
                        </div>
                        <select name="breed" id="breed">
                            <option value="">Breed</option>

                            <option value="German Sheperd">German Sheperd</option>
                            <option value="Rotwailer">Rotwailer</option>
                        </select>
                        <div class="form-input">
                            <input
                                placeholder="Weight in kg"
                                type="number"
                                class="input-box"
                            />
                        </div>
                        <div class="form-input">
                            <input type="date" class="input-box" />
                            <small>Enter your best guest for the date of birth</small>
                        </div>
                        <button class="btn-add-pet">
                            <img src="./images/cross.png" alt="" />
                            Add another pet
                        </button>
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
                                    name="health_status"
                                    value="Yes"
                                />
                                  <label for="yes">Yes</label>
                            </div>
                        </div>
                        <div class="form-input">
                            <input
                                placeholder="Weight in kg"
                                type="number"
                                class="input-box"
                            />
                        </div>
                        <div class="form-input">
                            <div class="form-input-radio">
                                <input
                                    type="radio"
                                    id="html"
                                    class="radio"
                                    name="health_status"
                                    value="No"
                                />
                                  <label for="yes">No</label>
                            </div>
                        </div>
                        <div class="form-input">
                            <div class="form-input-radio unsure">
                                <input
                                    type="radio"
                                    id="html"
                                    class="radio"
                                    name="health_status"
                                    value="Unsure"
                                />
                                  <label for="unsure">Unsure</label>
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
                                    name="medication"
                                    value="Yes"
                                />
                                  <label for="yes">Yes</label>
                            </div>
                        </div>
                        <div class="form-input">
                            <input
                                placeholder="Weight in kg"
                                type="text"
                                class="input-box"
                            />
                        </div>
                        <div class="form-input">
                            <div class="form-input-radio">
                                <input
                                    type="radio"
                                    id="html"
                                    class="radio"
                                    name="medication"
                                    value="No"
                                />
                                  <label for="yes">Yes</label>
                            </div>
                        </div>
                        <div class="form-input">
                            <div class="form-input-radio unsure">
                                <input
                                    type="radio"
                                    id="html"
                                    class="radio"
                                    name="medication"
                                    value="Unsure"
                                />
                                  <label for="unsure">Unsure</label>
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
                                    name="examined"
                                    value="Yes"
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
                                    name="examined"
                                    value="No"
                                />
                                  <label for="yes">No</label>
                            </div>
                        </div>
                        <div class="form-input">
                            <div class="form-input-radio unsure">
                                <input
                                    type="radio"
                                    id="html"
                                    class="radio"
                                    name="examined"
                                    value="Unsure"
                                />
                                  <label for="unsure">Unsure</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- step 3 of the form -->
                <div class="tab">
                    <h3 class="pets">Tell us about yourself</h3>
                    <div class="pet-container">
                        <div class="form-input step-3">
                            <div class="form-box-container">
                                <div class="form-box">
                                    <div class="first-name">
                                        <label for="first_name">First Name</label>
                                        <input
                                            type="text"
                                            placeholder="Abraham"
                                            class="input-box"
                                            name=""
                                            id=""
                                        />
                                    </div>
                                    <div class="first-name">
                                        <label for="first_name">Last Name</label>
                                        <input
                                            type="text"
                                            placeholder="Abraham"
                                            class="input-box"
                                            name="last_name"
                                            id=""
                                        />
                                    </div>
                                </div>
                                <div class="form-input step-3">
                                    <label for="email">Email</label>
                                    <input placeholder="Name" type="text" class="input-box" />
                                </div>
                                <div class="form-input step-3">
                                    <label for="email">Phone Number</label>
                                    <input
                                        placeholder="08122233556"
                                        type="number"
                                        class="input-box"
                                    />
                                </div>
                                <div class="form-input step-3">
                                    <label for="email">Details </label>
                                    <input
                                        placeholder="details"
                                        type="text"
                                        class="input-box"
                                    />
                                </div>
                                <div class="form-input step-3">
                                    <label for="email">City</label>
                                    <input
                                        placeholder="Rayfield Jos"
                                        type="number"
                                        class="input-box"
                                    />
                                </div>
                                <div class="form-input step-3">
                                    <label for="email">State</label>
                                    <input
                                        placeholder="Plateau"
                                        type="number"
                                        class="input-box"
                                        name="state"
                                    />
                                </div>
                                <div class="form-input step-3">
                                    <label for="email">State</label>
                                    <input
                                        placeholder="12200"
                                        type="number"
                                        class="input-box"
                                        name="postal_code"
                                    />

                                </div>
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
                <div class="success">
                    <div class="success-img">
                        <img src="./images/success.png" alt="" />
                    </div>
                    <p class="text-success">success</p>
                    <button
                       type="submit"
                    >
                    </button>
                </div>
            </div>
        </form>
    </main>


    <!--End of main container -->
    <script src="https://use.fontawesome.com/8fe1b193ce.js"></script>
    <script src="{{ asset('toggle.js') }}"></script>
    <script src="{{ asset('appointment.js') }}"></script>
</x-layout.home-layout>
