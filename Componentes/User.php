<?php
include './connectionDB.php';
class User extends DB {
    private $nombre;
    private $correo;
    public function userExists($email, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM USUARIO WHERE correo =:email AND password = :pass');
        $query->execute(['email'=> $email, 'pass' => $pass]); /**Cambiar por md5pass */
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    
    public function setEmail($email){
        $query = $this->connect()->prepare('SELECT * FROM USUARIO WHERE correo = :email');
        $query->execute(['email'=> $email]);
        
        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombre'];
            $this->correo = $currentUser['correo'];
        }
    }
    
    public function getNombre(){
        return $this->nombre;
    }
}
?>