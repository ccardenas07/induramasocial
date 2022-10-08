<html>
<head>
<link href="css/estilos.css" type="text/css" rel="stylesheet">
<title>Canal Social</title>
<style>
li{ list-style:none;}
ul{position: relative;
bottom: 20px;}
.wrapper{ width:790px; height:700px; background:url(ima/fondo_social2.jpg) no-repeat 0 0 scroll; margin:0; }
.men2u{  width:45%; background:url(imagenes/fondomenu.jpg) repeat-x; margin:0px auto;}
.men2u ul li{height: 38px; margin: 0 auto;  }
.boton{ width:85px; float:left; background:url(ima/sprite.png) no-repeat top center; background-position:20 0; position:relative}
#youtube{ background-position:-10px 0px; z-index:10}
#youtube:hover{ background-position:-10px 0px; cursor:pointer;}
#twiter{ background-position:-10px -113px; z-index:9; right:15px;cursor:pointer}
/*#twiter:hover{ background-position:36px -152px; cursor:pointer}*/
#pinterest{ background-position:-11px -38px; z-index:8; right:31px; cursor:pointer}
/*#pinterest:hover{ background-position:33px -300px; cursor:pointer}*/
#instagram{ background-position:-11px -76px; z-index:7; right:48px;cursor:pointer }

#instagram1{ background-position:-11px -152px; z-index:6; right:-270px;cursor:pointer; margin-top:-38px }
/*#instagram:hover{ background-position:26px -114px; cursor:pointer}*/

/*#blog{ background-position:34px -480px}
#blog:hover{ background-position:34px -540px; cursor:pointer}*/
.instagram{

	margin-top:150px;

	text-align:center;

	margin-left: 30px;

	margin-right: 0px;

}
iframe
{
	background-color:transparent; 
}
h1
{
	 color:#3111c6;
}
.innertube{
	/*margin-top: 46px;
	margin-left:3px;
	min-height:7%;*/
	  margin: 12px auto;
       width: 654px;
}
</style>

<script>
 function preguntas(valuePreg,posx,posy)
 {
	
	// alert(valuePreg);
	var preguntas = document.getElementById("preguntas");
	preguntas.innerHTML = " "; 
	//robos
	if(valuePreg == 0 )
	{	 
	
preguntas.innerHTML='<iframe  src="youtube.php"width="832" height="490" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
		if(valuePreg ==1 )
	{	 
	
preguntas.innerHTML='<iframe   scrolling="no"  src="instagram.php" width="643" height="420" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
	if(valuePreg ==2 )
	{	 
	
preguntas.innerHTML='<iframe  src="pinterest.php" width="830" height="440" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';
document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
	if(valuePreg ==3 )
	{	 
	
preguntas.innerHTML='<iframe scrolling="no" src="twitter.php" width="712" height="420" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';
document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
	if(valuePreg ==4 )
	{	 
	
preguntas.innerHTML='<iframe  src="blog.php" width="670" height="440" frameborder="0" align="left" marginheight="30" marginwidth="0" align=left></iframe>';
/*document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';*/
	}
	if(valuePreg ==5 )
	{	 
	
preguntas.innerHTML='<iframe  src="flkr.php" width="850" height="440" frameborder="0" align="left"  align=left></iframe>';
document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
 }
 
 
	</script>
</head>

<body>

<div id="maincontent">
<div class="men2u" >
	<ul>
    	<li onClick="preguntas('0','0','0');" class="boton" id="youtube">
         &nbsp;
        </li>
         <li onClick="preguntas('3','-9','18');"  class="boton" id="twiter">
         &nbsp;
         </li>
         <li onClick="preguntas('2','-23','18');" class="boton" id="pinterest">
         &nbsp;
        </li>
        <li onClick="preguntas('1','-33','18');" class="boton" id="instagram">
         </li>
        
        <li onClick="preguntas('5','-38','-38');" class="boton" id="instagram1">
         </li>
       
        
        <!--<li  onclick="preguntas('4');" class="boton" id="blog">
         &nbsp;
        </li>-->
    
    </ul>
   </div>
<div class="innertube">

	<div id="preguntas">
		<iframe  src="youtube.php" width="832" height="490" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>
	</div>
</div>

</div>
</body>
</html>>