<html lang="en"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/icon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <!-- Cargar jQuery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">

    <title>Avianca | #NACIONALES</title>
</head>

<body __processed_51faeb82-2044-4888-9b33-7775519cf8b0__="true">

    
    <div class="content_booking">
        <div class="headerPickF">
            <img src="media/icon.png" alt="" class="icon">
            <div class="ciudades">
                <p>AXM</p>
                <img src="media/felchasSF.png" alt="">
                <p>AXM</p>
            </div>
            <div class="fecha">
                <p></p>
            </div>

            <a href="index.php"><img src="media/icon-edit.png" alt=""></a>
        </div>

        <div class="header_info">
            <p>Selecciona tu vuelo de salida - </p>
            <h4>Armenia a Armenia</h4>
        </div>

        <div class="precios">
            <img src="media/precio1.png" alt="" onclick="getTarifa('AXM 08:05 - 09:39 AXM', '', 1, 'normal');">

            <img src="media/precio2.png" alt="" onclick="getTarifa('AXM 09:50 - 11:24 AXM', '', 2, 'normal');">

            <img src="media/precio3.png" alt="" onclick="getTarifa('AXM 15:45 - 17:19 AXM', '', 3, 'normal');">

            <img src="media/precio4.png" alt="" onclick="getTarifa('AXM 18:30 - 20:04 AXM', '', 4, 'normal');">
        </div>


        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left btn-ligth" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Condiciones tarifarias
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <img src="media/pt1.jpg" alt="">
                        <img src="media/pt2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footerLegal">
        <div class="footer-legales">

            <ul class="lista-inferior lista-inferior2 " role="listbox">

                <li role="option">
                    <a href="https://www.avianca.com/co/es/" target="_self" class="text-list-footer" aria-label="© Avianca S.A 2023" role="link">
                        <span class="text-ellipsis">© Avianca S.A 2023</span>
                    </a> <span class="separador">&nbsp;|&nbsp;</span>
                </li>
            </ul>
        </div>
    </div>



<div class="modal modal-container" id="modal_tarifa">
    <div class="content-modal content-modal-np">
        <div class="content_booking">
            <div class="headerPickF headerPickF2">
                <div class="row_txt_">
                    <button type="button" onclick="closeModalTarifa();"><img src="media/regresar.png" alt=""></button>
                    <p>Selecciona tu tarifa</p>
                </div>

                <div class="row_info_">
                    <p id="tarifaText1"><strong> AXM 08:05 - 09:39 BAQ </strong></p>
                    <p id="tarifaText2"> Lun, Nov 28 </p>
                </div>
            </div>

            <div class="container-tabs-cabin">
                <p>Económica</p>
            </div>

            <div class="precios_tarifa" id="precios_tarifa">

            </div>

        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script src="js/booking.js"></script>

<div class="loader_inicial" id="loaderI" style="display: none;">
    <img src="media/loading.png" alt="">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<script>
    setTimeout(function() {
        $('#loaderI').hide();
    }, 3000);
</script>

</body></html>