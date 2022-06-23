@extends('layout.app')

@section('extra-css')
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{ asset('connexion/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('connexion/css/style.css') }}">
    {{-- <link href="{{ asset('assets/img/logoi.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logoi.png') }}" rel="apple-touch-icon"> --}}
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Inscrivez-vous</h2>
            <ol>
                <li><a href="/">Accueil</a></li>
                <li>Inscrivez-vous</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <div class="wrapper" style="background-image: url('{{ asset('images/bg-registration-form-2.jpg') }}');">
        <div class="inner">
            <form action="">
                <h3>Inscription</h3>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Prénom</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrapper">
                        <label for=""> Nom</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-wrapper">
                    <label for="">Confirmer le mot de passe</label>
                    <input type="password" class="form-control">
                </div>
                <!--<div class="checkbox">
                    <label>
                        <input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
                        <span class="checkmark"></span>


                    </label>

                </div>-->
                <p>Vous avez déja un compte?<a href="connexion.html">Connectez vous</a> .</p>

                <button>Inscrivez-vous</button>
            </form>
        </div>
    </div>
</main><!-- End #main -->
@endsection

