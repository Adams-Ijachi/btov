<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <link rel="stylesheet" href="{{ asset('faq.css') }}" />
    <title>Common Problems</title>
</head>
<body>
<x-layout.nav />
<h1>COMMON PROBLEMS</h1>

<div class="accordion">
    <div class="accordion-item">
        <div class="accordion-item-header">Ear Infections</div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Dogs with floppy ears are prone to ear infections, which can cause
                discomfort and require treatment.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">Skin Allergies</div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Allergies to food or environmental factors can lead to itchy skin,
                rashes, and hot spots.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">Fleas and Ticks</div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                These parasites can infest a dog’s fur, leading to itching, skin
                irritation, and the transmission of diseases.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">Gastrointestinal Issues</div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Diarrhea, vomiting, and constipation can result from various causes,
                including dietary indiscretion and infections.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">Dental Problems</div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Dental disease, such as gum disease and tooth decay, is common and
                can affect a dog’s overall health.
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('problem.js') }} "></script>
</body>
</html>
