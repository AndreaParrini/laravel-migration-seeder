@extends('layouts.app')

@section('PageTitle', 'All Train')

@section('content')
    <section id="section_main" class="p-5">
        <div class="container text-light">
            <h3 class="text-center">Tutti i treni</h3>
            <div class=" mb-3 mt-3">
                <a class="text-decoration-none text-light" href="{{ Route('alltrains') }}">Visualizza tutti i treni</a>
            </div>
            <div class="row gap-4">
                @forelse ($allTrains as $train)
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body {{ $train->isCancelled ? 'text-decoration-line-through' : '' }}">
                                <h5 class="card-title text-center">{{ $train->company }} {{ $train->train_code }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted text-center">{{ $train->type_of_trains }}</h6>
                                @if ($train->isCancelled)
                                    <div class="text-center">
                                        <span class="badge bg-danger text-center">Cancellato</span>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-between align-items-center m-2">
                                    <div class="w-25">
                                        <h6 class="fw-bold">Stazione di Partenza: {{ $train->departure_station }}</h6>
                                        <span>{{ date('d-m-Y', strtotime($train->departure_time)) }} alle
                                            <span
                                                class="fw-bold fs-5">{{ date('H:m', strtotime($train->departure_time)) }}</span>
                                        </span>
                                        <div>
                                            <span class="badge bg-info">Binario: {{ $train->strating_platform }}</span>
                                        </div>


                                    </div>
                                    <div class="d-flex flex-column gap-4 align-items-center">
                                        <i class="fa-solid fa-arrow-right fa-2xl" style="color: #000000;"></i>
                                        <div class="badge bg-primary">{{ $train->price }} €</div>
                                    </div>
                                    <div class="w-25">
                                        <h6 class="fw-bold">Stazione di Arrivo: {{ $train->arrival_station }}</h6>
                                        <span>{{ date('d-m-Y', strtotime($train->arrival_time)) }} alle
                                            <span
                                                class="fw-bold fs-5">{{ date('H:m', strtotime($train->arrival_time)) }}</span>
                                        </span>
                                        <div>
                                            <span class="badge bg-info">Binario: {{ $train->arrival_platform }}</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @empty
                    <div class="col">
                        Non ci sono Treni in partezza per la data odierna
                    </div>
                @endforelse

            </div>
        </div>
    </section>

@endsection
