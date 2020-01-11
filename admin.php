<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Pharmachimia</title>

    <!-- Favicon  -->
    <link rel="icon" href="https://i.imgur.com/SeXsUSW.png">

    <style>
        body{
  font-family: 'Open Sans', sans-serif;
  
  margin: 0;  
  width:100%; 
  height: 1000px;
  text-align:center;
  margin: 0px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:200px 0px 70px 0px;
  /*border: black 4px solid; */
}

.texto{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
  background:#2ecc71;
  width:89%;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}
    </style>
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

    <form method="post" action="index.html">
        <div class="box">

            <h1>Administrador</h1>

            <input type="text" name="email" placeholder="Ingresar usuario..." required class="texto" />
              
            <input type="password" name="email" placeholder="Ingresar contraseña..." required class="texto" />
              
            <a href="#"><input type="submit" class="btn" value="Ingresar" >
          
        </div>
    </form>
      
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
</body>

</html>