
        @extends('templates.base')

        @section('title', 'HomePage')

        @section('main')
        <div class="jumbotron">
            <div class="container">
                <div class="banner">

                    CURRENT SERIES

                </div>
            </div>
        </div>

       <div class="container-index">
       <div class="container-cards">
            @foreach($comics as $card)
            <div class="card">

                <img src="{{$card['thumb']}}" alt="">
                <div class="title">{{$card['series']}}</div>
                
            </div>
            
            @endforeach
        </div>
       </div>
        @endsection
