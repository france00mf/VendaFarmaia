<!DOCTYPE html>
<html>
<head>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<style>
    
    
/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

    
    #example1 {
        background-image: url('im2.jpg');
        background-position:100% 100%;
        background-size: 100% 100%;
        background-attachment: fixed;
        background-repeat:initial;
        height: 510px;
}        
   

body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* Style the footer */
.footer {
    position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="FrontOffice.php?acao=add&id=0">Front Office</a>
  <a href="BackOffice.php">Back Office</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
    
    <div id="example1" class=column middle">
  <h2>Bem vindo ao (CHIGESF) Gestão de Farmacia</h2>
  <p>Todos os dados encontrados e retidos deste programa so devem ser usados pela Farmacia Manuel Jr</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Começar</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
<div class="footer">
  <?php include 'footer.php';?>
</div>
  

</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_push_opacity by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Oct 2017 10:36:53 GMT -->
</html> 
