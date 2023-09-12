<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />


    <link rel="stylesheet" href="{{ asset('contact.css') }}" />
    <title>Contact Us</title>
</head>
<body>
<x-layout.nav />

<!-- main container  -->

<main>
    <section class="form-section">
        <div class="overlay"></div>
        <form action="" class="form-sec">
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <textarea
                placeholder="message"
                name=""
                id=""
                cols="30"
                rows="10"
            ></textarea>
            <button type="button" id="contactForm">Submit</button>
        </form>
    </section>
    <div class="success">
        <div class="success-img">
            <img src="./images/success.png" alt="" />
        </div>
        <p class="text-success">success</p>
        <a href="./index.html" class="success-btn"> ok </a>
    </div>
</main>
<script src="./contact.js"></script>
</body>
</html>
