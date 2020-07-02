<?php 

   $usuarios_app = [
       [ 'email'=> 'adm@teste.com.br', 'senha'=> '123456'],
       [ 'email'=> 'user@teste.com.br', 'senha'=> 'abcd'],

   ];

   foreach($usuarios_app as $user){
echo 'usuario app:' . $user['email'] . '/' .$user['senha'];
echo '<br />';
echo 'usuario form: '. $_POST['email'] . '/' .  $_POST['senha'];

   }


    print_r($_POST);

    echo '<br />' ;

    echo  $_POST['email'];


  echo '<br />';

  echo  $_POST['senha'];


?> 