const posterButton = document.querySelectorAll('.popup .conf-step__button-accent add-poster')[1];
    // Создаем виртуальный input с type=file чтобы запустить окно выбора файла для загрузки картинки
    const input = document.createElement('input');
    input.type = 'file';
    let content = "";
    posterButton.addEventListener('click', (event) => {
      event.preventDefault();
      input.onchange = (e) => { 
        const file = e.target.files[0];
        if (file === undefined) {return}
        // Проверяем является ли файл изображением (допускаются файлы jpg и png)
        if (file.type != 'image/png')  {
          alert('Ошибка загрузки файла. Загружаемый файл должен быть формата png');
          return; 
        }
        // Проверяем размер файла
        if (file.size > 1000000) {
          alert('Ошибка загрузки файла! Максимально допустимый размер загружаемого файла 1МБ.');
          return; 
        }
        const reader = new FileReader();
        reader.readAsDataURL(file);
        // Если изображение загружено, то отобразим его в popup окне рядом с форомй
        reader.onload = (readerEvent) => {
          content = readerEvent.target.result;
          if (content != "") {
            const poster =  document.querySelector('.popup__poster');
            poster.style.backgroundImage = `url(${content})`;
            posterFile = content; // Записываем содержимое файла в переменную (объявлена в 4_gridSession.js)
            poster.style.width = '150px';
            poster.style.marginRight = "20px"
          }
        }  
      }
      input.click();
    })