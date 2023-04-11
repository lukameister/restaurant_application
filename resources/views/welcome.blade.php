 @extends('layouts.guest')

    @section('content')
        <header class="restaurant">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Najbolji izbor domaće hrane! </h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Dostava se vrši na teritorijama opština Rakovice i Čukarice</p>
                        <p class="text-white-75 mb-5">Radno vreme od 09:00 do 00:00</p>
                        <x-order-button/><p class="text-white-75 mt-6">ili</p> <x-reservation-button/>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Dobrodošli u Restoran Brdo Uspomena!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Brdo Uspomena je počela kao porodična firma osnovana u februaru 2019.
                            godine. Četiri člana porodice u svakom trenutku insistira na kvalitetu i ljubaznosti.
                            Roštilj na ćumur, riblji specijaliteti i pice. Sve od svežih i kvalitetnih sirovina.</p>
                    </div>
                </div>
            </div>
        </section>
    @endsection
