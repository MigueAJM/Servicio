<?php
try{
    $Cn = new PDO('mysql:host=localhost; dbname=sessions', 'root' , '');
    $Cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Cn->exec("SET CHARACTER SET utf8"); // MYSQL
}catch(Exception $e){
    die("Error: " . $e->GetMessage());
}

function Query($query)
    {
    global $Cn;
    try{
        $result =$Cn->query($query);
        $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
        $result->closeCursor();
        return $resultado;
    }catch(Exception $e){
        die("Error en la LIN: " . $e->getLine() . ", MSG: " . $e->GetMessage());
    }
}

function Execute ($sentence){
    global $Cn;
    try {
        $result = $Cn->query($sentence);
        $result->closeCursor();
        return 1; // Exito
    } catch (Exception $e) {
        //die("Error en la linea: " + $e->getLine() + " MSG: " + $e->GetMessage());
        return 0; // Fallo
    }
}

function Validate_user($post, $id_session){
    $email = $post['email'];
    $passwd = $post['passwd'];
    $query = "SELECT * FROM users WHERE email='$email'";
    $user = Query($query);
    if($user){
        $pwd = $user[0]['password'];
        if(/* password_verify */$passwd == $pwd){
            $sentence = "UPDATE users SET id_session= '$id_session' WHERE email= '$email'";
            $result = Execute($sentence);
            return $result;
        }else return 0;
    }else return 0;
}