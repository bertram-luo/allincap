@extends('layouts.myslider')

@section('content')
<div id="body" class="scrollable">
    <section id="news" class="section" style="background-color:rgb(30, 172, 252)">
    <div class="content">
            <div class="pics flexslider" id="newsSlider">
                <ul class="pic_list slides">
                    <li class="pic_item"><img src="/assets/images/news1.jpg">  </img></li>
                    <li class="pic_item"><img src="/assets/images/news2.jpg">  </img></li>
                    <li class="pic_item"><img src="/assets/images/news3.jpg">  </img></li>
                </ul>
            </div>
            <div class="list">
                <h2>最新动态</h2>
                <ul class="news_list">
                    <li>
                        <span class="time" > 2016.8.14</span><span class="abstract"> 与百度合作创投市值第一</span>
                    </li>
                </ul>
                <button>  more </button>
            </div>
    </div>
    </section>
</div>
@endsection
