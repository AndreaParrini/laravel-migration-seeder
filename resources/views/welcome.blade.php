@extends('layouts.app')

@section('PageTitle', 'Home Page')

@section('content')
    <div class="container text-light">
        <div class="row">
            @forelse ($trainsOfTheDay as $train)
                <div class="col-4">
                    {{ $train->company }}
                </div>
            @empty
                <div class="col">
                    Non ci sono Treni in partezza per la data odierna
                </div>
            @endforelse

        </div>
    </div>
@endsection
