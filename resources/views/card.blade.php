@extends('templates.base')
@section('title, card')
@section('main')
    <div>
    <div class="jumbotron">
            <div class="container">
                <div class="thumb-banner">
                    <div>
                        <div>COMIC BOOK</div>
                        <img src="{{$comics[$id]['thumb']}}" alt="copertina dc">
                        <div>VIEW GALLERY</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-blue">
    </div>
        <div class="container">
            <div class="description-card">
                <h2 >{{$comics[$id]['title']}}</h2>
                <div class="table" >
                    <div class="verde textTableFirst">
                        <div>U.S Price: <span class="saleText">{{$comics[$id]['price']}}</span></div>
                        <div>AVAIBLE</div>
                    </div>
                    <div class="verde textTableSecond">
                        Check Availability
                    </div>
                </div>

                <p >{{$comics[$id]['description']}}</p>
            </div>
            <div class="adv-banner"> 
                <img src="{{$comics[$id]['thumb']}}" alt="img pubblicità">
            </div>
        </div>
        <div style="background-color:lightgrey">
        <div class="container list-table">
            <ul>
                <li><div>Talent</div>
                    <hr>
                    <ul>
                        <li class="titleTable">Art-by:</li>
                        <li class="textArtists">
                           @foreach($comics[$id]['artists'] as $comicArtist)
                            {{$comicArtist}} ,
                           @endforeach 
                        </li>
                    </ul>
                    <ul>
                        <li class="titleTable">Written by:</li>
                        <li class="textWriters">
                        
                        @foreach($comics[$id]['writers'] as $comicWriter)
                            {{$comicWriter}} ,
                           @endforeach 

                        
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><div>Specs</div>
                    <hr>
                    <ul class="titleTable">
                        <li class="titleTable">Series</li>
                        <li>{{$comics[$id]['series']}}</li>
                    </ul>
                    <ul class="titleTable">
                        <li class="titleTable">U.S Price</li>
                        <li>{{$comics[$id]['price']}}</li>
                    </ul>
                    <ul class="titleTable">
                        <li class="titleTable">On sala date</li>
                        <li>{{$comics[$id]['sale_date']}}</li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </div>
@endsection