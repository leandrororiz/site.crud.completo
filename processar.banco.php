<?php
session_start();
include_once("conexao.cad.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$valormensal = filter_input(INPUT_POST, 'valormensal', FILTER_SANITIZE_NUMBER_INT);
$quantosmeses = filter_input(INPUT_POST, 'quantosmeses', FILTER_SANITIZE_NUMBER_INT);



$criar_usuario = "INSERT INTO banco (nome, valormensal, quantosmeses, created) VALUES ('$nome', '$valormensal','$quantosmeses', NOW())";
$usuario_criado = mysqli_query($conn, $criar_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Investimento feito com sucesso<p/>";
    header("Location: cad.php"); }
else{
    $_SESSION['msg'] = "<p style='color:red;'>Investimento não concluido<p/>";
    header("Location: cad.php"); }