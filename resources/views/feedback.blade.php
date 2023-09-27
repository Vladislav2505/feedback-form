<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Подключение сброса стилей -->
    <link rel="stylesheet" href="reset.css" />

    <!-- Подключение файла стилей -->
    <link rel="stylesheet" href="{{asset ('assets/css/app.css')}}" />
    <title>Форма обратной связи</title>
  </head>
  <body>

    <!-- Контейнер выравнивает по ширине и по центру -->
    <div class="container">

      <!-- content содержит содержимое формы -->
      <div class="content">

        <!-- Правая колонка: сама форма -->
        <div class="right-side">

          <!-- Заголовок для формы -->
          <div class="topic-text">Отправьте нам сообщение</div>

          <!-- Какой-то дополнительный текст -->
          <p>
            Если у вас есть какие-то вопросы или предложения по сотрудничеству -
            заполните форму ниже
          </p>

          <!-- Форма обратной связи -->
          <form action="{{route('send')}}" method="post">
            @csrf

            <!-- Каждый input для выравнивания вкладываем в блок input-box -->
            <div class="input-box">
              <input type="text" name="name" placeholder="Ваше имя" />
            </div>
            <div class="input-box">
              <input type="text" name="email" placeholder="Введите email" />
            </div>
            <div class="input-box">
              <input type="text" name="phone" placeholder="Введите телефон" />
            </div>
            <div class="button">
              <button>Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Подключение шрифтовых иконок, можно получить на fontawesome.com -->
    <script
      src="https://kit.fontawesome.com/fce9a50d02.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html