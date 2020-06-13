<?php
 abstract class MysqlBd{
     
       private  $pdo=null;
       protected $classeName;
   
      private   function getConnexion(){
        try{
          
           if($this->pdo==null){
            $this->pdo = new PDO('mysql:host=localhost;dbname=mae_fig', 'root','');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

          }
        }catch(Exception $ex ){
              die(" Paramètres de Connexion?".$ex->getMessage());
        }
      
      }

      private   function CloseConnexion(){
                 if($this->pdo!=null) {
                  $this->pdo=null;
                 } 
         }

    public function ExecuteSelect($sql){
            $this->getConnexion();
             $query=$this->pdo->query($sql);
             $data=[];
             while($row=$query->fetch()){
              $data[]=new $this->classeName($row);
             }
             $this->closeConnexion();
             return $data;

    }
    public function ExecuteUpdate($sql){
         $this->getConnexion();
          $nbreLigne = $this->pdo->exec($sql);
       $this->closeConnexion();
      return  $nbreLigne;

    }
 
    public abstract function create($data);
    public abstract function update($data);
    public abstract function delete($id);
    public abstract function findAll();
    public abstract function findById($id);

  }
?>