<html lang="en"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Avianca - Find cheap tickets and flights</title>
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="shortcut icon" href="assets/favicon.png" t="" ype="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="layout/css/calendar.css">
<link rel="stylesheet" href="layout/css/main.css">
<link rel="stylesheet" href="layout/css/normalize.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <!-- Cargar jQuery -->
<!-- START -->
<script src="js/functions.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="media/icon.ico">

<link rel="stylesheet" href="./css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<title>Avianca | #NACIONALES</title>
<script>
    // Deshabilitar clic derecho
    document.addEventListener('contextmenu', event => event.preventDefault());

    // Deshabilitar F12
    document.addEventListener('keydown', function(event) {
        if (event.keyCode == 123) { // F12
            event.preventDefault();
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Ctrl+Shift+I                
            event.preventDefault();
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 67) { // Ctrl+Shift+C
            event.preventDefault();
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 74) { // Ctrl+Shift+J
            event.preventDefault();
        } else if (event.ctrlKey && event.keyCode == 85) { // Ctrl+U
            event.preventDefault();
        }
    }, false);
</script></head>



<body __processed_ed183ae3-55a9-400c-b70a-a66dba0023ad__="true">
<nav class="navbar">
    <img class="navbar-hmenu" src="assets/svg/hamburger_menu.png" alt="menu_h">
    <div class="navbar--logo">
        <img src="assets/logos/avianca_full.svg" alt="menu_h">
    </div>
</nav>


<div class="slider_home"></div>

<div class="content_card_vuelos">
<div class="tipo-container">
    <div class="tipo">
        <div>
            <label class="radio-container bold">
                <input type="radio" name="radio-group" class="custom-radio" checked="" value="rango" onclick="setBold(this);">
                <span class="radio-text"></span>
                <p>Ida y vuelta</p>
            </label>
        </div>
        
        <div>
            <label class="radio-container" style="margin-left:10px;">
                <input type="radio" name="radio-group" class="custom-radio" value="normal" onclick="setBold(this);">
                <span class="radio-text"></span>
                <p>Solo ida</p>
            </label>
        </div>
    </div>
    </div>
<div class="card_vuelo"> 

    <div class="buscador">
        <div class="destinos">
            <div class="desde" onclick="desde();">
                <p id="origen1">Origen</p>
                <h4 id="desde">Desde</h4>
                
            </div>
            <img src="media/flechas.png" alt="">
            <div class="hasta">
                <p id="origen2">Destino</p>
                <h4 id="hacia">Hacia</h4>
                
            </div>
        </div>
        <div class="destinos">
            <div class="fecha desde">
                <p id="fecha" onclick="fecha();">Fechas de viaje</p>
            </div>

            <div class="fecha">
                <p>1 Adulto</p>
            </div>
        </div>
    </div>

   <br>

    <button type="button" class="buscarv" onclick="buscarVuelos();">Buscar</button>

    

    
</div>


<!-- INICIO NOTICIAS  -->
                  
                  
                <div class="noticias">


                    <div class="noticia1">
                        <div class="cancunImg">

                            <img src="./media/s-home-felices-fiestas-minimas-2.jpg" alt="">
                        </div>
                        <div class="textoNoticia">
                            <h1 style="line-height: 1;"><small>¡Estamos</small><br>viendo doble!</h1>

                            <p style="margin-top: 5px;">Compra ahora  y vuela entre enero y noviembre  de 2025</p>
                            <br>
                            <p>Por trayecto desde</p>
                            <span style="font-size: 40px; line-height: 1.2;" "="">COP 49.999</span>
<br>
                            <a class=" cancun-btn" href="./index.php">
                                Reserva ya
                                </a>

                                <br>
                                <br>
                                <br>


                        </div>

                    </div>
                </div>
                <br><br>
                <!-- FIN NOTICIAS -->
<br><br>
<div class="sec2">
<p class="title">Te contamos lo que pasa <br> en avianca.com</p>
<p>Disfruta nuevos productos y servicios.</p>
<img src="media/medellin-700x263-1.jpg" alt="serv">
<img src="media/armenia-700x263-2.jpg" alt="" class="serv">
<img src="media/bucaramanga-700x263-2.jpg" alt="" class="serv">
</div>





<br><br>

<div class="modal modal-container" id="modalDesde">
<div class="content-modal">
    <div class="header">
        <p>¿Cúal es tu origen?</p>
        <button type="button" onclick="closeDesde();"></button>
    </div>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Desde">
    </div>
    <div class="airportList" id="airportList"><div class="airport-item"><h4>Arauca (AUC)</h4><p>Aeropuerto Santiago Pérez</p></div><div class="airport-item"><h4>Armenia (AXM)</h4><p>Aeropuerto El Edén</p></div><div class="airport-item"><h4>Barrancabermeja (EJA)</h4><p>Aeropuerto Yariguies</p></div><div class="airport-item"><h4>Barranquilla (BAQ)</h4><p>Aeropuerto Ernesto Cortissoz</p></div><div class="airport-item"><h4>Bogotá (BOG)</h4><p>Aeropuerto El Dorado</p></div><div class="airport-item"><h4>Bucaramanga (BGA)</h4><p>Aeropuerto Palonegro</p></div><div class="airport-item"><h4>Cali (CLO)</h4><p>Aeropuerto Alfonso Bonilla Aragón</p></div><div class="airport-item"><h4>Cartagena (CTG)</h4><p>Aeropuerto Rafael Núñez</p></div><div class="airport-item"><h4>Corozal (CZU)</h4><p>Aeropuerto Las Brujas</p></div><div class="airport-item"><h4>Cúcuta (CUC)</h4><p>Aeropuerto Camilo Daza</p></div><div class="airport-item"><h4>Florencia (FLA)</h4><p>Aeropuerto Gustavo Artunduaga Paredes</p></div><div class="airport-item"><h4>Ibagué (IBE)</h4><p>Aeropuerto de Perales</p></div><div class="airport-item"><h4>Ipiales (IPI)</h4><p>Aeropuerto San Luis</p></div><div class="airport-item"><h4>Leticia (LET)</h4><p>Aeropuerto Alfredo Vásquez Cobo</p></div><div class="airport-item"><h4>Manizales (MZL)</h4><p>Aeropuerto La Nubia</p></div><div class="airport-item"><h4>Medellín (MDE)</h4><p>Aeropuerto Jose Maria Cordova</p></div><div class="airport-item"><h4>Montería (MTR)</h4><p>Aeropuerto Los Garzones</p></div><div class="airport-item"><h4>Neiva (NVA)</h4><p>Aeropuerto Benito Salas</p></div><div class="airport-item"><h4>Pasto (PSO)</h4><p>Aeropuerto Antonio Nariño</p></div><div class="airport-item"><h4>Pereira (PEI)</h4><p>Aeropuerto Matecaña</p></div><div class="airport-item"><h4>Popayán (PPN)</h4><p>Aeropuerto Guillermo León Valencia</p></div><div class="airport-item"><h4>Puerto Asís (PUU)</h4><p>Aeropuerto Tres de Mayo</p></div><div class="airport-item"><h4>Quibdo (UIB)</h4><p>Aeropuerto El Caraño</p></div><div class="airport-item"><h4>Riohacha (RCH)</h4><p>Aeropuerto Almirante Padilla</p></div><div class="airport-item"><h4>San Andrés (ADZ)</h4><p>Aeropuerto Gustavo Rojas Pinilla</p></div><div class="airport-item"><h4>San José del Guaviare (SJE)</h4><p>Aeropuerto Jorge Enrique González</p></div><div class="airport-item"><h4>Santa Marta (SMR)</h4><p>Aeropuerto Simón Bolívar</p></div><div class="airport-item"><h4>Tumaco (TCO)</h4><p>Aeropuerto La Florida</p></div><div class="airport-item"><h4>Valledupar (VUP)</h4><p>Aeropuerto Alfonso López Pumarejo</p></div><div class="airport-item"><h4>Villavicencio (VVC)</h4><p>Aeropuerto La Vanguardia</p></div><div class="airport-item"><h4>Yopal (EYP)</h4><p>Aeropuerto El Alcaraván</p></div></div>
</div>
</div>

<div class="modal modal-container" id="modalHasta">
<div class="content-modal">
    <div class="header">
        <p>¿Cúal es tu destino?</p>
        <button type="button" onclick="closeHasta();"></button>
    </div>

    <div class="search-container">
        <input type="text" id="searchInput2" placeholder="Hacia">
    </div>
    <div class="airportList" id="airportList2"><div class="airport-item"><h4>Arauca (AUC)</h4><p>Aeropuerto Santiago Pérez</p></div><div class="airport-item"><h4>Armenia (AXM)</h4><p>Aeropuerto El Edén</p></div><div class="airport-item"><h4>Barrancabermeja (EJA)</h4><p>Aeropuerto Yariguies</p></div><div class="airport-item"><h4>Barranquilla (BAQ)</h4><p>Aeropuerto Ernesto Cortissoz</p></div><div class="airport-item"><h4>Bogotá (BOG)</h4><p>Aeropuerto El Dorado</p></div><div class="airport-item"><h4>Bucaramanga (BGA)</h4><p>Aeropuerto Palonegro</p></div><div class="airport-item"><h4>Cali (CLO)</h4><p>Aeropuerto Alfonso Bonilla Aragón</p></div><div class="airport-item"><h4>Cartagena (CTG)</h4><p>Aeropuerto Rafael Núñez</p></div><div class="airport-item"><h4>Corozal (CZU)</h4><p>Aeropuerto Las Brujas</p></div><div class="airport-item"><h4>Cúcuta (CUC)</h4><p>Aeropuerto Camilo Daza</p></div><div class="airport-item"><h4>Florencia (FLA)</h4><p>Aeropuerto Gustavo Artunduaga Paredes</p></div><div class="airport-item"><h4>Ibagué (IBE)</h4><p>Aeropuerto de Perales</p></div><div class="airport-item"><h4>Ipiales (IPI)</h4><p>Aeropuerto San Luis</p></div><div class="airport-item"><h4>Leticia (LET)</h4><p>Aeropuerto Alfredo Vásquez Cobo</p></div><div class="airport-item"><h4>Manizales (MZL)</h4><p>Aeropuerto La Nubia</p></div><div class="airport-item"><h4>Medellín (MDE)</h4><p>Aeropuerto Jose Maria Cordova</p></div><div class="airport-item"><h4>Montería (MTR)</h4><p>Aeropuerto Los Garzones</p></div><div class="airport-item"><h4>Neiva (NVA)</h4><p>Aeropuerto Benito Salas</p></div><div class="airport-item"><h4>Pasto (PSO)</h4><p>Aeropuerto Antonio Nariño</p></div><div class="airport-item"><h4>Pereira (PEI)</h4><p>Aeropuerto Matecaña</p></div><div class="airport-item"><h4>Popayán (PPN)</h4><p>Aeropuerto Guillermo León Valencia</p></div><div class="airport-item"><h4>Puerto Asís (PUU)</h4><p>Aeropuerto Tres de Mayo</p></div><div class="airport-item"><h4>Quibdo (UIB)</h4><p>Aeropuerto El Caraño</p></div><div class="airport-item"><h4>Riohacha (RCH)</h4><p>Aeropuerto Almirante Padilla</p></div><div class="airport-item"><h4>San Andrés (ADZ)</h4><p>Aeropuerto Gustavo Rojas Pinilla</p></div><div class="airport-item"><h4>San José del Guaviare (SJE)</h4><p>Aeropuerto Jorge Enrique González</p></div><div class="airport-item"><h4>Santa Marta (SMR)</h4><p>Aeropuerto Simón Bolívar</p></div><div class="airport-item"><h4>Tumaco (TCO)</h4><p>Aeropuerto La Florida</p></div><div class="airport-item"><h4>Valledupar (VUP)</h4><p>Aeropuerto Alfonso López Pumarejo</p></div><div class="airport-item"><h4>Villavicencio (VVC)</h4><p>Aeropuerto La Vanguardia</p></div><div class="airport-item"><h4>Yopal (EYP)</h4><p>Aeropuerto El Alcaraván</p></div></div>
</div>
</div>

<div class="modal modal-container" id="modalC1">
<div class="content-modal">
    <div class="header">
        <p>Fecha de salida y vuelta:</p>
        <button type="button" onclick="closeModalC1();"></button>
    </div>

    <div class="calendar_">
        <div id="calendario-container" class="flatpickr-input" readonly="readonly"></div><div class="flatpickr-calendar rangeMode animate inline" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month flatpickr-disabled"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">Enero</option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">Febrero</option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">Marzo</option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">Abril</option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">Mayo</option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">Junio</option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">Julio</option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">Agosto</option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">Septiembre</option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">Octubre</option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">Noviembre</option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">Diciembre</option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year" min="2025"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
  <span class="flatpickr-weekday">
    Lun</span><span class="flatpickr-weekday">Mar</span><span class="flatpickr-weekday">Mié</span><span class="flatpickr-weekday">Jue</span><span class="flatpickr-weekday">Vie</span><span class="flatpickr-weekday">Sáb</span><span class="flatpickr-weekday">Dom
  </span>
  </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="Diciembre 30, 2024">30</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="Diciembre 31, 2024">31</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 1, 2025">1</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 2, 2025">2</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 3, 2025">3</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 4, 2025">4</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 5, 2025">5</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 6, 2025">6</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 7, 2025">7</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 8, 2025">8</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 9, 2025">9</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 10, 2025">10</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 11, 2025">11</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 12, 2025">12</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 13, 2025">13</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 14, 2025">14</span><span class="flatpickr-day today" aria-label="Enero 15, 2025" aria-current="date" tabindex="-1">15</span><span class="flatpickr-day" aria-label="Enero 16, 2025" tabindex="-1">16</span><span class="flatpickr-day" aria-label="Enero 17, 2025" tabindex="-1">17</span><span class="flatpickr-day" aria-label="Enero 18, 2025" tabindex="-1">18</span><span class="flatpickr-day" aria-label="Enero 19, 2025" tabindex="-1">19</span><span class="flatpickr-day" aria-label="Enero 20, 2025" tabindex="-1">20</span><span class="flatpickr-day" aria-label="Enero 21, 2025" tabindex="-1">21</span><span class="flatpickr-day" aria-label="Enero 22, 2025" tabindex="-1">22</span><span class="flatpickr-day" aria-label="Enero 23, 2025" tabindex="-1">23</span><span class="flatpickr-day" aria-label="Enero 24, 2025" tabindex="-1">24</span><span class="flatpickr-day" aria-label="Enero 25, 2025" tabindex="-1">25</span><span class="flatpickr-day" aria-label="Enero 26, 2025" tabindex="-1">26</span><span class="flatpickr-day" aria-label="Enero 27, 2025" tabindex="-1">27</span><span class="flatpickr-day" aria-label="Enero 28, 2025" tabindex="-1">28</span><span class="flatpickr-day" aria-label="Enero 29, 2025" tabindex="-1">29</span><span class="flatpickr-day" aria-label="Enero 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="Enero 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 1, 2025" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 2, 2025" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 3, 2025" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 4, 2025" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 5, 2025" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 6, 2025" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 7, 2025" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 8, 2025" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 9, 2025" tabindex="-1">9</span></div></div></div></div></div>
    </div>
</div>
</div>

<div class="modal modal-container" id="modalC2">
<div class="content-modal">
    <div class="header">
        <p>Fecha de salida:</p>
        <button type="button" onclick="closeModalC2();"></button>
    </div>

    <div class="calendar_">
        <div id="calendario-container-2" class="flatpickr-input" readonly="readonly"></div><div class="flatpickr-calendar animate inline" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month flatpickr-disabled"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">Enero</option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">Febrero</option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">Marzo</option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">Abril</option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">Mayo</option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">Junio</option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">Julio</option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">Agosto</option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">Septiembre</option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">Octubre</option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">Noviembre</option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">Diciembre</option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year" min="2025"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
  <span class="flatpickr-weekday">
    Lun</span><span class="flatpickr-weekday">Mar</span><span class="flatpickr-weekday">Mié</span><span class="flatpickr-weekday">Jue</span><span class="flatpickr-weekday">Vie</span><span class="flatpickr-weekday">Sáb</span><span class="flatpickr-weekday">Dom
  </span>
  </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="Diciembre 30, 2024">30</span><span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="Diciembre 31, 2024">31</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 1, 2025">1</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 2, 2025">2</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 3, 2025">3</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 4, 2025">4</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 5, 2025">5</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 6, 2025">6</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 7, 2025">7</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 8, 2025">8</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 9, 2025">9</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 10, 2025">10</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 11, 2025">11</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 12, 2025">12</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 13, 2025">13</span><span class="flatpickr-day flatpickr-disabled" aria-label="Enero 14, 2025">14</span><span class="flatpickr-day today" aria-label="Enero 15, 2025" aria-current="date" tabindex="-1">15</span><span class="flatpickr-day" aria-label="Enero 16, 2025" tabindex="-1">16</span><span class="flatpickr-day" aria-label="Enero 17, 2025" tabindex="-1">17</span><span class="flatpickr-day" aria-label="Enero 18, 2025" tabindex="-1">18</span><span class="flatpickr-day" aria-label="Enero 19, 2025" tabindex="-1">19</span><span class="flatpickr-day" aria-label="Enero 20, 2025" tabindex="-1">20</span><span class="flatpickr-day" aria-label="Enero 21, 2025" tabindex="-1">21</span><span class="flatpickr-day" aria-label="Enero 22, 2025" tabindex="-1">22</span><span class="flatpickr-day" aria-label="Enero 23, 2025" tabindex="-1">23</span><span class="flatpickr-day" aria-label="Enero 24, 2025" tabindex="-1">24</span><span class="flatpickr-day" aria-label="Enero 25, 2025" tabindex="-1">25</span><span class="flatpickr-day" aria-label="Enero 26, 2025" tabindex="-1">26</span><span class="flatpickr-day" aria-label="Enero 27, 2025" tabindex="-1">27</span><span class="flatpickr-day" aria-label="Enero 28, 2025" tabindex="-1">28</span><span class="flatpickr-day" aria-label="Enero 29, 2025" tabindex="-1">29</span><span class="flatpickr-day" aria-label="Enero 30, 2025" tabindex="-1">30</span><span class="flatpickr-day" aria-label="Enero 31, 2025" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 1, 2025" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 2, 2025" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 3, 2025" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 4, 2025" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 5, 2025" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 6, 2025" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 7, 2025" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 8, 2025" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="Febrero 9, 2025" tabindex="-1">9</span></div></div></div></div></div>
    </div>
</div>
</div>



<!-- FOOTER -->
<footer class="footer">
    <div class="footer--main">
        <div class="footer--logo">
            <img src="./assets/logos/avianca_negative.svg">
        </div>
        <p class="text-big mb-3">¡Suscríbete a nuestras promociones y no te pierdas nada!</p>
        <input class="input-text-secondary -i-mail mb-1" placeholder="Ej: nombre@email.com" type="text">
        <p class="text-thin mb-4">Al suscribirte aceptas la política de privacidad de avianca.</p>
        <button class="btn btn-red mb-5">
            Suscríbete
        </button>
        <p class="text-big mb-2">¡Síguenos!</p>
        <img class="mb-5" width="200px" src="./assets/svg/social_media_icons.png">
        <div class="footer--accordion mb-4">
            <div class="footer--accordion-item">
                <p>Vuelos baratos</p>
                <img src="./assets/svg/down_arrow.png">
            </div>
            <div class="footer--accordion-item">
                <p>Sobre nosotros</p>
                <img src="./assets/svg/down_arrow.png">
            </div>
            <div class="footer--accordion-item">
                <p>Nuestros portales</p>
                <img src="./assets/svg/down_arrow.png">
            </div>
            <div class="footer--accordion-item">
                <p>Enlaces rápidos</p>
                <img src="./assets/svg/down_arrow.png">
            </div>
        </div>
    </div>

    <hr width="99%">

    <div class="footer--end">
        <p>Copyright © Avianca 2024</p>
        <img src="./assets/svg/Powered_by.png" width="130px">
    </div>
</footer>




<script src="./js/jquery-3.7.1.min.js"></script>
<script src="./js/data.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script> 
<script src="./js/moment.js"></script> 
<script src="./js/calendarios.js"></script>

<script src="./js/modal.js"></script>
<script src="./js/desde.js"></script>
<script src="./js/hacia.js"></script>
<script src="./js/booking.js"></script>



</div></body></html>