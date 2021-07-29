@foreach($news as $key => $value)
    <div class="swiper-slide">
            <div class="news-card">
              <img src="{{asset('storage/' . $value->image)}}" alt="" />
              <div class="news-data">
                <h2 class="news-title">
                  {{$value->title}}
                </h2>
                <span class="news-date">{{$value->created_at -> format("F j, Y, g:i a")}}</span>
              </div>
            </div>
          </div>
@endforeach