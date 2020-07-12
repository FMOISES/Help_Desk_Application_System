<?php
    session_start();
    $user_autentic = false;
    $usuarios_id = null;
    $usuario_perfil_id = null;
    $usuario = null;
    $perfis=array(1=>'administrativo',2=> 'usuario');
    $usuarios_app = array(
        array('id'=> 1,'perfil_id'=>1,'email'=> 'moises@com','senha'=> '12345678'),
        array('id'=> 2,'perfil_id'=>2,'email'=> 'lucas@com','senha'=> '1234'),
        array('id'=> 3,'perfil_id'=>2,'email'=> 'lucia@com','senha'=> '1234')
    );



    foreach($usuarios_app as $user){
        echo $user['perfil_id'];
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuarios_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
            $user_autentic = true;
            $usuario = $user['email'];
        }
    }
    if($user_autentic  == true){
        header('location:home.php');
        $_SESSION['id'] = $usuarios_id;
        $_SESSION['autenticado']='Sim';
        $_SESSION['perfil_id']= $usuario_perfil_id;
        $_SESSION['usuario']= $usuario;

    }else{
        $_SESSION['autenticado']='Não';
        //echo 'usuario ou senha invalidos';
        header('location:index.php?login=erro');
        //direciona fluxo para o arquivo index.php.
    }   

?>