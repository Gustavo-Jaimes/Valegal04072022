<!DOCTYPE html>
<?=$headGNRL?>
<body>
<?=$header?>

<!-- banner inicio -->
<div class="uk-text-center inicioabogado" uk-grid>
    <div class="uk-width-1-1@m">
        <div class="imageDiv">
            <img class="banner" src="./img/design/banner11.jpg" alt="">
        </div>
        <div class="imageDiv bottomDiv">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-auto@m"></div>
                <div class="uk-width-expand@m abogado">
                    <h2>Acerca de Valegal</h2>
                    <p>Valegal, S.C., somos una firma de abogados laborales con una
                        práctica legal de más de 20 años en la materia, en la que
                        hemos colaborado con diversos sectores empresariales, en el
                        cumplimiento de la normatividad vigente para encontrar los
                        esquemas más convenientes para la contratación, importación
                        y exportación de talento humano, manejo de temas colectivos
                        con sindicatos, asesoría e implementación de estrategias para
                        identificar, prevenir y resolver contingencias legales durante el
                        desarrollo de las relaciones laborales; así como, defender los
                        intereses de nuestros Clientes en procesos jurisdiccionales
                        ante autoridades competentes.
                    </p>
                </div>
                <div class="uk-width-expand@m"> <img class="foto" src="./img/design/acerca.jpg" alt=""></div>
                <div class="uk-width-auto@m"></div>
            </div>
        </div>
    </div>
   
    <div class="uk-width-1-1@m letrero">
        <p class="uk-flex uk-flex-center uk-margin-remove experto">¿EN QUÉ SOMOS EXPERTOS?</p>
        <p class="uk-flex uk-flex-center uk-margin-remove servicio">Conoce nuestros servicios</p>
    </div>
    <div class="uk-width-1-5@m"></div>
    <div class="uk-width-expand@m carousel-servicios">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                <li>
                    <div class="uk-panel img" >
                        <img src="./img/design/servicio3.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio4.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio1.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio2.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio3.png" width="400" height="600" alt="">
                    </div>
                </li>
                <li>
                    <div class="uk-panel img">
                        <img src="./img/design/servicio4.png" width="400" height="600" alt="">
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
    <div class="uk-width-1-5@m"></div>
</div>


<section  id="boq">  
    <div class="uk-text-center banner-mail" uk-grid>
        <div class="uk-width-1-1@m">
            <p class="uk-flex uk-flex-center asesoria">Recibe Asesoría</p>
            <p class="uk-flex uk-flex-center datos">Déjanos tus datos y con gusto te brindaremos la asesoría que necesitas.</p>
        </div>
        <div class="uk-width-1-3@m"></div>
        <div class="uk-width-expand@m uk-margin-remove email">
            <form class="uk-grid-small" uk-grid>
                <div class="uk-width-1-2@s">
                    <input class="uk-input input" type="text" placeholder="Nombre Completo*">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input input" type="text" placeholder="Teléfono*">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input input" type="text" placeholder="Asunto*">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input input" type="text" placeholder="Email*">
                </div>
                <div class="uk-margin uk-width-1-1@s">
                    <textarea class="uk-textarea input" rows="5" placeholder="Mensaje*"></textarea>
                </div>
                <div class="uk-margin uk-width-1-1@s boton">
                    <a href="">ENVIAR</a>
                </div>
            </form>
        </div>
        <div class="uk-width-1-3@m"></div>
    </div>


<!-- Articulos de abogados -->

    <div class="uk-text-center container-cursos equipo mostrar-mas <?=$menos?>" style="<?=$show?>;" uk-grid>
    
        <div class="uk-width-1-2@m uk-visible@m container">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-expand@m nuestro">
                    <div align="center" class="boxwrap">
                    <h1>Nuestro equipo</h1>
                    <p>Ver a todos los abogados</p>
                    <div class="box" id="box1"></div>
                    <div class="box" id="box2">
                        <p class="nombre">Javier Valencia Gallardo</p>
                        <p class="puesto">Consultor</p>
                    </div>
                </div>
                </div>
            </div>
        </div>



        <div class="uk-width-expand@m articulosRecientes">
            <h1 style=""  class="uk-text-center">Artículos recientes</h1>
            <div class="uk-flex uk-flex-left">
            <?php
                $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                ?>
                <p><?=$diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;?></p>
                <p class="admin" class="uk-margin-remove admin" style="padding: 0 1em;">ADMIN</p>
            </div>
            <?php
                    $contador = 0;
                    $CONSULTA20 = $CONEXION -> query("SELECT * FROM productos");
                    while($row_CONSULTA20 = $CONSULTA20 -> fetch_assoc()){
                    $id = $row_CONSULTA20['id'];

                    $contador ++;
                    $show = " ";
                    $menos = "";
                    if ($contador > 2) {
                        $show = "display: none";
                        $menos = "mostrar-menos";
                }
                ?>
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin curso-card" style="<?=$show?>" uk-grid>
                <div class="uk-flex-last@s uk-card-media-right uk-cover-container cursos-info">
                    <?=item_inicio7($row_CONSULTA20['id'])?>
                </div>
                
                <div class="cursos-info" style="max-width: 100%; max-height: 13em;">
                    <?php
                        
                        $CONSULTA2 = $CONEXION -> query("SELECT * FROM productospic WHERE producto = $id");
                        $row_CONSULTA2 = $CONSULTA2 ->fetch_assoc();

                    ?>
                    <img style="width: 100%; height: 100%; object-fit: cover;" src="./img/contenido/productos/<?=$row_CONSULTA2['imagen']?>" alt="">
                </div>
            </div>
            <?php } ?>
                <p uk-margin>
                    <a href="<?=$rutaServicios?>" class="mas" class="uk-flex uk-flex-left">READ MORE NEWS</a>
                </p>
        </div>

        <div class="uk-width-auto@m">
            <div class="uk-card uk-card-body"></div>
        </div>
    </div>
    

<?=$footer?>

</html>