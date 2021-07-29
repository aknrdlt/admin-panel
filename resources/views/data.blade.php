<div class="inner-blocks" id="counter">
          <div class="statistics-block">
            <img src="{{asset($data->image_coworkers)}}" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> coworkers}}">0</h2>
              <span>{{$data -> text_coworkers}}</span>
            </div>
          </div>
          <div class="statistics-block">
            <img src="{{asset($data->image_users)}}" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> users}}">900</h2>
              <span>{{$data -> text_users}}</span>
            </div>
          </div>
          <div class="statistics-block">
            <img
              src="{{asset($data->image_staff)}}"
              alt=""
              class="statistics-icon"
            />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> staff}}">200</h2>
              <span>{{$data -> text_staff}}</span>
            </div>
          </div>
        </div>