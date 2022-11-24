<?php
 //   metodo de fazendo uma conexão
 
 try{
     $pdo =new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
 } 
 catch (PDOException $e)
  {
     echo"Erro com banco de dados:".$e->getMessage();
 }
  catch (Exception $e)
  {
     echo" Erro generico:".$e->getMessage();
 }

   //-metodo de inserir dados (INSERT)
// 01 forma:

  //$res= $pdo->prepare("INSERT INTO pessoa(nome, telefone,email)
 // VALUES(:n, :t, :e)");
    
//$res->bindValue(":n","roberta");
//$res->bindValue(":t","111111111");
//$res->bindValue(":e","roberta@gmail.com");
//$res->execute();

//02 forma:

//$pdo->query("INSERT INTO pessoa(nome, telefone, email)
 //        VALUES('Paulo','22222222','paulo@gmail.com')");

//--------------------------DELETE E UPDATE
  // MODO 01. DELETE

  //$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
  //$id = 12;
  //$cmd->bindValue(":id",$id);
  //$cmd->execute();
 
  //MODO 2. DELETE

//$res = $pdo->query("DELETE FROM pessoa WHERE id = '14'");

//-----------UPDATE -- ATUALIZAR DADOS-----

//$cmd = $pdo->prepare("UPDATE pessoa SET telefone = :t WHERE id = :id");
//$cmd->bindValue(":t","21967452359");
//$cmd->bindValue(":id",15);
//$cmd->execute();

//$res = $pdo->query("UPDATE pessoa SET email = 'paulo3@hotmail.com' WHERE id = '6'");

  

// ------------------------SELECT -- SELECIONAR DADOS -----
 // modo 1. somente 1 linha de dados

$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$cmd->bindValue(":id",1);
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);

foreach($resultado as $key => $value){
   echo $key.": ".$value."<br>";
}

// modo 2. diversas linhas de dados
//$cmd->fetchAll();


?>