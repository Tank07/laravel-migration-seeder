@extends('layout.layout')

@section('title', 'Trains')

@section('content')

        @forelse ($trains as $key => $train)
            
                        <h3 >{{ $train->azienda }}</h3>
                        <p >{{ $train->stazione_di_partenza }}</p>
                        <p >{{ $train->orario_di_arrivo }}</p>
                        <p >{{ $train->numero_carrozze }}</p>     
                        <p >{{ $train->cancellato }}</p>                   
             
        @empty
            <p>Array vuoto</p>
        @endforelse

@endsection