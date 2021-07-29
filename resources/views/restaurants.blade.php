@foreach($restaurants as $key => $value)
    <div class="swiper-slide">x`
            <div class="restaurant-card"
               style="background-image: linear-gradient(180deg, rgba(1, 0, 5, 0.09) 0%, rgba(1, 0, 5, 0.3825) 100%), url('{{Voyager::image($value->image)}}')" 
            >
              <div class="restaurant-info">
                <img
                  src="{{secure_asset(Voyager::image($value->logo))}}"
                  alt=""
                  class="restaurant-logo"
                />
                <div class="restaurant-name">{{$value -> name}}</div>
                </div>
            </div>
          </div>
@endforeach