<?php
    require_once("nav.php");
?>

<div>
    <h2> Add vinyl</h2>

    <form action="<?php echo FRONT_ROOT ?>Vinyls/Add" method="POST">

        <div>
            <h1> Add vinyl </h1>
        </div>

        <div>           
            <label for="artist"> Artist </label>
            <input type="text" id="artist" name="artist">
        </div>

        <div>
            <label for="diskName"> Disk name </label>
            <input type="text" id=" diskName" name=" diskName"> 
        </div>
        
        <div>
            <label for="yearEdition"> Year edition </label>
            <input type="date" id="yearEdition" name="yearEdition">
        </div>

        <div>
            <label for="countryEdition"> Country edition </label>
            <input type="countryEdition" id="countryEdition" name="countryEdition">
        </div>

        <div>
            <label for="statusBox"> Status box </label> 
                <select id="statusBox" name="statusBox"> 
                    <option value="Dañada">Dañada</option>
                    <option value="Buen estado">Buen estado</option>
                    <option value="Nueva">Nueva</option>
                    <option value="No tiene">No tiene</option>
                </select>            
        </div>

        <div>
            <label for="statusDisk"> Status disk </label>  
            <select id="statusDisk" name="statusDisk"> 
                <option value="Dañado">Dañado</option>
                <option value="Buen estado">Buen estado</option>
                <option value="Nuevo">Nuevo</option>             
            </select>
        </div>

        <h2> Format </h2>
        <div>
            <input type="radio" id="lp" name="diskFormat" value="lp">
            <label for="lp">lP</label>
        </div>

        <div>
            <input type="radio" id="EP" name="diskFormat" value="EP">
            <label for="EP">EP</label>
        </div>

        <div>
            <input type="radio" id="Singles" name="diskFormat" value="Singles">
            <label for="Singles">Singles</label>
        </div>

        <div>
            <label for="gender"> Select a gender </label>
            <select id="gender" name="gender"> 
                <option value="Rock">Rock</option>
                <option value="Salsa">Salsa</option>
                <option value="Pop">Pop</option>
                <option value="Bachata">Bachata</option>
            </select>
        </div>

        <div>
            <label for="velocity">velocity</label>  
            <select id="velocity" name="velocity"> 
                <option value="Lenta">Lenta</option>
                <option value="Media">Media</option>
                <option value="Rapida">Rapida</option>     
            </select>
        </div>

        
        <h2> Observations </h2>
        <div>
            <textarea name="observations" id="observations" cols="40" rows="10"></textarea>
        </div>        
        
        <div>
            <label> URL image</label>
            <input type="text" name="urlImage">
        </div>

        <!--
        <div>
            <h2>Select a file</h2>
            <input type="file" name="Foto">
        </div>
        -->        

        <div>
            <button type="submit"> Add vinyl</button>
        </div>
    </form>

    <?php
        if(isset($message)){
    ?>
        <div>
            <p> <?php echo $message ?></p>
        </div>
    <?php
        }
    ?>
</div>