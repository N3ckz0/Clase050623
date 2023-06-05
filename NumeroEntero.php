<?php   

    class NumeroEntero
    {
        private $nE;

        public function __construct($ne){
            $this->nE = $ne;
        }

        public function setNe($ne){
            $this->nE = $ne;
        }

        public function getNe(){
            return $this->nE;
        }
    }
    

?>