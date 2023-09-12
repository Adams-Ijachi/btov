
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('signup.css') }}" />
    <title>sign up</title>
</head>
<body>
<x-layout.nav />
<main class="containner">
    <section class="containner-content">
        <article class="form-wrapper">


            <form action="{{ route('register') }}" method="post" class="form">
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
                <h5>Sign Up</h5>
                <h6>Create an account</h6>
                <div class="form-controle">
                    <div class="input-boxe">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" />
                    </div>
                    <div class="input-boxe">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" />
                    </div>
                </div>
                <div class="form-controller">
                    <div class="input-email">
                        <label for="email">email address</label>
                        <input type="email" name="email" />
                    </div>
                </div>
                <div class="form-controller">
                    <div class="input-email">
                        <label for="email">Contact</label>
                        <input type="text" name="contact" />
                    </div>
                </div>

                <div class="form-controle">
                    <div class="input-boxe">
                        <label for="">password</label>
                        <input type="password" id="password" name="password" />
                        <i class="bi bi-eye-slash eye-sign" id="togglePassword"></i>
                    </div>
                    <div class="input-boxe">
                        <label for="">repeat password</label>
                        <input type="password" id="repeat" name="password_confirmation" />
                        <i class="bi bi-eye-slash eye-sign" id="toggleRepeat"></i>
                    </div>
                </div>
                <button type="submit" class="btn-submit">create account</button>
                <p>
                    Already Have an Account?
                    <span><a href="{{ route('login') }}">Sign in</a></span>
                </p>
            </form>
        </article>
        <div class="background">
            <img src="{{ asset('images/man.png') }}" alt="" />
        </div>
        <button class="trusted trusted-signup">
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
    const toggleRepeat = document.querySelector('#toggleRepeat')
    const password = document.querySelector('#password')
    const repeat = document.querySelector('#repeat')
    togglePassword.addEventListener('click', () => {
        // Toggle the type attribute using
        // getAttribure() method
        const type =
            password.getAttribute('type') === 'password' ? 'text' : 'password'
        password.setAttribute('type', type)
        // Toggle the eye and bi-eye icon
        togglePassword.classList.toggle('bi-eye')
    })
    toggleRepeat.addEventListener('click', () => {
        // Toggle the type attribute using
        // getAttribure() method
        const type =
            repeat.getAttribute('type') === 'password' ? 'text' : 'password'
        repeat.setAttribute('type', type)
        // Toggle the eye and bi-eye icon
        toggleRepeat.classList.toggle('bi-eye')
    })
</script>
</body>
</html>
