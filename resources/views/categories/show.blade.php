@extends('layouts.guest')

@section('content')
    <header class="about">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Služimo svežu i najukusniju hranu</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <x-order-button/><p class="text-white-75 mt-6">ili</p> <x-reservation-button/>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                @foreach($category->menus as $menu)
                    <div class="col-lg-4 col-sm-6 no-underline">
                        <a class="portfolio-box" href="{{ Storage::url($menu->image) }}" title="{{ $menu->name }}">
                            <img class="img-fluid" src="{{ Storage::url($menu->image) }}" alt="Image" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">{{ $menu->description }}</div>
                                <div class="project-name">{{ $menu->name }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

