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
                <div> 
                    <div style="background-color:lightgreen; border:1px solid black">
                        <span>U.S Price:{{$comics[$id]['price']}}</span>
                        <span> avaible</span>
                    </div>
                    <div style="background-color:lightgreen">
                        Check Availability
                    </div>
                </div>

                <p >{{$comics[$id]['description']}}</p>
            </div>
            <div class="adv-banner"> 
                <img src="{{$comics[$id]['thumb']}}" alt="img pubblicità">
            </div>
        </div>
        <div class="container">
            <ul>
                <li>Talent
                    <ul class="list">
                        <li>Art by:</li>
                        <li>
                            /** non fa */
                        
                        </li>
                    </ul>
                    <ul class="list">
                        <li>Written by:</li>
                        <li>
                        
                            /**non fa */

                        
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>Specs
                    <ul class="list">
                        <li>Series</li>
                        <li>{{$comics[$id]['series']}}</li>
                    </ul>
                    <ul class="list">
                        <li>U.S Price</li>
                        <li>{{$comics[$id]['price']}}</li>
                    </ul>
                    <ul class="list">
                        <li>On sala date</li>
                        <li>{{$comics[$id]['sale_date']}}</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endsection