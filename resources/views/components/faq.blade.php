<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <link rel="stylesheet" href="{{ asset('faq.css') }}" />
    <title>Document</title>
</head>
<body>
<x-layout.nav />

<h1>FAQ'S</h1>

<div class="accordion">
    <div class="accordion-item">
        <div class="accordion-item-header">
            When should I schedule my puppy’s first vet visit?
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Puppies should have their first vet visit at around 6-8 weeks of age
                for vaccinations and a general health check.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            What vaccinations does my dog need?
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                The required vaccinations can vary depending on factors like the
                dog’s age, location, and lifestyle. Common vaccines include those
                for rabies, distemper, and parvovirus.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            How can I prevent fleas and ticks on my dog?
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Veterinarians recommend various preventive products like topical
                treatments, collars, or oral medications.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            How can I maintain my dog’s dental health?
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Regular tooth brushing and dental check-ups can help. Some dogs may
                require dental cleanings under anesthesia.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            What signs should I watch for that indicate my dog is sick?
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Common signs of illness include changes in appetite, vomiting,
                diarrhea, coughing, or unusual behaviors. Always consult your vet if
                you’re concerned.
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('faq.js') }}"></script>
</body>
</html>
