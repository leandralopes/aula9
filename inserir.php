<?php
//include / include_once
//require / require_once

include('conexao.php');

$aluno ="Laura";
$turma = "4005";
$mensal =790.98;

$sql ="insert into tblaluno (aluno,turma,mensal) 
      values('$aluno','$turma','$mensal')";

//conexao->query(comando sql);
$con->query($sql);
var_dump($con);