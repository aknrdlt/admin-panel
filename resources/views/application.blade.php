<img src="/static/images/form-image.png" alt="" class="form-image" />
      <div class="form">
        <form  method="POST" action="/" enctype="multipart/form-data" onsubmit="return false;">
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
            <option value="client">Я пользователь</option>
            <option value="client">Я официант</option>
          </select>
          <select name="goal" id="purpose" class="half-sized">
            <option selected="selected" value="purpose">
              Цель сотрудничества
            </option>
            <option value="purpose1">Цель #1</option>
            <option value="purpose2">Цель #2</option>
            <option value="purpose3">Цель #3</option>
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
          @csrf
          <input  type="submit" class="btn-send" value="Отправить"></input>
        </div>
        </form>
      </div>