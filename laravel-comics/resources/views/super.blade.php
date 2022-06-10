@extends('parts.skelly')

@section('content')
<main class="super">
    <div class="jumbo"></div>
    @foreach ($comics as $comic)
        @if ($loop -> first)
            <div class="sep">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <div class="top">
            <div class="desc">
                <h2>{{$comic['title']}}</h2>
                <div class="diff">
                    <div>
                        <p class="green"><span>U.S. price: </span> {{$comic['price']}}</p>
                        <p class="text-diff"><span>Available</span></p>
                    </div>
                    <p>Check Availability</p>
                </div>
                <p class="story">{{$comic['description']}}</p>
                </div>
                <div class="right">
                    <p class="top-img">advertisement</p>
                    <img src="/img/adv.jpg" alt="">  
                </div>
            </div>
            <div class="plus flexer-big">
                <div class="width-diff">
                    <h3>Talent</h3>
                    <div>
                        <div class="divider">
                            <p>Art By:</p>
                            <p class="width-diff-two">
                                @foreach ($comic['artists'] as $draw)
                                    <span><a href="">{{$draw}}</a>,</span>
                                @endforeach
                            </p>
                        </div>
                        <div class="divider">
                            <p>Written By:</p>
                            <p class="width-diff-two">
                                @foreach ($comic['writers'] as $write)
                                    <span><a href="">{{$write}}</a>,</span>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="width-diff">
                    <h3>Specs</h3>
                    <div>
                        <div class="divider padding-diff">
                            <p>Series:</p>
                            <p><span><a href="">{{$comic['series']}}</a></span></p>
                        </div>
                        <div class="divider padding-diff">
                            <p>U.S. Price:</p>
                            <p>{{$comic['price']}}</p>
                        </div>
                        <div class="divider padding-diff">
                            <p>On Sale Date:</p>
                            <p>{{$comic['sale_date']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    <div class="info">
      <ul>
        @foreach ($menu as $button)
            <li>
                <p>{{$button['cosa']}}</p>
                <img src="{{$button['img']}}" alt="item.cosa" />
            </li>
        @endforeach
      </ul>
    </div>
</main>
@endsection