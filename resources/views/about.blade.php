<div class="container">
<h1 class="title">О нас</h1>
@foreach($abouts as $key => $value)
        @if($value->id % 2 == 1)
        <div class="about-block about-image-left" data-aos="slide-right">
          <img
            src="{{Voyager::image($value->image)}}"
            alt=""
            class="about-image"
          />
          <div class="about-text">
            <h2 class="heading">
            {{$value->title}}</h2>
            <p class="text">
            {{$value->content}}
          </div>
        </div>
        @else
        <div class="about-block about-image-right" data-aos="slide-right">
          <div class="about-text">
            <h2 class="heading">
                {{$value->title}}
            </h2>
            <p class="text">
            {{$value->content}}
            </p>
          </div>
          <img
            src="{{Voyager::image($value->image)}}"
            alt=""
            class="about-image"
          />
        </div>
        @endif
@endforeach
</div>
