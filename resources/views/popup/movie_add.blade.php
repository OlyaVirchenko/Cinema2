<div class="popup" id="addMoviePopup">
  <div class="popup__container">
    <div class="popup__content">
      <div class="popup__header">
        <h2 class="popup__title">
          Добавление фильма
          <a class="popup__dismiss" href="#"><img src="/i/close.png" alt="Закрыть"></a>
        </h2>

      </div>
      <div class="popup__wrapper">
        <form action="/admin/add-movie" method="post" accept-charset="utf-8" id="addMovie">
          @csrf
          
          <label class="conf-step__label conf-step__label-fullsize" for="name">
            Название фильма
            <input class="conf-step__input" id="movie-name" type="text" placeholder="Например, &laquo;Холодное сердце&raquo;" name="name" required>
          </label>
          
          <label class="conf-step__label conf-step__label-fullsize" for="duration">
            Продолжительность фильма, мин
            <input class="conf-step__input" id="movie-dur" type="text" placeholder="Например, &laquo;120&raquo;" name="duration" required>
          </label>
          
          <label class="conf-step__label conf-step__label-fullsize" for="description">
            Описание фильма
            <input class="conf-step__input" id="movie-description" type="text" placeholder="Описание фильма" name="description" required>
          </label>

          <label class="conf-step__label conf-step__label-fullsize" for="country">
            Страна
            <input class="conf-step__input" id="movie-country" type="text" placeholder="США" name="country" required>
          </label>
          
          <div class="alert"></div>
          <div class="conf-step__buttons text-center">
            <input type="submit" value="Добавить фильм" class="conf-step__button conf-step__button-accent">
            <input type="submit" value="Загрузить постер" class="conf-step__button conf-step__button-accent add-poster">

            <button class="abort conf-step__button conf-step__button-regular">Отменить</button>            
          </div>
        </form>
      </div>
    </div>
  </div>
</div>