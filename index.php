<!-- <?php
    $TitleTag = "Bengkel Plaster Dinding Dan Cat Bertekstur Semula Jadi Pertama Di Malaysia";
    $MetaTag = "Surface Archi: Bengkel lukisan dinding seni pertama di Malaysia menjemput anda untuk mendaftar untuk Program Aplikator Rakan Kongsi, yang menyediakan latihan profesional dan ujian komprehensif.";
    $GoogleFormButton = "https://forms.gle/9jQzh3g8EhpMy2qu9";
    $WhatsAppLink = "https://api.whatsapp.com/send?phone=60127271962";
    $socialInstagram = "https://www.instagram.com/surfacearchi/";
    $socialFacebook = "https://www.facebook.com/surfacearchiacademy";
?> -->
<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta name="theme-color" content="#1C1C1C">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title><?=$TitleTag?></title>
    <meta name="description" content="<?=$MetaTag?>">
    <meta property="og:title" content="<?=$TitleTag?>">
    <meta property="og:description" content="<?=$MetaTag?>">
    <meta property="og:url" content="<?php echo "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=$TitleTag?>">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image" content="https://www.surfacearchi.com/academy/assets/images/course-12.jpg">
    <meta property="og:image:secure_url" content="https://www.surfacearchi.com/academy/assets/images/course-12.jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" href="assets/images/Favicon-Regular.png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/Favicon-Regular.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/Favicon-Regular.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/Favicon-Regular.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/Favicon-Regular.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/Favicon-Regular.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/Favicon-Regular.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/Favicon-DPI.png">
    <link rel="icon" href="assets/images/Favicon-Regular.png" type="image/png" sizes="16x16">
    <link rel="icon" href="assets/images/Favicon-DPI.png" type="image/png" sizes="32x32">

    <!-- CSS ?<?php echo date("His", filemtime('index.php')); ?> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.css" integrity="sha256-WaFGDfbLRYIE7JkzRf9JZPp+GnfaSrcTflD86ENMHWo=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" integrity="sha256-X7rrn44l1+AUO65h1LGALBbOc5C5bOstSYsNlv9MhT8=" crossorigin="anonymous">
    <link href="assets/css/styles.css?<?php echo date("His", filemtime('assets/css/styles.css')); ?>" rel="stylesheet">
    <link href="assets/css/float_whatsapp.css?<?php echo date("His", filemtime('assets/css/float_whatsapp.css')); ?>" rel="stylesheet">
    <link href="assets/css/video_module.css?<?php echo date("His", filemtime('assets/css/video_module.css')); ?>" rel="stylesheet">
    <link href="assets/css/desktop_menu.css?<?php echo date("His", filemtime('assets/css/desktop_menu.css')); ?>" rel="stylesheet">
    <link href="assets/css/mobile_menu.css?<?php echo date("His", filemtime('assets/css/mobile_menu.css')); ?>" rel="stylesheet">
    <link href="assets/css/countDown.css?<?php echo date("His", filemtime('assets/css/countDown.css')); ?>" rel="stylesheet">
    <link href="assets/css/language.css?<?php echo date("His", filemtime('assets/css/language.css')); ?>" rel="stylesheet">
    <link href="assets/css/custom.css?<?php echo date("His", filemtime('assets/css/custom.css')); ?>" rel="stylesheet">
    <link href="assets/css/reponsive.css?<?php echo date("His", filemtime('assets/css/reponsive.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@500;600;700;800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js"
        integrity="sha256-FIp0sJIa14Ah1xboAy7eHNr37XJ5zv19KsvpBq3RKmg=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js" integrity="sha256-gHiUEskgBO+3ccSDRM+c5+nEwTGp64R99KYPfITpnuo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/video_module.js?<?php echo date("His", filemtime('assets/js/video_module.js')); ?>"></script>
    <script type="text/javascript" src="assets/js/event.move.js?<?php echo date("His", filemtime('assets/js/event.move.js')); ?>"></script>
    <script type="text/javascript" src="assets/js/custom.js?<?php echo date("His", filemtime('assets/js/custom.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script type="text/javascript">
        var videoWrapperId = '[data-title*="cf-vimeo-video"]';
        var checkerMillis = 1000;
        var videoCurrentTime = 0;
        var timerInterval = null;
        var videoPlayers = [];
        $(function () {
            var playButtonImage = "assets/images/big-play-button.png";
            var blocker = $(
                '<div data-title="cf-vimeo-unmute cf-vimeo-restart cf-vimeo-remove-blocker" class="iframeBlocker"><div class="video-sound-overlay"><div class="play-button"><img src="' +
                playButtonImage + '" /></div></div></div>');
            $('iframe', videoWrapperId).parents('.elVideo').append(blocker);
            $('[data-title*="cf-vimeo-remove-blocker"]').on('click', function () {
                $(this).remove();
            });
        });
        $(function () {
            if (typeof Vimeo == 'undefined') {
                $('body').append($('<script>', {
                    src: "https://player.vimeo.com/api/player.js"
                }));
                checkForVimeo();
            } else {
                handleVimeoPlayer();
            }

            function checkForVimeo() {
                if (typeof Vimeo == 'undefined') {
                    window.setTimeout(checkForVimeo, 100);
                } else {
                    handleVimeoPlayer();
                }
            }
        });

        function handleVimeoPlayer() {
            $(videoWrapperId).each(function () {
                var thisThis = $(this);
                var videoFrameSrc = $('iframe', thisThis).attr('src');
                var newUrl = new URL(videoFrameSrc);
                newUrl.searchParams.delete('autoplay');
                newUrl.searchParams.delete('muted');
                newUrl.searchParams.append('autoplay', '1');
                newUrl.searchParams.append('muted', '1');
                videoFrameSrc = newUrl.toString();
                $('iframe', thisThis).attr('src', videoFrameSrc);
                var videoPlayer = new Vimeo.Player($('iframe', thisThis));
                videoPlayers.push(videoPlayer);
                videoPlayer.ready().then(function () {
                    $('.elVideo', thisThis).next('iframe').remove();
                    $('[data-title*="cf-vimeo-unmute"]', thisThis).on('click', function () {
                        videoPlayer.setVolume(1);
                        videoPlayer.play();
                    });
                    $('[data-title*="cf-vimeo-restart"]', thisThis).on('click', function () {
                        videoPlayer.setCurrentTime(0);
                        videoPlayer.play();
                    });
                    videoPlayer.on('volumechange', function (data) {
                        var thisVolume = data.volume;
                        var thisElID = videoPlayer.element.id;
                        if (thisVolume > 0) {
                            $.each(videoPlayers, function (index, value) {
                                var currElID = value.element.id;
                                if (thisElID != currElID) {
                                    value.getVolume().then(function (volume) {
                                        if (volume > 0) {
                                            value.pause();
                                        }
                                    });
                                }
                            });
                        }
                    });
                    videoPlayer.on('play', function (data) {
                        var thisVolume = 0;
                        videoPlayer.getVolume().then(function (volume) {
                            thisVolume = volume;
                        });
                        var thisElID = videoPlayer.element.id;
                        if (thisVolume > 0) {
                            $.each(videoPlayers, function (index, value) {
                                var currElID = value.element.id;
                                if (thisElID != currElID) {
                                    value.getVolume().then(function (volume) {
                                        if (volume > 0) {
                                            value.pause();
                                        }
                                    });
                                }
                            });
                        }
                    });
                });
            });
        }
    </script>
</head>

<body>
    <?php include'views/menus.php'?>

    <!-- Hero -->
    <section id="HeroTop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mmt_50">
                    <div class="col-inner text-center">
                        <div class="elHeadlineWrapper de-editable" data-title="headline" data-hide-on="">
                            <div class="elHeadline lh1-2 tlh1-2 mlh1-2 MarginTop0 fw_600 txt-center py-1 py-md-3 dfs_24 tfs_24 mfs_15"><span class="d-block d-sm-none"></span>
                                Kontraktor Cat, Adakah Bisnes Anda Masih Bergantung Pada Perkhidmatan Mengecat Rumah? <span class="d-md-block"></span>Tibalah Masanya Untuk Meningkatkan Kemahiran Supaya Bisnes Lebih Menguntung Dan Kompetitif.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include'views/Hero_v2.php'?>

    <!-- Manufacturer and multi-brand -->
    <section id="ManufactureMultiBrand">
        <div class="container order-2 order-sm-1">
            <div class="row justify-content-md-center">
                <div class="col-lg-9 dmt_90 tmt_90 mmt_20">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div
                                class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 txt_center dfs_40 tfs_40 mfs_20">
                                Pengeluar Cat dan Pengedaran <span class="d-md-block"></span>Utama Terbesar Di Malaysia
                            </div>
                        </div>
                        <div class="DealerLogo dmt_35 tmt_35 mmt_20">
                            <div class="list">
                                <img src="assets/images/dealer/Vasari-Logo.png">
                            </div>
                            <div class="list">
                                <img src="assets/images/dealer/Marmorino-Logo.png">
                            </div>
                            <div class="list">
                                <img src="assets/images/dealer/Loggia-Logo.png">
                            </div>
                            <div class="list">
                                <img src="assets/images/dealer/Cebos-Logo.png">
                            </div>
                            <div class="list">
                                <img src="assets/images/dealer/Zenit-Logo.png">
                            </div>
                            <div class="list">
                                <img src="assets/images/dealer/SurfaceArchi-Logo.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid order-1 order-sm-2">
            <div class="row align-items-md-center justify-content-md-center">
                <div class="col-md-11">
                    <div class="col-inner">
                        <div class="WorkerList dmt_35 tmt_35 mmt_20">
                            <div class="list">
                                <img src="assets/images/course-1.jpeg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-12.jpg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-3.jpeg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-4.jpeg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-5.jpg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-6.jpeg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-9.jpg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-8.jpeg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-7.jpeg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-10.jpg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-2.jpeg">
                            </div>
                            <div class="list">
                                <img src="assets/images/course-11.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="PartnerApplicatorProgram" class="container order-3 order-sm-3">
            <div class="row align-items-md-end">
                <div class="col-md-12 dmt_90 tmt_90 mmt_35">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div
                                class="elHeadline MarginTop0 lh1-1 mlh1-1 fw_700 txt_center dfs_48 tfs_48 mfs_22">
                                Ingin <span class="fw_700 color_second">MENINGKATAN KEUNTUNGAN</span> <span class="d-md-block"></span>Bisnes Dengan Kemahiran Unik Ini?
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph" data-hide-on="desktop">
                            <div
                                class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 txt_center dfs_36 tfs_36 mfs_24 dmt_15 tmt_15 mmt_5">
                                Surface Archi Juga Memperkenalkan <span class="floatLine fw_700 position-relative"><img src="assets/images/Mask-Money.png">Partner Applicator Program</span>
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph" data-hide-on="mobile">
                            <div
                                class="elHeadline MarginTop0 lh1-3 mlh1-3 fw_700 txt_center dfs_40 tfs_40 mfs_20 dmt_5 tmt_5 mmt_15">
                                Surface Archi Juga Memperkenalkan Partner Applicator Program
                            </div>
                        </div>
                        <div class="heroLine elImageWrapper de-image-block MarginTop0 MarginAuto mwidth_50 de-editable" data-title="image" data-hide-on="mobile">
                            <img src="assets/images/Mask-Money.png" class="elIMG" alt="">
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div
                                class="elHeadline MarginTop0 lh1-2 mlh1-2 fw_400 txt_center dfs_28 tfs_28 mfs_20 dmt_15 tmt_15 mmt_10">
                                Asalnya anda memenuhi kehadiran bengkel dan ujian kami, <span class="d-md-block"></span>anda akan menikmati faedah-faedah berikut:
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-md-center justify-content-md-between dmt_30 tmt_30 mmt_0">
                <div class="col-md-6">
                    <div class="col-inner">
                        <div class="elImageWrapper de-image-block MarginTop0 de-editable" data-title="image">
                            <img src="assets/images/Partner-Applicator-Program.png" class="elIMG" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-inner">
                        <div class="BenefitsCover mmt_25">
                            <div class="list"><span></span>15% Diskaun untuk semua produk bahan Surface Archi</div>
                            <div class="list"><span></span>Dapat projek-projek dari Surface Archi</div>
                            <div class="list"><span></span>Percuma untuk menghadiri semua bengkel dan kursus Vasari</div>
                            <div class="list"><span></span>Syarikat / Individu akan dikenali dan dipamerkan oleh Surface Achi di laman web rasmi</div>
                            <div class="list"><span></span>Percuma untuk mengguna bengkel Surface Achi</div>
                            <div class="list"><span></span>Akses kepada kemahiran terbaru dan sokongan daripada HQ</div>
                            <div class="list"><span></span>Sijil, Baju Seragam, Piala dan sebagainya.</div>
                        </div>
                        <div class="">
                            <a href="<?=$GoogleFormButton?>" class="SurfaceGoogleForm type_one dmt_35 tmt_35 mmt_15" target="_blank"
                                rel="noopener noreferrer">
                                <span class="topTitle">PENDAFTARAN PERCUMA SEKARANG</span>
                                <span class="bottomTitle">Setiap Bengkel TERHAD KEPADA 30 ORANG SEHAJA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-12 dmt_90 tmt_90 mmt_35">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div
                                class="elHeadline MarginTop0 lh1-3 mlh1-3 fw_700 txt_center dfs_40 tfs_40 mfs_24">
                                Pilihan Kehadiran Bengkel <span class="d-block d-sm-none"></span>Akan Datang…
                            </div>
                        </div>
                        <div id="ChooseOne" class="ChooseOne"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- large Exhibition -->
    <section id="LargeExhibition">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12">
                    <div class="col-inner">
                        <div class="elImageWrapper de-image-block MarginTop0 MarginAuto dwidth_20 twidth_20 mwidth_60 de-editable" data-title="image">
                            <img src="assets/images/dealer/SurfaceArchi-Logo.png" class="elIMG" alt="">
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div
                                class="elHeadline MarginTop0 lh1-3 mlh1-1 fw_700 txt_center txt_white dfs_48 tfs_48 mfs_25 mmt_10">
                                2022-2023 Dijemput Menghadiri <span class="d-md-block"></span>Pameran Terkenal di Malaysia
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div
                                class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_center dfs_32 tfs_32 mfs_16 dmt_10 tmt_10 mmt_10" style="color: #E5B770;">
                                (ARCHIDEX & HOMEDEC EXHIBITION)
                            </div>
                        </div>
                        <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable dmt_50 tmt_45 mmt_25" data-title="image">
                            <img src="assets/images/Event-Attend.png" class="elIMG" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recognition Events -->
    <section id="RecognitionEvents">
        <div class="container">
            <div id="Recommend" class="row justify-content-md-center">
                <div class="col-lg-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 txt_center dfs_32 tfs_32 mfs_20 dmt_30 tmt_30 mmt_25" style="color: #454545;">
                                Pengiktirafan & Peristiwa
                            </div>
                        </div>
                        <div class="REvent">
                            <div class="list">
                                <figure>
                                    <img src="assets/images/Recog-1.png" alt="">
                                </figure>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="assets/images/Recog-2.png" alt="">
                                </figure>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="assets/images/Recog-3.png" alt="">
                                </figure>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="assets/images/Recog-4.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="lineStraight"></div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-3 fw_700 txt_center dfs_24 tfs_24 mfs_18 dmt_50 tmt_50 mmt_25">
                                Dipaparkan Oleh Berita <span class="d-block d-sm-none"></span>dan Media Terkenal
                            </div>
                        </div>
                        <div class="SeenMedia">
                            <div class="list"><img src="assets/images/Seen/MediaLogo-1.png" alt=""></div>
                            <div class="list"><img src="assets/images/Seen/MediaLogo-2.png" alt=""></div>
                            <div class="list"><img src="assets/images/Seen/MediaLogo-3.jpg" alt=""></div>
                            <div class="list"><img class="juice" src="assets/images/Seen/MediaLogo-4.jpg" alt=""></div>
                            <div class="list"><img src="assets/images/Seen/MediaLogo-5.jpg" alt=""></div>
                            <div class="list"><img src="assets/images/Seen/MediaLogo-6.png" alt=""></div>
                            <div class="list"><img src="assets/images/Seen/MediaLogo-7.jpg" alt=""></div>
                            <div class="list"><img class="designspeak" src="assets/images/Seen/MediaLogo-8.jpg" alt=""></div>
                            <div class="list"><img class="houzz" src="assets/images/Seen/MediaLogo-9.png" alt=""></div>
                            <div class="list"><img src="assets/images/Seen/MediaLogo-10.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="FacingProblem" class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-1 fw_700 txt_center dfs_36 tfs_36 mfs_21 dmt_90 tmt_90 mmt_35">
                                Tidak Kira Anda Tukang Cat Atau Kontraktor Lain
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-1 fw_700 txt_center dfs_48 tfs_48 mfs_28 mmt_10" style="color: #B3893F;">
                                Adakah anda juga menghadapi masalah berikut?
                            </div>
                        </div>
                        <div class="ProblemFace">
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/Problem-1.png">
                                </div>
                                <div class="txt">Pendapatan Tidak Konsisten</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/Problem-2.png">
                                </div>
                                <div class="txt">Kerja Yang Membosankan</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/Problem-3.png">
                                </div>
                                <div class="txt">Keuntungan Yang Rendah</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/Problem-4.png">
                                </div>
                                <div class="txt">Pertandingan Harga Yang Buruk</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/Problem-5.png">
                                </div>
                                <div class="txt">Kekurangan Projek Untuk Pekerja</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="NotYourIssues">
                <div class="row justify-content-md-center">
                    <div class="col-lg-12">
                        <div class="col-inner">
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-1 fw_700 txt_center dfs_40 tfs_40 mfs_25" style="color: #F1C282;">
                                    Sebenarnya.. <span class="d-block d-sm-none"></span>ini bukan masalah anda.
                                </div>
                            </div>
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_600 mfw_500 txt_center txt_white dfs_26 tfs_26 mfs_17 dmt_15 tmt_15 mmt_10">
                                    Cuma anda kekurangan peluang untuk meningkatkan kompetensi kemahiran anda, dan mengelakkan bisnes HANYA menawarkan perkhidmatan mengecat.
                                </div>
                            </div>
                            <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable dmt_45 tmt_45" data-title="image" data-hide-on="desktop">
                                <img src="assets/images/Suggest-SurfaceArchi-Wall-Art.png" class="elIMG" alt="">
                            </div>
                            <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable mmt_15" data-title="image" data-hide-on="mobile">
                                <img src="assets/images/Suggest-SurfaceArchi-Wall-Art-Mobile.png" class="elIMG" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-12 dmt_60 tmt_60 mmt_10">
                        <div class="col-inner">
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 mfw_400 txt_center color_third m-txt_white dfs_32 tfs_32 mfs_17">
                                    Kandungan Bengkel Kami Termasuk:
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 dmt_55 tmt_55 mmt_25">
                        <div class="col-inner">
                            <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable" data-title="image">
                                <img src="assets/images/Monthly-Step-1.png" class="elIMG" alt="">
                            </div>
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_white txt_center dfs_25 tfs_25 mfs_18 dmt_15 tmt_15">
                                    Perkenalan Bahan Cat Bertekstur, Cat Kapur, Plaster Rekaan dll.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 dmt_55 tmt_55 mmt_25">
                        <div class="col-inner">
                            <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable" data-title="image">
                                <img src="assets/images/Monthly-Step-2.png" class="elIMG" alt="">
                            </div>
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_white txt_center dfs_25 tfs_25 mfs_18 dmt_15 tmt_15">
                                    Produk Terhangat Untuk Pemilik Rumah
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 dmt_55 tmt_55 mmt_25">
                        <div class="col-inner">
                            <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable" data-title="image">
                                <img src="assets/images/Monthly-Step-3.png" class="elIMG" alt="">
                            </div>
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_white txt_center dfs_25 tfs_25 mfs_18 dmt_15 tmt_15">
                                    Memperlajari Langkah-Langkah Untuk Aplikasi
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 dmt_55 tmt_55 mmt_25">
                        <div class="col-inner">
                            <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable" data-title="image">
                                <img src="assets/images/Monthly-Step-4.png" class="elIMG" alt="">
                            </div>
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_white txt_center dfs_25 tfs_25 mfs_18 dmt_15 tmt_15">
                                    Masalah-masalah Yang Sering Berlaku
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 dmt_55 tmt_55 mmt_25">
                        <div class="col-inner">
                            <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable" data-title="image">
                                <img src="assets/images/Monthly-Step-5.png" class="elIMG" alt="">
                            </div>
                            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_white txt_center dfs_25 tfs_25 mfs_18 dmt_15 tmt_15">
                                    Aplikasi Berpraktikal
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Weekly Skill -->
    <section id="WeeklySkill">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-1 fw_700 txt_center dfs_36 tfs_36 mfs_20 mmt_25">
                                Setiap Bulan Bengkel Akan <span class="d-md-block"></span>Menganjurkan Produk Yang Berbezaan
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-1 mlh1-2 fw_700 txt_center dfs_52 tfs_52 mfs_26 dmt_15 tmt_15 mmt_10" style="color: #B3893F;">
                                Dari Tahap Mudah Sehingga Tahap Tinggi <span class="d-md-block"></span><u>Mengikuti Permintaan Para Peserta</u>
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-3 fw_400 txt_center dfs_32 tfs_32 mfs_18 dmt_15 tmt_15 mmt_10">
                                （Kesemuanya ini adalah Kemahiran Plaster Dinding Dari Eropah）
                            </div>
                        </div>
                        <div class="elImageWrapper de-image-block MarginTop0 MarginAuto dwidth_80 de-editable" data-title="image" data-hide-on="desktop">
                            <img src="assets/images/Advantage-Skill.png" class="elIMG" alt="">
                        </div>
                        <div class="elImageWrapper de-image-block MarginTop0 MarginAuto de-editable AdvantageMobile" data-title="image" data-hide-on="mobile">
                            <img src="assets/images/Advantage-Skill-Mobile.png" class="elIMG" alt="">
                        </div>
                    </div>
                </div>
                <div class="txt_center">
                    <a href="<?=$GoogleFormButton?>" class="SurfaceGoogleForm type_one dmt_45 tmt_45 mmt_15" target="_blank"
                        rel="noopener noreferrer">
                        <span class="topTitle">PENDAFTARAN PERCUMA SEKARANG</span>
                        <span class="bottomTitle">Setiap Bengkel TERHAD KEPADA 30 ORANG SEHAJA</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="DonewithBrand" class="row justify-content-md-center dmt_45 tmt_45 mmt_15">
                <div class="col-lg-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 txt_center dfs_38 tfs_38 mfs_20">
                                Surface Archi Telah Ditubuhkan Selama 7 Tahun
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_center dfs_28 tfs_28 mfs_17 dmt_10 tmt_10 mmt_10">
                                Produk kami telah diiktiraf oleh pelbagai koporat terkenal
                            </div>
                        </div>
                        <div class="BrandDone">
                            <div class="list AW_Root_Beer"><img src="assets/images/Brand/AW-Root-Beer.svg" alt=""></div>
                            <div class="list Adidas"><img src="assets/images/Brand/Adidas.svg" alt=""></div>
                            <div class="list Affiniti"><img src="assets/images/Brand/Affiniti.png" alt=""></div>
                            <div class="list AmberChia"><img src="assets/images/Brand/AmberChia.png" alt=""></div>
                            <div class="list Bata"><img src="assets/images/Brand/Bata.svg" alt=""></div>
                            <div class="list Genting"><img src="assets/images/Brand/Genting-Berhad.png" alt=""></div>
                            <div class="list Google"><img src="assets/images/Brand/Google.svg" alt=""></div>
                            <div class="list IJM"><img src="assets/images/Brand/IJM.svg" alt=""></div>
                            <div class="list JKR"><img src="assets/images/Brand/JKR.png" alt=""></div>
                            <div class="list McDonalds"><img src="assets/images/Brand/McDonalds.png" alt=""></div>
                            <div class="list sunway_property"><img src="assets/images/Brand/sunway_property_logo.png" alt=""></div>
                            <div class="list SushiORI"><img src="assets/images/Brand/Sushi-Ori.png" alt=""></div>
                            <div class="list Tealive"><img src="assets/images/Brand/Tealive.png" alt=""></div>
                            <div class="list Tropicana"><img src="assets/images/Brand/Tropicana.png" alt=""></div>
                            <div class="list Starbucks"><img src="assets/images/Brand/Starbucks.svg" alt=""></div>
                            <div class="list Boost"><img src="assets/images/Brand/Boost.png" alt=""></div>
                            <div class="list Chanel"><img src="assets/images/Brand/Chanel.svg" alt=""></div>
                            <div class="list Oliseum"><img src="assets/images/Brand/Oliseum-Fitness.png" alt=""></div>
                            <div class="list EcoWorld"><img src="assets/images/Brand/EcoWorld.png" alt=""></div>
                            <div class="list Erya"><img src="assets/images/Brand/Erya.png" alt=""></div>
                            <div class="list Mini_Auto"><img src="assets/images/Brand/Mini-Auto-Bavaria.png" alt=""></div>
                            <div class="list Novo"><img src="assets/images/Brand/Novo.png" alt=""></div>
                            <div class="list Putien"><img src="assets/images/Brand/Putien.png" alt=""></div>
                            <div class="list Samsung"><img src="assets/images/Brand/Samsung.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Surface Archi Sifu -->
    <section id="SurfaceSifu">
        <div class="container">
            <!--<div class="row justify-content-md-center">-->
            <!--    <div class="col-lg-12">-->
            <!--        <div class="col-inner">-->
            <!--            <div class="elHeadlineWrapper de-editable" data-title="Paragraph">-->
            <!--                <div class="excellentMaster elHeadline MarginTop0 lh1-3 mlh1-2 fw_700 txt_center txt_white dfs_48 tfs_48 mfs_23">-->
            <!--                    Dari Pemandu Trak hingga menjadi <span class="d-md-block"></span>Pakar Surface Archi yang Cemerlang!<img src="assets/images/Mask-Money.png">-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row dwidth_95 MarginAuto" data-title="Row">-->
            <!--    <div id="" class="col-md-12 innerContent col_left" data-title="full column">-->
            <!--        <div class="col-inner">-->
            <!--            <div id="ultimate-video-51"-->
            <!--                class="ult-video vc_custom_51 ult-adjust-bottom-margin ultimate-video-51 ultv-51 dmt_55 tmt_45 mmt_35">-->
            <!--                <div class="ultv-video ultv-aspect-ratio-16_9 ultv-subscribe-responsive-none" data-videotype="vimeo_video">-->
            <!--                    <div class="ultv-video__outer-wrap" data-autoplay="0" data-device="false" data-iconbg="#3A3A3A"-->
            <!--                        data-overcolor="" data-defaultbg="#1f1f1e" data-defaultplay="image" style="color: rgb(58, 58, 58);">-->
            <!--                        <div class="ultv-video__play"-->
            <!--                            data-src="https://player.vimeo.com/video/565514476?loop=0&title=0&portrait=0&byline=0&color=dcad5d&autopause=0&autoplay=1">-->
            <!--                            <img class="ultv-video__thumb" src="assets/images/Vimeo/Vasari-Applicator-Chuan.jpg">-->
            <!--                            <div class="ultv-video__play-icon  ultv-animation-none"><img src="assets/images/big-play-button.png"></div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="row justify-content-md-center">
                <div class="col-lg-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-2 fw_700 txt_center txt_white dfs_48 tfs_48 mfs_23">
                                Mengajari Pelbagai Kemahiran <span class="d-md-block"></span>Yang Kreatif dan Menarik
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row dwidth_95 MarginAuto" data-title="Row">
                <div id="" class="col-md-6 innerContent col_left" data-title="full column">
                    <div class="col-inner">
                        <div id="ultimate-video-55"
                            class="ult-video vc_custom_55 ult-adjust-bottom-margin ultimate-video-55 ultv-55 dmt_45 mmt_20">
                            <div class="ultv-video ultv-aspect-ratio-16_9 ultv-subscribe-responsive-none" data-videotype="vimeo_video">
                                <div class="ultv-video__outer-wrap" data-autoplay="0" data-device="false" data-iconbg="#3A3A3A"
                                    data-overcolor="" data-defaultbg="#1f1f1e" data-defaultplay="image" style="color: rgb(58, 58, 58);">
                                    <div class="ultv-video__play"
                                        data-src="https://player.vimeo.com/video/565518512?loop=0&title=0&portrait=0&byline=0&color=dcad5d&autopause=0&autoplay=1">
                                        <img class="ultv-video__thumb" src="assets/images/Vimeo/Apply-Limewash.jpg">
                                        <div class="ultv-video__play-icon  ultv-animation-none"><img src="assets/images/big-play-button.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="" class="col-md-6 innerContent col_left" data-title="full column">
                    <div class="col-inner">
                        <div id="ultimate-video-54"
                            class="ult-video vc_custom_54 ult-adjust-bottom-margin ultimate-video-54 ultv-54 dmt_45 mmt_20">
                            <div class="ultv-video ultv-aspect-ratio-16_9 ultv-subscribe-responsive-none" data-videotype="vimeo_video">
                                <div class="ultv-video__outer-wrap" data-autoplay="0" data-device="false" data-iconbg="#3A3A3A"
                                    data-overcolor="" data-defaultbg="#1f1f1e" data-defaultplay="image" style="color: rgb(58, 58, 58);">
                                    <div class="ultv-video__play"
                                        data-src="https://player.vimeo.com/video/565516921?loop=0&title=0&portrait=0&byline=0&color=dcad5d&autopause=0&autoplay=1">
                                        <img class="ultv-video__thumb" src="assets/images/Vimeo/Apply-Vasari-Lustro.jpg">
                                        <div class="ultv-video__play-icon  ultv-animation-none"><img src="assets/images/big-play-button.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row dwidth_95 MarginAuto" data-title="Row">
                <div id="" class="col-md-365 innerContent col_left" data-title="full column">
                    <div class="col-inner">
                        <div id="ultimate-video-52"
                            class="ult-video vc_custom_52 ult-adjust-bottom-margin ultimate-video-52 ultv-52 dmt_25 mmt_0">
                            <div class="ultv-video ultv-aspect-ratio-16_9 ultv-subscribe-responsive-none" data-videotype="vimeo_video">
                                <div class="ultv-video__outer-wrap" data-autoplay="0" data-device="false" data-iconbg="#3A3A3A"
                                    data-overcolor="" data-defaultbg="#1f1f1e" data-defaultplay="image" style="color: rgb(58, 58, 58);">
                                    <div class="ultv-video__play"
                                        data-src="https://player.vimeo.com/video/565516613?loop=0&title=0&portrait=0&byline=0&color=dcad5d&autopause=0&autoplay=1">
                                        <img class="ultv-video__thumb" src="assets/images/Vimeo/Vasari-Applicator.jpg">
                                        <div class="ultv-video__play-icon  ultv-animation-none"><img src="assets/images/big-play-button.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="" class="col-md-635 innerContent col_left" data-title="full column">
                    <div class="col-inner">
                        <div id="ultimate-video-53"
                            class="ult-video vc_custom_53 ult-adjust-bottom-margin ultimate-video-53 ultv-53 dmt_25 mmt_20">
                            <div class="ultv-video ultv-aspect-ratio-16_9 ultv-subscribe-responsive-none" data-videotype="vimeo_video">
                                <div class="ultv-video__outer-wrap" data-autoplay="0" data-device="false" data-iconbg="#3A3A3A"
                                    data-overcolor="" data-defaultbg="#1f1f1e" data-defaultplay="image" style="color: rgb(58, 58, 58);">
                                    <div class="ultv-video__play"
                                        data-src="https://player.vimeo.com/video/565515966?loop=0&title=0&portrait=0&byline=0&color=dcad5d&autopause=0&autoplay=1">
                                        <img class="ultv-video__thumb" src="assets/images/Vimeo/Apply-Vasari-Veneziano-Plaster.jpg">
                                        <div class="ultv-video__play-icon  ultv-animation-none"><img src="assets/images/big-play-button.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-3 fw_400 txt_center txt_white dfs_36 tfs_36 mfs_19 dmt_30 tmt_30 mmt_15">
                                Membantukan Anda Mula Kerjaya Di Plaster Dinding <span class="d-md-block"></span>Berkreatif Dalam Masa Yang Tersingkat <span class="d-block d-sm-none"></span><span class="fw_700 mfs_21" style="color: #F1C282;">Pastinya lebih menguntungkan anda!</span>
                            </div>
                        </div>
                        <div class="txt_center">
                            <a href="<?=$GoogleFormButton?>" class="SurfaceGoogleForm type_two dmt_45 tmt_45 mmt_25" target="_blank"
                                rel="noopener noreferrer">
                                <span class="topTitle">PENDAFTARAN PERCUMA SEKARANG</span>
                                <span class="bottomTitle">Setiap Bengkel TERHAD KEPADA 30 ORANG SEHAJA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include'views/brandEffect.php'?>

    <!-- Other Deco Design -->
    <section id="OtherDecoDesign">
        <div class="container">
            <div class="row align-items-md-center justify-content-md-center">
                <div class="col-md-12" style="padding: 0px;">
                    <div class="col-inner">
                        <div class="contractCTA">
                            <div class="left">
                                <div class="logo">
                                    <img src="assets/images/dealer/Vasari-Logo.png">
                                </div>
                                <div class="paintTong">
                                    <img src="assets/images/Lime-Paint-Bucket.png">
                                </div>
                            </div>
                            <div class="right">
                                <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                                    <div class="elHeadline MarginTop0 lh1-3 mlh1-4 font_LibreBaskerville fw_700 m-txt_center dfs_33 tfs_33 mfs_26">
                                        Bahan Dinding Kegemaran Kontrakor: Vasari Lime Paint
                                    </div>
                                </div>
                                <div class="ContractorLove">
                                    <div class="list"><span></span>Hasil Yang Menarik</div>
                                    <div class="list"><span></span>Senang Aplikasi</div>
                                    <div class="list"><span></span>Kurang Kecacatan</div>
                                    <div class="list"><span></span>Keuntungan Yang Lumayan</div>
                                    </div>
                                <div class="txt_center">
                                    <a href="<?=$GoogleFormButton?>" class="SurfaceGoogleForm type_one dmt_25 tmt_25 mmt_25" target="_blank"
                                        rel="noopener noreferrer">
                                        <span class="topTitle">PENDAFTARAN PERCUMA SEKARANG</span>
                                        <span class="bottomTitle">Setiap Bengkel TERHAD KEPADA 30 ORANG SEHAJA</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-md-center justify-content-md-center">
                <div class="col-md-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 font_LibreBaskerville txt_center dfs_48 tfs_48 mfs_24">
                                Produk Hangat Yang Lain
                            </div>
                        </div>
                        <div class="elImageWrapper de-image-block MarginTop0 MarginAuto mwidth_45 de-editable mmt_5" data-title="image">
                            <img src="assets/images/Mask-Money-2.png" class="elIMG" alt="">
                        </div>
                        <div class="otherDesign">
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/popular-design-1.jpeg">
                                </div>
                                <div class="txt">Vasari Veneziano</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/popular-design-2.jpg">
                                </div>
                                <div class="txt">Deco Cemento</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/popular-design-3.jpg">
                                </div>
                                <div class="txt">CeboSi Decoro</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/popular-design-4.jpg">
                                </div>
                                <div class="txt">Loggia Plasma 3D</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/popular-design-5.jpg">
                                </div>
                                <div class="txt">Vasari Lustro</div>
                            </div>
                            <div class="list">
                                <div class="image">
                                    <img src="assets/images/popular-design-6.jpg">
                                </div>
                                <div class="txt">Vasari Lime Paint</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate -->
    <section id="Certificate">
        <div class="container">
            <div class="row align-items-md-center justify-content-md-between" style="padding: 0px;">
                <div class="col-md-5">
                    <div class="col-inner">
                        <div class="elImageWrapper de-image-block MarginTop0 de-editable" data-title="image"><img
                            src="assets/images/Certificate.png" class="elIMG certify" alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 layer">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 txt_center txt_white dfs_50 tfs_50 mfs_30">
                                Tunggu Apa Lagi?
                            </div>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_center txt_white dfs_25 tfs_25 mfs_18 dmt_30 tmt_30 mmt_25">
                                Daftarkan Kursus Penuh Dan Ujian Kami Untuk Menjadi Surface Archi Partner Applicator Sekarang
                            </div>
                        </div>
                        <div class="txt_center">
                            <a href="<?=$GoogleFormButton?>" class="SurfaceGoogleForm type_one dmt_45 tmt_45 mmt_25" target="_blank"
                                rel="noopener noreferrer">
                                <span class="topTitle">PENDAFTARAN PERCUMA SEKARANG</span>
                                <span class="bottomTitle">Setiap Bengkel TERHAD KEPADA 30 ORANG SEHAJA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Largest Factory -->
    <section id="LargestFactory">
        <div class="container">
            <div class="row align-items-md-center justify-content-md-center">
                <div class="col-md-10">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-3 font_LibreBaskerville fw_700 txt_center dfs_42 tfs_42 mfs_28">
                                Kilang Pengeluar Kapur Terbesar Di Malaysia
                            </div>
                        </div>
                        <div class="elImageWrapper de-image-block MarginTop0 MarginAuto mwidth_45 de-editable mmt_5" data-title="image">
                            <img src="assets/images/Mask-Money-2.png" class="elIMG" alt="">
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-3 fw_400 txt_center dfs_28 tfs_28 mfs_22 dmt_10 tmt_10 mmt_5">
                                Syarikat Pengeluaran Kapur Utama Kami Juga <span class="d-md-block"></span>Telah Ditubuhkan Selama 28Tahun
                            </div>
                        </div>
                        <div class="elImageWrapper de-image-block MarginTop0 de-editable dmt_30 tmt_30 mmt_25" data-title="image"><img
                            src="assets/images/CAO-Factory.jpg" class="elIMG" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); border-radius: 15px;"></div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 MarginAuto lh1-3 mlh1-4 fw_400 txt_center dfs_25 tfs_25 mfs_18 dmt_30 tmt_30 mmt_25">
                                Vasari Dari Amerika Syarikat, Jenama Utama Bawah Serface Archi. <span class="d-md-block"></span>Untuk meningkatkan kualiti, kecekapan pengeluaran dan logistic, kami turut menubuhkan kilang pengeluaran produk-produk Vasari.
                            </div>
                        </div>
                        <div class="CompanyFactory">
                            <div class="list">
                                <img src="assets/images/Factory-Company-1.jpg">
                            </div>
                            <div class="list">
                                <img src="assets/images/Factory-Company-2.jpg">
                            </div>
                            <div class="list">
                                <img src="assets/images/Factory-Company-5.jpg">
                            </div>
                            <div class="list">
                                <img src="assets/images/Factory-Company-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="Contact" class="text-center" style="background: #1A1A1A;">
        <div class="container">
            <div class="row align-items-md-center justify-content-md-center" data-hide-on="desktop">
                <div class="col-md-12">
                    <div class="col-inner">
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 font_LibreBaskerville fw_700 txt_center txt_white dfs_40 tfs_40 mfs_22">
                                Kunjungilah HQ Surface Archi <span class="d-md-block"></span>Untuk Info Lanjutan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-md-center justify-content-md-center dmt_45 tmt_45 mmt_0">
                <div class="col-md-7">
                    <div class="col-inner">
                        <div class="elImageWrapper de-image-block MarginTop0 de-editable" data-title="image"><img
                            src="assets/images/dealer/SurfaceArchi-Logo.png" class="elIMG logo"></div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_700 txt_center txt_white dfs_40 tfs_40 mfs_23 mmt_25" data-hide-on="mobile">
                                Kunjungilah HQ Surface Archi Untuk Info Lanjutan
                            </div>
                        </div>
                        <div class="contactInfo">
                            <div class="left">
                                <div class="title">CONTACT:</div>
                                <div class="address">A-G-06, Emerald Avenue,Jalan PS 11, Prima Selayang,68100 Batu Caves, Selangor.</div>
                                <div class="phoneNumber">
                                    <div class="choose">
                                        <a href="tel:+60127271962" target="_blank" rel="noopener">+6012-727 1962</a>
                                    </div>
                                    <div class="choose">
                                        <a href="tel:+60123882538" target="_blank" rel="noopener">+6012-388 2538</a>
                                    </div>
                                </div>
                                <div class="email">info@surfacearchi.com</div>
                                <div class="social">
                                    <div class="icon">
                                        <a href="<?=$socialInstagram?>" target="_blank" rel="noopener"><img src="assets/images/instagram_White.png"></a>
                                    </div>
                                    <div class="icon">
                                        <a href="<?=$socialFacebook?>" target="_blank" rel="noopener"><img src="assets/images/facebook_White.png"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="title">OPENNING HOUR</div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>MONDAY</td>
                                                <td>9:00 AM - 06:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td>TUESDAY</td>
                                                <td>9:00 AM - 06:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td>WEDNESDAY</td>
                                                <td>9:00 AM - 06:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td>THURSDAY</td>
                                                <td>9:00 AM - 06:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td>FRIDAY</td>
                                                <td>9:00 AM - 06:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td>SATURDAY</td>
                                                <td>9:00 AM - 01:30 PM</td>
                                            </tr>
                                            <tr>
                                                <td>SUNDAY</td>
                                                <td>CLOSED</td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-inner">
                        <div class="elImageWrapper de-image-block MarginTop0 de-editable" data-title="image"><img
                            src="assets/images/Selayang-HQ.jpg" class="elIMG"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-inner">
                        <div class="txt_center">
                            <a href="<?=$GoogleFormButton?>" class="SurfaceGoogleForm type_one dmt_45 tmt_45 mmt_25" target="_blank"
                                rel="noopener noreferrer">
                                <span class="topTitle">PENDAFTARAN PERCUMA SEKARANG</span>
                                <span class="bottomTitle">Setiap Bengkel TERHAD KEPADA 30 ORANG SEHAJA</span>
                            </a>
                        </div>
                        <div class="elHeadlineWrapper de-editable" data-title="Paragraph">
                            <div class="elHeadline MarginTop0 lh1-3 mlh1-4 fw_400 txt_center txt_white dfs_16 tfs_16 mfs_16 dmt_40 tmt_40 mmt_25">
                                COPYRIGHT©2024 SURFACE ARCHI, ALL RIGHTS RESERVED
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="FloatNational">
        <div class="icon modal-toggle">
            <svg id="Change" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <g id="Page-1_5_">
                        <g id="_x30_06---Conversation">
                            <path id="Shape_12_" d="m469.333 221.867h-8.533v-42.667c-.001-6.414-3.598-12.287-9.312-15.202s-12.58-2.379-17.773 1.386l-78.071 56.482h-14.31v-179.2c-.029-23.552-19.115-42.638-42.667-42.666h-256c-23.553.028-42.639 19.114-42.667 42.667v204.8c.028 23.552 19.114 42.638 42.667 42.667h8.533v42.666c-.007 6.422 3.591 12.305 9.312 15.223s12.595 2.378 17.79-1.399l78.063-56.491h14.302v179.2c.028 23.552 19.114 42.638 42.667 42.667h256c23.552-.028 42.638-19.114 42.667-42.667v-204.8c-.029-23.552-19.115-42.638-42.668-42.666zm-315.733 51.2c-1.797-.003-3.548.564-5.001 1.621l-80.332 58.112v-51.2c0-4.713-3.821-8.533-8.533-8.533h-17.067c-14.138 0-25.6-11.462-25.6-25.6v-204.8c0-14.138 11.462-25.6 25.6-25.6h256c14.138 0 25.6 11.462 25.6 25.6v179.2h-110.934c-23.552.028-42.638 19.114-42.667 42.667v8.533zm341.333 196.266c0 14.138-11.462 25.6-25.6 25.6h-256c-14.138 0-25.6-11.462-25.6-25.6v-204.8c0-14.139 11.462-25.6 25.6-25.6h145.067c1.796-.001 3.546-.568 5.001-1.621l80.333-58.112v51.2c0 4.713 3.82 8.533 8.533 8.533h17.067c14.138 0 25.6 11.462 25.6 25.6v204.8z">
                            </path>
                            <path id="Shape_11_" d="m213.871 207.795c1.249 3.333 4.436 5.54 7.996 5.538 1.025-.004 2.041-.186 3.004-.538 2.12-.795 3.837-2.4 4.773-4.461s1.015-4.41.219-6.53l-51.2-136.533c-1.245-3.339-4.433-5.552-7.996-5.552s-6.751 2.214-7.996 5.552l-51.2 136.533c-1.067 2.857-.529 6.065 1.411 8.418 1.94 2.352 4.988 3.491 7.996 2.987 3.007-.504 5.517-2.575 6.584-5.431l17.118-45.645h52.173zm-62.891-62.728 19.686-52.497 19.686 52.497z">
                            </path>
                            <g clip-rule="evenodd" fill-rule="evenodd">
                                <path id="Path_11_" d="m409.6 315.733h-59.733v-25.6c0-4.713-3.821-8.533-8.533-8.533s-8.533 3.821-8.533 8.533v25.6h-59.733c-4.713 0-8.533 3.821-8.533 8.533s3.82 8.533 8.533 8.533h97.707c-8.954 18.621-20.237 36.029-33.579 51.806-5.147-6.805-9.771-13.991-13.833-21.495-1.372-2.727-4.094-4.515-7.142-4.69s-5.957 1.288-7.633 3.84-1.863 5.803-.491 8.53c5.018 9.418 10.839 18.386 17.399 26.803-14.164 15-30.297 28.009-47.957 38.673-2.683 1.448-4.389 4.217-4.477 7.265-.087 3.047 1.458 5.91 4.053 7.509s5.847 1.693 8.53.244c18.777-11.03 35.93-24.614 50.97-40.363 14.706 16.612 32.375 30.343 52.105 40.491 4.218 2.107 9.345.395 11.452-3.823s.395-9.345-3.823-11.452c-18.296-9.484-34.622-22.359-48.111-37.939 16.926-19.63 30.835-41.672 41.267-65.399h20.095c4.713 0 8.533-3.82 8.533-8.533s-3.82-8.533-8.533-8.533z">
                                </path>
                                <path id="Path_10_" d="m68.267 34.133h-25.6c-4.713 0-8.533 3.821-8.533 8.533v25.6c0 4.713 3.821 8.533 8.533 8.533s8.533-3.82 8.533-8.533v-17.066h17.067c4.713 0 8.533-3.821 8.533-8.533s-3.82-8.534-8.533-8.534z">
                                </path>
                                <path id="Path_9_" d="m469.333 435.2c-4.713 0-8.533 3.821-8.533 8.533v17.067h-17.067c-4.713 0-8.533 3.821-8.533 8.533 0 4.713 3.821 8.533 8.533 8.533h25.6c4.713 0 8.533-3.821 8.533-8.533v-25.6c.001-4.712-3.82-8.533-8.533-8.533z">
                                </path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="modal-down">
            <div class="modal-overlay modal-toggle"></div>
            <div class="modal-wrapper modal-transition">
                <div class="modal-body">
                    <div class="modal-conten">
                        <div class="choose">
                            <div class="list">
                                <a href="https://www.surfacearchi.com/academy-cn/" rel="noopener">
                                    <div class="text">中文</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a id="MoveWhatsApp" href="<?=$WhatsAppLink?>" class="livechat-girl js-livechat-girl animated" target="_blank" rel="noopener noreferrer">
        <div id="MoveWhatsAppheader">
            <i class="bi bi-whatsapp float-whatsapp" style=" position: absolute; z-index: 50;"></i>
            <div class="animated-circles js-animated-circles">
                <div class="circle c-1"></div>
                <div class="circle c-2"></div>
                <div class="circle c-3"></div>
            </div>
        </div>
    </a>

    <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"-->
    <!--    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">-->
    <!--</script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.countup.js@1.0.1/jquery.countup.min.js"
        integrity="sha256-t9pXQOguE+roPCRFlM27kmb4ISOR4lL1LdMuEPsvlx4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/waypoints@4.0.1/lib/jquery.waypoints.min.js"
        integrity="sha256-No2qtnsaWysoAu27rHmiqkupkqLr+cZ7mK14TYAEAYw=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="assets/js/countDown.js?<?php echo date("His", filemtime('assets/js/countDown.js')); ?>"></script>
    <!--<script type="text/javascript" src="assets/js/countVasari.js?<?php echo date("His", filemtime('assets/js/countVasari.js')); ?>"></script>-->
    <!--<script type="text/javascript" src="assets/js/countCebos.js?<?php echo date("His", filemtime('assets/js/countCebos.js')); ?>"></script>-->
    <script type="text/javascript" src="assets/js/countCombine.js?<?php echo date("His", filemtime('assets/js/countCombine.js')); ?>"></script>

    <script>
        $('.modal-toggle').on('click', function (e) {
            e.preventDefault();
            $('.modal-down').toggleClass('is-visible');
            // $('body').toggleClass('fixed-modal');

            if ($('.modal-down').hasClass('is-visible')) {
                // document.body.classList.add("fixed-modal");
                const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
                const body = document.body;
                body.classList.add("fixed-modal");
                body.style.position = 'fixed';
                body.style.top = `-${scrollY}`;
            } else {
                const body = document.body;
                const scrollY = body.style.top;
                body.style.position = '';
                body.style.top = '';
                window.scrollTo(0, parseInt(scrollY || '0') * -1);
                body.classList.remove("fixed-modal");
            }
        });
        window.addEventListener('scroll', () => {
            document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
        });
    </script>
    <script>
        const swiperMaker = new Swiper('.swiper-Maker', {
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            slidesPerView: 'auto',
            centeredSlides: true,
            initialSlide: 2,
            spaceBetween: 15,
        });

        const swiperFactoryImages = new Swiper('.swiperFactoryImages', {
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                    },
                },
                1100: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                    },
                },

                1500: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                    },
                },
            },
            slidesPerView: "auto",
            spaceBetween: 15,
            initialSlide: 2,
            loop: true,
            centeredSlides: true,
        });

        const swiperCompletedProject = new Swiper('.swiperCompletedProject', {
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                    },
                },
                1100: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                    },
                },

                1500: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                    },
                },
            },
            slidesPerView: "auto",
            spaceBetween: 15,
            initialSlide: 2,
            loop: true,
            centeredSlides: true,
        });
        
        const swiperVasariEffect = new Swiper('.swiper_VasariEffect', {
            autoplay: {
                delay: 7000,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            speed: 800,
            slidesPerView: 'auto',
            spaceBetween: 15,
            loop: true,
            centeredSlides: true,
            initialSlide: 3,
        });
        
        const swiperCebosEffect = new Swiper('.swiper_CebosEffect', {
            autoplay: {
                delay: 6500,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            speed: 800,
            slidesPerView: 'auto',
            spaceBetween: 15,
            loop: true,
            centeredSlides: true,
            initialSlide: 3,
        });
        
        const swiperLoggiaEffect = new Swiper('.swiper_LoggiaEffect', {
            autoplay: {
                delay: 7000,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            speed: 800,
            slidesPerView: 'auto',
            spaceBetween: 15,
            loop: true,
            centeredSlides: true,
            initialSlide: 3,
        });
        
        const swiperMarmorinoEffect = new Swiper('.swiper_MarmorinoEffect', {
            autoplay: {
                delay: 6500,
                disableOnInteraction: true,
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            speed: 800,
            slidesPerView: 'auto',
            spaceBetween: 15,
            loop: true,
            centeredSlides: true,
            initialSlide: 3,
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"
        integrity="sha512-HaoDYc3PGduguBWOSToNc0AWGHBi2Y432Ssp3wNIdlOzrunCtB2qq6FrhtPbo+PlbvRbyi86dr5VQx61eg/daQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>