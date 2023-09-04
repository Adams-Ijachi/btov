<x-layout.home-layout>
    <main class="containner">
        <section class="containner-content">
            <article class="form-wrapper">
                <!-- Form for backend -->
                <form action="{{ route('login') }}" method="post" class="form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @csrf

                    <p class="social">use social media to sign in</p>
                    <div class="social-box">
                        <a href=""><img src="{{ asset('images/mail.png') }}" alt="" /></a>
                        <a href=""><img src="{{ asset('images/facebook.png') }}" alt="" /></a>
                        <a href=""> <img src="{{ asset('images/instagram.png') }}" alt="" /></a>
                        <a href=""><img src="{{ asset('images/twitter-2.png') }}" alt="" /></a>
                    </div>
                    <p class="social">or</p>
                    <p class="social">Sign In</p>
                    <!-- input box for sign in  -->

                    <div class="form-controller">
                        <div class="input-email">
                            <label for="email">email address</label>
                            <input type="email" name="email" />
                        </div>
                    </div>
                    <div class="form-controller">
                        <div class="input-email">
                            <label for="password">password</label>
                            <input type="password" id="password" name="password" />
                            <i class="bi bi-eye-slash eye" id="togglePassword"></i>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">sign in</button>
                    <!-- input box for sign in  -->
                    <p>
                        Don't Have an Account?
                        <span><a href="{{ route('signup') }}">Sign up</a></span>
                    </p>
                </form>
                <!-- Form for backend -->
            </article>
            <div class="background">
                <img src="{{ asset('images/man.png') }}" alt="" />
            </div>
            <button class="trusted trusted-sign">
                <img src="{{ asset('images/check-circle.png') }}" alt="" />
                Trusted vet
            </button>
            <img class="twitter twitter-sign" src="{{ asset('images/twitter.png') }}" alt="" />
            <button class="online online-sign monitor">
                <img src="{{ asset('images/monitor.png') }}" alt="" />
                online assesment
            </button>
            <div class="rating rating-sign">
                <div class="rating-content">
                    <img src="{{ asset('images/adams.png') }}" alt="" />
                    <div>
                        <h4>
                            Adams Abraham
                            <span
                            ><img
                                    class="check-circle"
                                    src="{{ asset('images/check-circle-2.png') }}"
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

    <script>
        const togglePassword = document.querySelector('#togglePassword')
        const password = document.querySelector('#password')
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type =
                password.getAttribute('type') === 'password' ? 'text' : 'password'
            password.setAttribute('type', type)
            // Toggle the eye and bi-eye icon
            togglePassword.classList.toggle('bi-eye')
        })
    </script>

</x-layout.home-layout>
