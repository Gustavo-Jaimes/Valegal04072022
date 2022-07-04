<!DOCTYPE html>
<?=$headGNRL?>
<body>

<?=$header?>


  <!-- Seccion de servicios productos -->
<section  class="seccion-servicios2" style="margin-top: 15em;">
    <h1 class="uk-flex uk-flex-center" style="font-size: 2.5em;">ARTICULOS RECIENTES</h1>
    <p class="uk-flex uk-flex-center" style="padding: 0 15em">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt veritatis aut perspiciatis veniam, unde vero excepturi temporibus rerum, dicta ea corrupti ipsa voluptas cum dolorum, magni quia ipsum blanditiis voluptatibus!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis alias cumque recusandae, corporis, odio quisquam aut similique nihil, debitis quod sapiente distinctio quae nostrum! Ipsum facilis iure magnam doloremque repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quidem, molestiae ratione quam quibusdam facere hic commodi ad nihil tenetur aliquam sit reprehenderit eos asperiores rerum at est, nam id.</p>
    <div class="uk-text-center" uk-grid>
         <div class="uk-width-auto@m uk-padding">
             <div class="uk-card uk-card-body"></div>
        </div>
        <div class="uk-width-expand@m">
            <div class="uk-text-center" uk-grid>
            <?php 
              
                $inicio  = ($pag == 0) ? $pag: $pag * $prodPag ;

                $CONSULTA13 = $CONEXION -> query("SELECT * FROM productos LIMIT $inicio , $prodPag");  
                while($row_CONSULTA13 = $CONSULTA13 -> fetch_assoc()){
            ?>
                <div class="uk-width-1-3@m uk-padding-remove" style="margin-top: 1em">
                     <?=item_inicio8($row_CONSULTA13['id'])?>
                </div>
                <?php } ?> 
                
            </div>
        </div>
        <div class="uk-width-1-5@m uk-flex uk-flex-middle uk-flex-center" style="border:solid red 1px">
            <div>
                <ul>
                    <li>
                        <a href="#">Categoria 1</a>
                    </li>
                    <li>
                        <a href="#">Categoria 2</a>
                    </li>
                    <li>
                        <a href="#">Categoria 3</a>
                    </li>
                    <li>
                        <a href="#">Categoria 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="uk-text-center uk-margin-remove" uk-grid>
            <div class="uk-width-1-5@m"></div>
            <div class="uk-width-expand@m uk-flex uk-flex-center" style="margin: 1em 0">
                <?php
                if ($pag == 0) {
                    $firts= '<i class="fas fa-caret-square-left" style="font-size:40px; margin: 0em .4em;color: gray"></i>';
                }else{
                    $firts = '
                    <a type="button" href="'.($pag-1).'_servicios"><i class="fas fa-caret-square-left" style="font-size:40px; margin: 0em .4em;color: black"></i></a>
                    ';
                }
                
                ?>
                        <?=$firts?>
                        <?php
                            $consulta_pag = $CONEXION->query("SELECT * FROM servicios");
                        
                            $numItems = $consulta_pag->num_rows;

                                $pagTotal=intval($numItems/$prodPag);
                                $resto=$numItems % $prodPag;
                                if (($resto) == 0){
                                    $pagTotal=($numItems/$prodPag)-1;
                                }

                                for ($i=0; $i <= $pagTotal; $i++) { 
                                $clase='';
                                if ($pag==$i) {
                                    $clase='uk-active';
                                }
                                $link=$i.'_servicios';
                                
                                echo '<a href="'.$link.'" type="button" class="uk-button " style="font-size: 1em; font-weight: bold; padding: 0em .8em; background-color: black; margin: 0 .5em .5em 0; color: white; border-radius: 8px; ">'.($i+1).'</a>';
                                }
                        ?>
                        <?php
                            if ($pag == $pagTotal ) {
                                $firts= '<i class="fas fa-caret-square-right" style="font-size: 40px; margin: 0em .2em;color: gray"></i>';
                            }else{
                                $firts = '
                                <a type="button" href="'.($pag+1).'_servicios"><i class="fas fa-caret-square-right" style="font-size: 40px; margin: 0em .2em;color: black"></i></a>
                                ';
                            }
                        ?>
                    <?=$firts?>
            </div>
            <div class="uk-width-1-3@m">
                
            </div>
    </div>
</section>


<?=$footer?>

</html>