@extends('layouts.app')
@section('content')
    <section class="section-hero">
        <!-- 1.  Now we need to make our hero section display grid and need to center the content in the page.

             2. To acheive that we need to create a div container inside of our section that contains all the text and img -->

        <div class="hero">
            <div class="hero-text-box">
                <h1 class="heading-primary">
                    Discover the Charm of the Art of Film
                </h1>
                <p class="hero-description">
                    Embark on an Extraordinary Cinematic Journey: Where Imagination Meets Reality, Stories Come Alive, and Emotions Take Flight.
                </p>
                <a href="#" class="btn btn--fill margin-right-btn">Go check our movies</a>
                <a href="#" class="btn btn--outline margin-right-btn">Contact us
                </a>
            </div>
            <div class="hero-img-box">
                <img src="/img/perchemiperdoinstecazzate.png"
                    alt="Con tutto l'esercizio che ho da fare ho inizato aprendo photoshop per fare sto obrobrio inutile, aiuto" class="hero-img" />
            </div>

        </div>
    </section>
@endsection
