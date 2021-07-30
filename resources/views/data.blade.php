<div class="inner-blocks" id="counter">
          <div class="statistics-block">
            <img src="{{Image::make(Voyager::image($data -> image_coworkers))}}" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="20">0</h2>
              <span>{{$data -> text_coworkers}}</span>
            </div>
          </div>
          <div class="statistics-block">
            <img src="{{Voyager::image($data -> image_users)}}" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> users}}">900</h2>
              <span>{{$data -> text_users}}</span>
            </div>
          </div>
          <div class="statistics-block">
            <img
              src="{{Imageick::make(Voyager::image($data -> image_staff))}}"
              alt=""
              class="statistics-icon"
            />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> staff}}">200</h2>
              <span>{{$data -> text_staff}}</span>
            </div>
          </div>
        </div>