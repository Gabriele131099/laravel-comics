
        @extends('templates.base')

        @section('title', 'HomePage')
       
        
        @section('main')
        
        
        <div class="container-index">
            <div class="container-cards">
                @foreach($comics as $card)
                <div class="card">
                <a href="/card/{{ $loop->index }}"> <!-- con loop possiamo far si che ci ritorni un certo tipo di dato in questo caso un index che inviamo alla single card -->
                    <img src="{{$card['thumb']}}" alt="">
                    <div class="title">
                        {{$card['series']}}
                    </div>
                    </a>
                </div>
                
                @endforeach 
            </div>
        </div>
        @include('templates.bannerShop')
        @endsection
