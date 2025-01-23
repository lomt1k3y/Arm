@include('partials.header')

<div class="container cont text-end mt-5">
    <h1 class="display-1">
        <span class="title-word">Lorem,</span>
        <span class="title-word">ipsum</span>
        <span class="highlight title-word">dolor</span>
    </h1>
    <hr class="divider">
    <p class="lead mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quos ducimus illum
        inventore possimus blanditiis culpa provident aliquid nemo obcaecati
        ab aliquam consequatur debitis doloribus non neque, aspernatur alias voluptatibus.</p>
</div>

<div class="video-container"> <!-- Контейнер для видео плеера -->
    <div class="video-player d-none d-lg-block"> <!-- Скрываем на мобильных -->
        <iframe src="https://www.youtube.com/embed/M1YBZUxMX8g?si=6VXLdyNhYhkuI90e&autoplay=1&loop=1&playlist=M1YBZUxMX8g" 
                title="Arma 3 Teaser Trailer"
                frameborder="0"
                allow="accelerometer; autoplay; loop; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; muted;"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
    </div>
</div>
<!-- Вертикальные полосы -->
<div class="vertical-lines">
    <div class="line"></div>
    <div class="line"></div>
</div>

<div class="stat-item">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="blue" class="bi bi-shooting-stars" viewBox="0 0 16 16">
        <path d="M9.5 0a.5.5 0 0 1 .5.5v1.5h1.5a.5.5 0 0 1 0 1H10v1.5a.5.5 0 0 1-1 0V2h-1.5a.5.5 0 0 1 0-1H9V.5a.5.5 0 0 1 .5-.5zM4 4.5a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1H4.5V8a.5.5 0 0 1-1 0V6h-1a.5.5 0 0 1 0-1h1V4.5a.5.5 0 0 1 .5-.5zm6 6.5a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1.5v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5zm-5-2a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1H5.5v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5zM11 3.5a.5.5 0 0 1 .5.5v1h1a.5.5 0 0 1 0 1h-1.5v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 .5-.5z"/>
    </svg>
    <span>K/D: 1.5</span>
</div>
<script>
    $(document).ready(function() {
        var success = '{{ session('success') }}';
        var username = '{{ session('username') }}';

        if (success) {
            iziToast.show({
                title: username,
                message: 'вы успешно авторизованы через Steam!',
                position: 'topCenter',
                timeout: 3000,
                transitionIn: 'fadeInDown',
                transitionOut: 'fadeOutUp'
            });
        }
    });

    // let progress = 0;
    // const progressBar = document.getElementById('progressBar');

    // const interval = setInterval(() => {
    //     progress += 10; // Увеличиваем прогресс на 10%
    //     progressBar.style.width = progress + '%';

    //     if (progress >= 100) {
    //         clearInterval(interval); // Останавливаем, когда прогресс достиг 100%
    //     }
    // }, 1000); // Каждую секунду
</script>
</body>
</html>
