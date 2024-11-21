@extends('layouts.frontend')
@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.webp);">
        <div class="container position-relative">
            <h1>Prestasi</h1>
            {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                molestias.</p> --}}
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Prestasi</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            {{-- <h2>Starter Section</h2> --}}
            <p><span>Prestasi</span> </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            <p>Use this page as a starter for your own custom pages.</p>
        </div>

    </section><!-- /Starter Section Section -->
@endsection
