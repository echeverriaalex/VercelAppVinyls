<?php
    namespace Models;

    class Vinyl{

        private $artist;
        private $diskName;
        private $yearEdition;
        private $countryEdition;
        private $statusBox;
        private $statusDisk;
        private $diskFormat;
        private $gender;
        private $velocity;
        private $observations;
        private $urlImage;

        public function __construct($artist = '', $diskName = '', $yearEdition = '', $countryEdition = '', $statusBox = '', $statusDisk = '', $diskFormat = '', $gender = '', $velocity = '', $observations = '', $urlImage = ''){
            
            $this->setArtist($artist);
            $this->setDiskName($diskName);
            $this->setYearEdition($yearEdition);
            $this->setCountryEdition($countryEdition);
            $this->setStatusBox($statusBox);
            $this->setStatusDisk($statusDisk);
            $this->setDiskFormat($diskFormat);
            $this->setGender($gender);
            $this->setVelocity($velocity);
            $this->setObservation($observations);
            $this->setUrlImage($urlImage);
        }
        
        public function setArtist($artist){$this->artist = $artist;}
        public function getArtist(){return $this->artist;}

        public function setDiskName($diskName){$this->diskName = $diskName;}
        public function getDiskName(){return $this->diskName;}

        public function setYearEdition($yearEdition){$this->yearEdition = $yearEdition;}
        public function getYearEdition(){return $this->yearEdition;}

        public function setCountryEdition($countryEdition){$this->countryEdition = $countryEdition;}
        public function getCountryEdition(){return $this->countryEdition;}
        
        public function setStatusBox($statusBox){$this->statusBox = $statusBox;}
        public function getStatusBox(){return $this->statusBox;}
        
        public function setStatusDisk($statusDisk){$this->statusDisk;}
        public function getStatusDisk(){return $this->statusDisk;}
        
        public function setDiskFormat($diskFormat){$this->diskFormat = $diskFormat;}
        public function getDiskFormat(){return $this->diskFormat;}
        
        public function setGender($gender){$this->gender = $gender;}
        public function getGender(){return $this->gender;}
        
        public function setVelocity($velocity){$this->velocity = $velocity;}
        public function getVelocity(){return $this->velocity;}
        
        public function setObservation($observations){$this->observations = $observations;}
        public function getObservation(){return $this->observations;}

        public function setUrlImage($urlImage){$this->urlImage = $urlImage;}
        public function getUrlImage(){return $this->urlImage;}
    }
?>