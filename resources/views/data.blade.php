<div class="inner-blocks" id="counter">
          <div class="statistics-block">
            <img src="/static/icons/cafe.svg" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> coworkers}}">0</h2>
              <span>Заведений уже с нами</span>
            </div>
          </div>
          <div class="statistics-block">
            <img src="/static/icons/users.svg" alt="" class="statistics-icon" />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> users}}">900</h2>
              <span>Человек пользуются Order Eat</span>
            </div>
          </div>
          <div class="statistics-block">
            <img
              src="/static/icons/waiter.svg"
              alt=""
              class="statistics-icon"
            />
            <div class="statistics-data">
              <h2 class="counter-value" data-count="{{$data -> staff}}">200</h2>
              <span>Официантов пользуются Order Eat</span>
            </div>
          </div>
        </div>