<?php



  class Rectangle extends Figure{
     
          
            private $largeur; 
         
            public  function __construct($row=null){
                        
              
              if($row!=null){
                    $this->hydrate($row);
              }
        
      }
      public function hydrate($row){
        $this->longueur=$row['longueur'];
        $this->largeur=$row['largeur'];
        $this->id=$row['id'];
}
              
           
              public function getLargeur(){
                return $this->largeur;
             }
            
              public function setLargeur($largeur){
                 $this->largeur=$largeur;
              }
             
             
                public function demiPerimetre(){
                     return $this->longueur + $this->largeur;
                }
              
                public function surface(){
                  return $this->longueur * $this->largeur;
                }
                public function diagonale(){
                  return sqrt(pow($this->longueur,2)+pow($this->largeur,2));
                }
              
  }


?>