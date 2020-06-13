<?php

  class Carre extends Figure{


            
              public  function __construct($row=null){
                        
                      
                      if($row!=null){
                            $this->hydrate($row);
                      }
                
              }
             
              public function hydrate($row){
                       $this->longueur=$row['longueur'];
                       $this->id=$row['id'];
              }
               
             
                public function demiPerimetre(){
                     return $this->longueur *2;
                }
               
                public function surface(){
                  return $this->longueur * $this->longueur;
                }
                public function diagonale(){
                  return sqrt(pow($this->longueur,2)+pow($this->longueur,2));
                }
              
  }

?>