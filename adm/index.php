<?php
//Conexão
include_once '../php_action/db_connect.php';
//Session 
require_once '../sessao.php';


?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title>MAUMAU</title>
    </head>
  
     <style>
     
     html,
body {
  width: 100%;
  height: 100%;
  overflow: hidden;
  margin: 0;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  font-family: 'Open Sans Condensed', sans-serif;
}

div[class*=box] {
	height: 33.33%;
	width: 100%; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.box-1 { background-color: black; }
.box-2 { background-color: purple; }
.box-3 { background-color: black; }

.btn {
	line-height: 50px;
	height: 50px;
	text-align: center;
	width: 250px;
	cursor: pointer;
}
.btn-one {
	color: #FFF;
	transition: all 0.3s;
	position: relative;
}
.btn-one span {
	transition: all 0.3s;
}
.btn-one::before {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	opacity: 0;
	transition: all 0.3s;
	border-top-width: 1px;
	border-bottom-width: 1px;
	border-top-style: solid;
	border-bottom-style: solid;
	border-top-color: rgba(255,255,255,0.5);
	border-bottom-color: rgba(255,255,255,0.5);
	transform: scale(0.1, 1);
}
.btn-one:hover span {
	letter-spacing: 2px;
}
.btn-one:hover::before {
	opacity: 1;	
	transform: scale(1, 1);	
}
.btn-one::after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	transition: all 0.3s;
	background-color: rgba(255,255,255,0.1);
}
.btn-one:hover::after {
	opacity: 0;	
	transform: scale(0.1, 1);
}
a:link{
    text-decoration-line: none;
}
</style>


<body>
    
<div class="box-1">
<a href="temasdm.php" class="btn btn-one">TEMAS</a>
</div>
 
<div class="box-2">
<a href="usuarios.php" class="btn btn-one">USUARIOS</a>
</div>

<div class="box-3">
<a href="" class="btn btn-one">EM ANDAMENTO</a>
</div>

</body>
  </html>


