@include('partials.header')

<style>
    body {

        color: white;
        /* Цвет текста на странице */
    }

    .progress-container {
        width: 100%;
        max-width: 800px;
        /* Максимальная ширина для контейнера */
        margin: 20px auto;
        /* Центрирование и отступ сверху */
        padding: 0 20px;
        /* Отступы по бокам */
        background-color: #495057;
        /* Фон контейнера */
        border-radius: 8px;
        /* Закругление углов контейнера */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        /* Тень для контейнера */
        padding: 0.5%;
    }

    .progress {
        height: 30px;
        /* Высота прогресс-бара */
        border-radius: 5px;
        /* Закругление углов */
        overflow: hidden;
        /* Скрыть переполнение */
        background: #adb5bd44;
        /* Цвет фона прогресс-бара */
        position: relative;
        /* Для абсолютного позиционирования текста */
    }

    .progress-bar {
        background: linear-gradient(90deg, #eb5f285b, #3f3e3d71);
        height: 100%;
        /* Высота совпадает с высотой прогресс-бара */
        transition: width 0.5s ease;
        /* Анимация заполнения */
    }

    .progress-text {
        position: absolute;
        /* Абсолютное позиционирование текста */
        width: 100%;
        text-align: center;
        /* Центрирование текста */
        line-height: 30px;
        /* Центрирование по вертикали */
        color: white;
        /* Цвет текста */
        font-weight: bold;
        /* Жирный текст */
    }

    .progress-label {
        color: #ADB5BD;
        /* Цвет текста под баром */
        text-align: left;
        /* Выравнивание текста влево */
        margin-top: 3px;
        /* Отступ сверху для текста */
        font-size: 0.9rem;
        /* Размер шрифта */
    }

    .card-container {
        display: flex;
        flex-direction: column;
        /* Вертикальное расположение карточек */
        align-items: center;
        /* Центрирование карточек по горизонтали */
        margin-top: 20px;
        /* Отступ сверху для карточек */
    }

    .card {
        width: 80%;
        /* Ширина карточек (можете настроить) */
        margin-bottom: 20px;
        /* Отступ между карточками */
        background: linear-gradient(90deg, #eb5f285b, #3f3e3d71);
        /* Градиент фона карточки */
        border: none;
        /* Убираем стандартную рамку */
        border-radius: 8px;
        /* Закругление углов карточки */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        /* Тень для карточки */
        padding: 20px;
        /* Отступ внутри карточки */
    }

    .card-body {
        color: white;
        /* Цвет текста внутри карточки */
    }

    .card-title {
        font-weight: bold;
        /* Жирный текст для заголовка карточки */
        display: flex;
        /* Для горизонтального выравнивания */
        align-items: center;
        /* Центрирование по вертикали */
    }

    .card-text {
        margin-top: 10px;
        /* Отступ сверху для текста карточки */
    }

    .icon {
        width: 30px;
        /* Ширина иконки */
        height: 30px;
        /* Высота иконки */
        margin-right: 10px;
        /* Отступ справа от иконки */
    }

    .info-section {
        max-width: 800px;
        /* Максимальная ширина для раздела информации */
        margin: 20px auto;
        /* Центрирование и отступ сверху */
        padding: 20px;
        /* Отступ внутри раздела информации */
        background-color: #495057;
        /* Фон раздела информации */
        border-radius: 30px;
        /* Закругление углов */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        /* Тень для раздела информации */
    }

    .contact-info {
        margin-top: 20px;
        /* Отступ сверху для контактной информации */
    }

    .footer {
        text-align: center;
        /* Центрирование текста в подвале */
        margin-top: 20px;
        /* Отступ сверху для подвала */
        color: #ADB5BD;
        /* Цвет текста в подвале */
    }

    .price-button {
    background-color: #495057; /* Цвет фона кнопки */
    color: white; /* Цвет текста кнопки */
    border: none; /* Убираем стандартную рамку */
    border-radius: 5px; /* Закругление углов */
    padding: 10px 20px; /* Отступы внутри кнопки */
    cursor: pointer; /* Указатель при наведении */
    font-size: 1rem; /* Размер шрифта */
    transition: background-color 0.8s; /* Плавный переход цвета фона */
}

.price-button:hover {
    background-color: #ff7f50; /* Цвет фона при наведении */
}
</style>

<body>
    <div class="card-container container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <span class="icon" style="color: #cd7f32;"> <!-- Бронзовый -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="bi bi-cash">
                            <path d="M12 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-8 4c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm8 1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm8-8c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2z" />
                        </svg>
                    </span>
                    Бронзовый пакет
                </h5>
                <p class="card-text">Получите 100 игровых единиц для вашего счета. Идеально подходит для новичков, желающих начать своё приключение в Arma 3.</p>
                <button class="price-button">400 ₽</button>
                <p class="card-text">Способы получения: Игровые единицы будут зачислены на ваш счет после успешной оплаты.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <span class="icon" style="color: #c0c0c0;"> <!-- Серебряный -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="bi bi-cash">
                            <path d="M12 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-8 4c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm8 1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm8-8c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2z" />
                        </svg>
                    </span>
                    Серебряный пакет
                </h5>
                <p class="card-text">Получите 250 игровых единиц для вашего счета. Отличный выбор для игроков, стремящихся расширить свои возможности.</p>
                <button class="price-button">700 ₽</button>
                <p class="card-text">Способы получения: Игровые единицы будут зачислены на ваш счет после успешной оплаты.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <span class="icon" style="color: #ffd700;"> <!-- Золотой -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="bi bi-cash">
                            <path d="M12 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-8 4c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm8 1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm8-8c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm0 3c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2z" />
                        </svg>
                    </span>
                    Золотой пакет
                </h5>
                <p class="card-text">Получите 500 игровых единиц для вашего счета. Для настоящих ветеранов, которые хотят доминировать в игре!</p>
                <button class="price-button">1200 ₽</button>
                <p class="card-text">Способы получения: Игровые единицы будут зачислены на ваш счет после успешной оплаты.</p>
            </div>
        </div>
    </div>



    <div class="info-section">
        <h4>Информация о получении</h4>
        <p>Все товары являются цифровыми. Игровые единицы будут зачислены на ваш счет в течени одного рабочего дня после успешной оплаты.</p>

        <h4>Пользовательское соглашение</h4>
        <p>Пожалуйста, ознакомьтесь с нашим <a href="{{ route('agreement') }}" target="_blank"
                style="color: #00BFFF;">пользовательским соглашением</a> перед совершением покупки.</p>

        <h4>Контакты</h4>
        <div class="contact-info">
            <p>Телефон: +7 (999) 123-45-67</p>
            <p>Email: example@example.com</p>
            <p>ФИО: Иванов Иван Иванович</p>
            <p>ИНН: 123456789012</p>
        </div>
    </div>
    {{--  <div class="progress-container">
        <div class="progress">
            <div class="progress-bar" style="width: 70%;" id="progressBar"></div>
            <div class="progress-text">70%</div> <!-- Текст прогресса -->
        </div>
        <div class="progress-label small">Собранные средства</div> <!-- Текст под баром -->
    </div>
     <script>
        // Пример анимации прогресс-бара
        document.addEventListener('DOMContentLoaded', function() {
            let progressBar = document.getElementById('progressBar');
            let width = 0;

            const interval = setInterval(() => {
                if (width >= 70) {
                    clearInterval(interval); // Остановить анимацию
                } else {
                    width++;
                    progressBar.style.width = width + '%'; // Обновление ширины
                    progressBar.parentElement.querySelector('.progress-text').textContent = width +
                        '%'; // Обновление текста
                }
            }, 20); // Интервал обновления
        });
    </script> --}}

    <div class="footer">
        <p>© 2025, Все права защищены</p>
    </div>
</body>
