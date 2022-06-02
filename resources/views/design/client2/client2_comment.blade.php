<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="assets/img/thumb.jpg">
    <meta property="og:title" content="Anastya & Rifqi - Weddlex">
    <meta property="og:description" content="السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ

Maha suci Allah yang telah menjadikan segala sesuatu lebih indah dan sempurna.">
    <title>Anastya & Rifqi - Weddlex</title>
    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/client2.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.js"></script>
    <script src='assets/js/device.min.js'></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top" class="politics_version komens">
    <!-- <audio id="player" autoplay loop>
        <source src="music/5.mp3" type="audio/mp3">
    </audio>
    <audio autoplay loop>
        <source src="music/5.mp3">
      </audio> -->
    <div class="bg-music">
        <audio id="myMusic" src="assets/music/client2.mp3" loop=""></audio>
    </div>




    <section id="komen" class="section cw parent">
        <div class="container">

            <div class="section-wg" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="3000">
                <h2 class="edward">Comments & Wishes</h2>
                <div class="section">

                    <div class="comment2 mt-4 text-justify float-left">
                        @foreach($data as $dt)
                        <h4>{{$dt->nama}}</h4> <span>{{$dt->created_at}}</span> <br>
                        <p>{{$dt->comment}} </p>
                        <hr>
                        @endforeach
                    </div>
                </div>

            </div>


        </div>
        <div class="absolute"><img class="card-img-top" src="assets/img/client2/pattern_4.png" alt="Card image cap"></div>
    </section>


    <script src="assets/js/script.js"></script>
    <script src="assets/js/simplyCountdown.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });
    </script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 1000,
            speedAsDuration: true
        });
    </script>
    <script>
        let menuToggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.start');
        let sec = document.querySelector('.sec');
        menuToggle.onclick = function() {
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
            sec.classList.toggle('active');
        }
    </script>
    <script>
        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        }
        $(document).on('click', '.music', function() {
            $("#myMusic")[0].play();
            $('body').css({
                'overflow': 'auto'
            });
        });
    </script>
    <!-- <script>
        let audioPlaying = true,
    backgroundAudio, browser;
browser = navigator.userAgent.toLowerCase();
$('<audio class="audio1" src="5.mp3" loop></audio>').prependTo('body');
if (!browser.indexOf('firefox') > -1) {
    $('<embed id="background-audio" src="5.mp3" autostart="1"></embed>').prependTo('body');
    backgroundAudio = setInterval(function() {
        $("#background-audio").remove();
        $('<embed id="background-audio" src="5.mp3"></embed>').prependTo('body');
    }, 120000); // 120000 is the duration of your audio which in this case 2 mins.
}


$(".toggle-audio").on('click', function(event) {
    audioPlaying = !audioPlaying;
    $("#background-audio").remove();

    clearInterval(backgroundAudio);
    if (audioPlaying){
        $(".audio1").play();
        // play audio 
    }
    else {
        $(".audio1").pause();
    }
});
    </script> -->
</body>

</html>