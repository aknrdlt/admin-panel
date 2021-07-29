<img src="/static/images/form-image.png" alt="" class="form-image" />
      <div class="form">
        <form  method="POST" action="">
        <h1 class="title">Оставьте заявку и мы обязательно свяжемся с вами!</h1>
        <input
          type="text"
          name="restaurant_name"
          class="full-sized form-input"
          placeholder="Название заведения*"
        />
        <div class="input-row">
          <select name="role" id="iam" class="half-sized">
            <option selected="selected" value="owner" selected>Я владелец</option>
            <option value="user">Я пользователь</option>
            <option value="staff">Я официант</option>
          </select>
          <select name="goal" id="purpose" class="half-sized">
            <option selected="selected" value="Goal 0">
              Цель сотрудничества
            </option>
            <option value="goal1">Цель #1</option>
            <option value="goal2">Цель #2</option>
            <option value="goal3">Цель #3</option>
          </select>
        </div>
        <div class="input-row">
          <input
            type="text"
            name="username"
            class="half-sized form-input"
            placeholder="Контактное лицо*"
          />
          <input
            type="text"
            name="phone"
            class="half-sized form-input"
            placeholder="Телефон*"
          />
        </div>
        <div class="btn-container">
          <input  type="submit" class="btn-send" value="Отправить"></input>
        </div>
        </form>
      </div>

      <?php
        if(isset($_POST["restaurant_name"]) && isset($_POST["role"]) && isset($_POST["goal"]) && isset($_POST["username"]) && isset($_POST["phone"])){
          $restaurant_name = $_POST["restaurant_name"];
          $role = $_POST["role"];
          $goal = $_POST["goal"];
          $username = $_POST["username"];
          $phone = $_POST["phone"];

          echo $restaurant_name;
        }
      ?>