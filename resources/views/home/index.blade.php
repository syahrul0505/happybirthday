<html>

<head>
    <title>Happy Birthday</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="loader">
                <button id="play">Klik Disini Mayer Sitorus</button>
            </div>
        </div>
    </div>
    <audio class="song" controls loop>
        <source src="{{ asset('assets/music.mp3') }}">
        </source>
    </audio>
    <canvas id="confetti"></canvas>
    <div class="main">
        <div class="container pt-5">
            <div class="row">

                <div class="col-12 col-xl-6 mx-auto">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="">
                </div>

                <div class="col-12  text-center">
                    <div id="name" class="area">Mayer Sitorus</div>
                </div>

                <div class="col-12 text-center">
                    <div class="type-wrap">
                        <div id="typed-strings" class="typing">
                            <h2>Happy Birthday <i id="nae">Mayer Sitorus</i></h2>
                            <h2>Selamat ulang tahun Pa Mayerr! Semoga sukses selalu menyertai Anda dalam setiap langkah yang diambil.</h2>
                            <h2>Semoga Sehat Selalu dan di berikan kesehatan</h2>
                            <h2>Semoga kita terus meraih kesuksesan bersama di masa depan</h2>
                            <h2>Ingat, usia hanyalah angka, yang terpenting adalah semangatmu!</h2>
                            <h2>Jangan Tambah Anak lg dulu pak hehehehe</h2>
                            <h2>Menyala Braderr kuuu 🔥🔥🔥</h2>
                            <h2>Selamat Tambah Usia Pa Mayer</h2>
                        </div>
                        <span id="typed" style="white-space:pre;"></span>
                    </div>
                </div>

                <div class="col-6 col-xl-3 cake" style="margin-top: 10%;">
                    <img src="{{ asset('assets/img/mayer.png') }}" alt="">
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/Balloon-Border.png') }}" width="100%" class="balloon-border">
    </div>
</body>
<script src="https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js"></script>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/typed.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</html>