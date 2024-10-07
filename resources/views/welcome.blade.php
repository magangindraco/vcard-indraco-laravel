<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Indrao, Indraco Jaya Perkasa, Indraco Webdev">
    <meta name="generator" content="">
    <title>INDRACO</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon-indraco.ico">
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/HelveticaNeue.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <?php

    $filename = __DIR__ . 'vcard/IBD.vcf';

    $vcard = @file_get_contents('vcard/IBD.vcf');
     if ($vcard) {
        $pemisah = explode(PHP_EOL, $vcard);
    } else {
        echo "file ga ditemukan";
    }
    $isi = ($vcard);
    $content = str_replace(["\r\n", "\r"], "\n", $isi);



    $content = preg_replace("/\n(?:[ \t])/", "", $content);
    $lines = explode("\n", $content);

    $nama = substr($lines[4], 3);
    $title = substr($lines[6], 6);
    $telprumah = substr($lines[9], 20);
    $fax = substr($lines[10], 18);
    $email = substr($lines[7], 21);
    $alamat = str_replace(";", " ", substr($lines[11], 26));
    $telp = substr($lines[8], 20);
    $web = substr($lines[12], 4);
    $web2 = substr($lines[13], 4);
    $pt = substr($lines[5], 4);
    $gambar = "data:image/jpeg;base64," . (substr($lines[15], 26));

    ?>


    <div class="wrapper shadow shadow-lg">

        <!-- header -->
        <header class="kolom-header text-center">
            <div class="container-fluid">
                <div class="py-5"><img src="assets/img/logo-color.png" width="135" height="auto" alt=""></div>
                <div>
                    <div class="img-circle"><img src="<?= $gambar ?>" class="img-fluid w-100" alt=""></div>
                </div>
                <div class="py-4">
                    <div class="title mb-2"><span><?= $nama ?></span></div>
                    <div class="text"><span><?= $pt ?></span></div>
                    <div class="text"><span><?= $title ?></span></div>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- menu -->
        <div class="kolom-menu">
            <div class="btn-group w-100">
                <a href="https://indraco.com/brochures?lang=en" target="_blank" class="btn btn-dark">
                    <img src="assets/img/ikon-brosur.png" width="25" height="25" alt=""
                        class="mb-1"><span>BROCHURES</span>
                </a>
                <a href="https://indraco.com/" target="_blank" class="btn btn-dark">
                    <img src="assets/img/ikon-web.png" width="25" height="25" alt=""
                        class="mb-1"><span>WEBSITE</span>
                </a>
                <a href=vcard/IBD.vcf' target="_blank" class="btn btn-dark">
                    <img src="assets/img/ikon-user.png" width="25" height="25" alt="" class="mb-1"><span>SAVE
                        CONTACT</span>
                </a>
            </div>
        </div>
        <!-- end of menu -->

        <!-- body -->
       <div class="kolom-body bg-dark text-white">
            <div class="container-fluid">
                <ul class="list-unstyled m-0">
                     <li class="media">
                        <img src="assets/img/ikon-mobile.png" width="25" height="25" class="me-4" alt="">
                        <div class="media-body">
                            <?php
                            $strtelp = substr($telp,0,3)." ".substr($telp,3);
                            $telp = $strtelp;
                            ?>
                            <a href="tel:<?php echo $telp; ?>" target="_blank">
                                <div class="media-title"><?php echo $telp; ?></div>
                                <div class="media-text">Mobile</div>
                            </a>
                        </div>
                    </li>
                    <li class="media">
                        <img src="assets/img/ikon-phone.png" width="25" height="25" class="me-4" alt="">
                        <div class="media-body">
                            <?php
                            $strtelprumah = substr($telprumah,0,3)." ".substr($telprumah,3,2)." ".substr($telprumah,5);
                            $telprumah = $strtelprumah;
                            ?>
                            <a href="tel:<?php echo $telprumah; ?>" target="_blank">
                                <div class="media-title"><?php echo $telprumah; ?></div>
                                <div class="media-text">Office</div>
                            </a>
                        </div>
                    </li>
                 
                    <li class="media">
                        <img src="assets/img/ikon-email.png" width="25" height="25" class="me-4" alt="">
                        <div class="media-body">
                            <a href="mailto:<?php echo $email; ?>" target="_blank">
                                <div class="media-title"><?php echo $email; ?></div>
                                <div class="media-text">Email</div>
                            </a>
                        </div>
                    </li>
                     <li class="media">
                        <img src="assets/img/ikon-map.png" width="25" height="25" class="me-4" alt="">
                        <div class="media-body">
                            <a href="https://goo.gl/maps/UmQi3RbKgiBNkjCS6"
                                target="_blank">
                                <div class="media-title">  Jl. Semeru Industri I No.133-135 
                                <br>Kec. Driyorejo, Gresik 61177 
                                <br>Jawa Timur - Indonesia</div>
                                <div class="media-text">Show on map</div>
                            </a>
                        </div>
                    </li>
                    <li class="media">
                        <img src="assets/img/ikon-web.png" width="25" height="25" class="me-4" alt="">
                        <div class="media-body">
                            <a href="<?php echo $web; ?>" target="_blank">
                                <div class="media-title"><?php echo $web; ?></div>
                                <div class="media-text">Website</div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- kontak -->
            <div class="container-fluid kontak text-center pt-0">
                <hr>
                <header class="mb-5">
                    <div class="kontak-title mb-2">CONTACT US.</div>
                    <div class="kontak-lead">
                        Feel free to email us to provide some feedback on our information about us, or to just say
                        hello!
                    </div>
                </header>

                <div class="row g-2">
                    <div class="col-4">
                        <a href="https://goo.gl/maps/UmQi3RbKgiBNkjCS6"
                            target="_blank">
                            <div class="card rounded-4">
                                <div class="card-header border-0">
                                    <img src="assets/img/office-building.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-body pt-0 px-2 pb-4">
                                    <div class="card-title">Our Office</div>
                                    <div class="card-text">
                                      Jl. Semeru Industri I No.133-135 
                                <br>Kec. Driyorejo, Gresik 61177 
                                <br>Jawa Timur
                                <br>Indonesia
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="tel:03199000033" target="blank">
                            <div class="card rounded-4">
                                <div class="card-header border-0">
                                    <img src="assets/img/office-phone.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-body pt-0 px-2 pb-4">
                                    <div class="card-title">Let's Talk</div>
                                    <div class="card-text">
                                        T. +62 31 766 8777 <br>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="mailto:info@indraco.com" target="blank">
                            <div class="card rounded-4">
                                <div class="card-header border-0">
                                    <img src="assets/img/office-envelope.png" class="img-fluid" alt="">
                                </div>
                                <div class="card-body pt-0 px-2 pb-4">
                                    <div class="card-title">Email Inquiry</div>
                                    <div class="card-text">
                                        E. info@indraco.com
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of kontak -->
        </div>
        <!-- end of body -->

        <!-- footer -->
        <footer class="kolom-footer bg-light">
            <div class="container-fluid py-5">
                <div class="mb-5">
                    <div class="mb-3">
                        <img src="assets/img/logo-gray.png" width="131" height="auto" alt="">
                    </div>
                    <div>Indraco Roasting fine exquisite coffee since 1971. </div>
                </div>

                <div class="mb-5">
                    <p class="text-dark mb-3">Links</p>
                    <div class="d-flex w-100">
                        <ul class="list-unstyled w-50 m-0">
                            <li class="mb-2"><a href="https://indraco.com/brands/rasa_sayang/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> Rasa Sayang
                                </a></li>
                            <li class="mb-2"><a href="https://indraco.com/brands/hao_cafe/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> Hao Cafe
                                </a></li>
                            <li class="mb-2"><a href="https://indraco.com/brands/tugu_buaya/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> Tugu Buaya
                                </a></li>
                            <li class="mb-2"><a href="https://indraco.com/brands/uang_emas/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> Uang Emas
                                </a></li>
                        </ul>
                        <ul class="list-unstyled w-50 m-0">
                            <li class="mb-2"><a href="https://indraco.com/brands/jaheku/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> Jaheku
                                </a></li>
                            <li class="mb-2"><a href="https://indraco.com/brands/brochoco/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> BROCHOCO
                                </a></li>
                            <li class="mb-2"><a href="https://indraco.com/brands/ucafe/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> UCAFE
                                </a></li>
                            <li class="mb-2"><a href="https://indraco.com/brands/supresso/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> Supresso
                                </a></li>
                            <li class="mb-2"><a href="https://indraco.com/brands/balicafe/" target="_blank">
                                    <i class="bi bi-chevron-right"></i> Balicafé
                                </a></li>
                        </ul>
                    </div>
                </div>

                <div>
                    <p class="text-dark mb-3">Contact Us</p>
                    <p class="m-0">
                         PT. Indraco Global Indonesia
                    <br>Jl. Semeru Industri I No.133-135
                    <br>Kec. Driyorejo, Gresik 61177
                    <br>Jawa Timur - Indonesia
                    <br>T. +62 31 766 8777, 766 7388

   
                    <br><br>E. info@indraco.com
                    <br>www.indraco.com
                    </p>
                </div>
            </div>

            <div class="container-fluid border-top py-4 text-center">
                 <span>Copyright © 2023 Indraco. All Rights Reserved</span>
            </div>
        </footer>
        <!-- end of footer -->

    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    </script>
</body>

</html>