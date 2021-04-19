<?php 
    namespace Controllers;
    use PDO\VinylPDO;
    use Models\Vinyl;
    
    class VinylsController{

        private $vinylsPDO;

        public function __construct(){$this->vinylsPDO = new VinylPDO();}

        public function ShowAddView($message = ""){require_once(VIEWS_PATH."add-vinyl.php");}

        public function ShowEditView($vinyl){require_once(VIEWS_PATH."edit-vinyl.php");}

        public function ShowListView(){
        
            $vinylsList = $this->vinylsPDO->GetAll();
            require_once(VIEWS_PATH."list-vinyl.php");
        }

        public function ShowArticlesView(){

            $vinylsList = $this->vinylsPDO->GetAll();
            require_once(VIEWS_PATH."list-vinyl-articule.php");
        }

        public function Add($artist, $diskName, $yearEdition, $countryEdition, $statusBox, $statusDisk, $diskFormat, $gender, $velocity, $observations, $urlImage){
            
            $exists = $this->vinylsPDO->SearchVinylByName($diskName);

            if(!$exists){
                
                $vinyl = new Vinyl($artist, $diskName, $yearEdition, $countryEdition, $statusBox, $statusDisk, $diskFormat, $gender, $velocity, $observations, $urlImage);
                $this->vinylsPDO->Add($vinyl);
                $message = "Vinyl successfully added";
                $this->ShowAddView($message);
            }
            else{
                echo"<script> alert('Error: Cannot add vinyl because it is exist.')</script>";
                $message = 'Error: Cannot add vinyl because it is exist.';
                $this->ShowAddView($message);
            }
        }

        public function Delete($diskName){

            $delete = $this->vinylsPDO->Delete($diskName);

            if($delete > 0){
                $this->ShowArticlesView();
            }
            else{

                echo "<script> alert('Error: Cannot delete vinyl. Please retry.'); </script>";
                $this->ShowArticlesView();
            }

        }

        public function Edit(){

        }
    }
?>