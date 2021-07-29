@foreach($banners as $key => $value)
<div class="swiper-slide">
      <div class="container">
        <div class="banner-data">
                <h1 class="banner-title">{{$value -> title}}</h1>
                <p>
                  {{$value -> content}}
                </p>
                <div class="stores">
                  <a href="{{$value -> ios_link}}">
                    <img src="/static/appstore.svg" alt="Скачать в App Store" />
                  </a>
                  <a href="{{$value -> android_link}}">
                    <img
                      src="/static/googleplay.svg"
                      alt="Скачать в Google Play"
                    />
                  </a>
                </div>
              </div>
              @if(isset($value -> image))
                <img class="banner-photo" src="{{Voyager::image($value -> image)}}"  alt="" />
              @else
                <img class="banner-photo" src="{{$value -> image_link}}"  alt="" />
              @endif
      </div>
      </div>

@endforeach