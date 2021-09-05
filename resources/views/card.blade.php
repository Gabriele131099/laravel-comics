@extends('templates.base')
@section('title, card')
@section('main')
    <div>
        <div class="container">
            <img src="{{$comics[$id]['thumb'] }}" alt="copertina dc">
        </div>
        <div class="container">
            <div class="description-card">
                <h2 >{{$comics[$id]['series']}}</h2>
                <div > 
                    <span>{{$comics[$id]['price']}}</span>
                    <span>avaible</span>
                </div>
                <p >{{$comics[$id]['description']}}</p>
            </div>
            <div class="adv-banner"> 
                <img src="" alt="img pubblicità">
            </div>
        </div>
        <div class="table-description">

        </div>
    </div>
@endsection