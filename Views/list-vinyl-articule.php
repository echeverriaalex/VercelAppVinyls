<?php
    require_once("nav.php");
?>

<main class="main">
    <div class="articulo">  
        
    <h2> Vinyls </h2>
        <?php
            if(!empty($vinylsList)){
                foreach($vinylsList as $vinyl){        
        ?>       
                    <article class="article">
                        <div class="imagen"><img src="<?php echo $vinyl->getUrlImage(); ?>" alt="" width="100%" height="100%"></div>
                            <div class="texto">
                                <div><h3> <?php echo $vinyl->getArtist(); ?> </h3></div>
                                <div><h5> <?php echo $vinyl->getDiskName(); ?> </h5></div>
                                <div><p>  <?php echo $vinyl->getCountryEdition(); ?> </p></div>

                                <script src="Views/js/script.js"> </script> 

                                <div class="btn"> 
                                    <form action="<?php echo FRONT_ROOT ?>Vinyls/Delete" method="POST">
                                        <input type="hidden" name="diskName" value="<?php echo $vinyl->getDiskName(); ?>">
                                        <button type="submit" > Eliminar </button>
                                    </form>

                                    <form action="<?php echo FRONT_ROOT ?>Vinyls/Edit" method="POST">
                                        <input type="hidden" name="diskName" value="<?php echo $vinyl->getDiskName(); ?>">
                                        <button type="submit" > Modificar </button>
                                    </form>
                                </div>
                            </div>  
                        </div>           
                    </article>        
        <?php
                }
            }
            else{

                echo "Nothing here";
            }
        ?>
    </div>         
</main>    