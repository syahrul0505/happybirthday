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
                <button id="play">Start</button>
            </div>
        </div>
    </div>
    <audio class="song" controls loop>
        <source src="music.mp3">
        </source>
        Your browser isn't invited for super fun audio time.
    </audio>
    <canvas id="confetti"></canvas>
    <div class="main">
        <div class="container pt-5">
            <div class="row">

                <div class="col-12 col-xl-6 mx-auto">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="">
                </div>

                <div class="col-12  text-center">
                    <div id="name" class="area">Gaurav</div>
                </div>

                <div class="col-12 text-center">
                    <div class="type-wrap">
                        <div id="typed-strings" class="typing">
                            <h2>Happy Birthday <i id="nae">Mayer Sitorus</i></h2>
                            <h2>Have a wonderful day</h2>
                            <h2>Filled with joy and happiness.</h2>
                        </div>
                        <span id="typed" style="white-space:pre;"></span>
                    </div>
                </div>

                <div class="col-6 col-xl-3 cake" style="margin-top: ">
                    <img src="{{ asset('assets/img/cake.gif') }}" alt="">
                </div>
            </div>
        </div>
        <img src="img/Balloon-Border.png" width="100%" class="balloon-border">
    </div>
</body>
<script src="https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js"></script>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/typed.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</html>