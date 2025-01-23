@include('partials.header')

<main class="mt-6">
    <div class="container">
        @if ($user != null)
            <h7 class="text-main">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none" />
                    <path fill="#eb5e28"
                        d="m218.44 101l-17.31-30a26 26 0 0 0-45.58 1l-19.08-33a26 26 0 0 0-46.14 2.19A26 26 0 0 0 49.88 73l3.29 5.7a26 26 0 0 0-23.69 39L69.5 187a85.44 85.44 0 0 0 52.21 40.08a86.7 86.7 0 0 0 22.4 3a86 86 0 0 0 74.33-129Zm-3 62.16A74 74 0 0 1 79.89 181l-40-69.32a14 14 0 0 1 24.25-14L83.36 131a6 6 0 0 0 10.39-6L60.27 67a14 14 0 1 1 24.25-14l31.17 54a6 6 0 0 0 5.2 3a5.9 5.9 0 0 0 3-.81a6 6 0 0 0 2.2-8.2L101.83 59a14 14 0 0 1 24.25-14l34.2 59.23a46 46 0 0 0-6.4 59.13a6 6 0 0 0 9.94-6.73a34 34 0 0 1 7.76-46.26a6 6 0 0 0 1.6-7.8L166.49 91a14 14 0 1 1 24.25-14l17.31 30a73.53 73.53 0 0 1 7.39 56.14ZM186.18 32.22a6 6 0 0 1 7.34-4.22a57.6 57.6 0 0 1 35.32 27l.33.57a6 6 0 1 1-10.39 6l-.33-.57a45.7 45.7 0 0 0-28-21.43a6 6 0 0 1-4.27-7.35M79.32 235.71a6 6 0 0 1-8.42 1A117.8 117.8 0 0 1 41.79 203a6 6 0 0 1 10.4-6a105.5 105.5 0 0 0 26.14 30.29a6 6 0 0 1 .99 8.42" />
                </svg>
                <span class="fs-1 text-white">{{ $user->name }}</span>
            </h7>
        @endif

        <!-- Плашка с данными -->
        <div class="stats-card-container">
            <div class="overlay">
                <h5 class="overlay-text">В разработке</h5>
            </div>
            <div class="stats-card d-flex justify-content-between align-items-center">
                <div class="stat-item text-center">
                    <div class="stat-title">Power Ranking</div>
                    <div class="stat-value">149,424</div>
                    <div class="stat-subtitle">#17 NAC (PC)</div>
                </div>

                <div class="dividerer"></div>

                <div class="stat-item text-center">
                    <div class="stat-title">Event Totals</div>
                    <div class="stat-value">$223,525</div>
                    <div class="stat-subtitle">60 Events</div>
                </div>

                <div class="dividerer"></div>

                <div class="stat-item text-center">
                    <div class="stat-title">Session Placements</div>
                    <div class="stat-value">Top 1's: 36</div>
                    <div class="stat-value">Top 10's: 111</div>
                    <div class="stat-value">Avg. Place: 567.3</div>
                </div>
            </div>
        </div>

        <!-- Элемент для графика с уменьшенной высотой -->
        <div class="chart-container">
            <div class="overlay">
                <h5 class="overlay-text">В разработке</h5>
            </div>
            <canvas id="myChart" width="400" height="150"></canvas>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line', // Тип графика (линейный)
        data: {
            labels: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл'], // Метки по оси X
            datasets: [{
                    label: 'Сессии', // Название первого набора данных
                    data: [12, 19, 3, 5, 2, 3, 7], // Данные для первого графика
                    backgroundColor: 'rgba(235, 94, 40, 0.2)', // Цвет фона области первого графика
                    borderColor: 'rgba(235, 94, 40, 1)', // Цвет линии первого графика
                    borderWidth: 1, // Толщина линии
                    fill: false, // Отключаем заливку
                    pointStyle: 'circle', // Стиль точек
                    pointRadius: 5, // Радиус точек
                    pointHoverRadius: 7, // Радиус точек при наведении
                    pointBorderColor: (context) => {
                        const value = context.dataset.data[context.dataIndex];
                        return value > (context.dataset.data[context.dataIndex - 1] || 0) ? 'green' :
                            'red';
                    }, // Цвет границы точек
                    pointBackgroundColor: 'white' // Цвет фона точек
                },
                {
                    label: 'Успехи', // Название второго набора данных
                    data: [10, 15, 5, 8, 3, 6, 9], // Данные для второго графика
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Цвет фона области второго графика
                    borderColor: 'rgba(54, 162, 235, 1)', // Цвет линии второго графика
                    borderWidth: 1, // Толщина линии
                    fill: false, // Отключаем заливку
                    pointStyle: 'circle', // Стиль точек
                    pointRadius: 5, // Радиус точек
                    pointHoverRadius: 7, // Радиус точек при наведении
                    pointBorderColor: (context) => {
                        const value = context.dataset.data[context.dataIndex];
                        return value > (context.dataset.data[context.dataIndex - 1] || 0) ? 'green' :
                            'red';
                    }, // Цвет границы точек
                    pointBackgroundColor: 'white' // Цвет фона точек
                }
            ]
        },
        options: {
            responsive: true, // Адаптивность графика
            scales: {
                y: {
                    beginAtZero: true // Начинать ось Y с нуля
                }
            }
        }
    });
</script>

<style>
    .stats-card-container, .chart-container {
        position: relative;
        overflow: hidden;
        margin-bottom: 20px; /* Отступ между блоками */
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Черный фон с прозрачностью */
        backdrop-filter: blur(5px); /* Эффект размытия */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1; /* Убедитесь, что наложение выше других элементов */
    }

    .overlay-text {
        color: white;
        font-size: 2rem; /* Размер текста */
        font-weight: bold; /* Жирный шрифт */
    }

    .stats-card {
        position: relative; /* Для правильного позиционирования наложения */
        z-index: 0; /* Убедитесь, что контент под наложением */
    }
</style>
