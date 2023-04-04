@extends('layouts.guest')

@section('content')
    <header class="menu">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Menus</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5"></p>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section bg-dark">
        <div class="container px-lg-5">
            @foreach($categories as $category)
                <div><h3 class="border-bottom text-center text-white">{{ $category->name }}</h3>
                    @foreach($category->menus as $menu)
                        <div class="my-0 py-0">
                            <span class="text-lg text-white my-0 py-0">{{ $menu->name }}</span> <span class="text-center text-white">{{ $menu->price }} RSD</span>
                            <div class="text-xs text-white-50 mb-2">( {{ $menu->description }} )</div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>


@endsection
