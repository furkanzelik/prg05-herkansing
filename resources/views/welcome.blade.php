@extends('layouts.layout')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.tegelsinhuis.nl/wp-content/uploads/2021/02/Vloertegel-Viter-marmer-grijs-90x90-gepolijst-gerectificeerd-TOZCV1096-2.jpg" class="d-block img-fluid" alt="tegels">
            </div>
            <div class="carousel-item">
                <img src="https://www.warmtebeheer.nl/media/catalog/category/Jaga_Tempo_Wand.jpg" class="d-block img-fluid" alt="radiator">
            </div>
            <div class="carousel-item">
                <img src="https://www.mondiaz.nl/resize/badkamermeubel_vica_carrara_moon_talc_set2_0079_13151264464069.jpg/500/500/True/vica-160cm-badmeubel-onderkast-carrara-4-lades-wastafel-moon-rechts-1-kraangat-kleur-talc-met-spiegel-led.jpg" class="d-block img-fluid" alt="badmeubel">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <br><br><br><br><br><br>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-md-5">
            <div class="card" style="width: 38rem;">
                <img src="https://www.tegels.nl/tegel/images/logo/644906693b900.jpg" class="card-img-top img-fluid mx-auto" alt="logo" style="max-width: 30%; height:30%;">
                <div class="card-body">
                    <h5 class="card-title">Radiatoren</h5>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card" style="width: 38rem;">
                <img src="https://www.tegels.nl/tegel/images/logo/644906693b900.jpg" class="card-img-top img-fluid mx-auto" alt="logo" style="max-width: 30%; height:30%;">
                <div class="card-body">
                    <h5 class="card-title">Tegels</h5>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card" style="width: 38rem;">
                <img src="https://www.tegels.nl/tegel/images/logo/644906693b900.jpg" class="card-img-top img-fluid mx-auto" alt="logo" style="max-width: 30%; height:30%;">
                <div class="card-body">
                    <h5 class="card-title">Bad Meubels</h5>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card" style="width: 38rem;">
                <img src="https://www.tegels.nl/tegel/images/logo/644906693b900.jpg" class="card-img-top img-fluid mx-auto" alt="logo" style="max-width: 30%; height:30%;">
                <div class="card-body">
                    <h5 class="card-title">Toiletten</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
