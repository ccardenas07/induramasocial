

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>NonStopExplorer - Instagram</title>



 <script type="text/javascript">



</script>

<style type="text/css">

body{

	margin:0;

	background-repeat:no-repeat;

	background-position:top left;

	height:800px;

	width:790px;

}

.instagram{
margin-left: 30px;
	/*margin-top:150px;

	text-align:center;

	

	margin-right: 0px;
*/
}



.instagram-placeholder{

	float:left;

	margin-left: 2px;

	margin-right:2px;

	margin-top:4px;

	-webkit-border-radius: 3px;

	-moz-border-radius: 3px;

	border-radius: 3px;

}



.instagram-placeholder:hover{

	float:left;

	margin-left: 2px;

	margin-right:2px;

	margin-top:4px;

	opacity:0.9;

	filter:alpha(opacity=90);

	-webkit-border-radius: 5px;

	-moz-border-radius: 5px;

	border-radius: 5px;

	-webkit-box-shadow: 0px 0px 6px rgba(50, 50, 50, 0.55);

	-moz-box-shadow:    0px 0px 6px rgba(50, 50, 50, 0.55);

	box-shadow:         0px 0px 6px rgba(50, 50, 50, 0.55); /* For IE8 and earlier */

}



img{

	-webkit-border-radius: 3px;

	-moz-border-radius: 3px;

	border-radius: 3px;

}

.mainholder
{
	/*width:823px;*/
	margin:0 auto;
	float:left;
}
.objetos
{
	width:27%;
	margin:1%;
	padding:5px;
	float:left;
}

</style>

</head>



<body>
<div class="mainholder">
<div class="objetos">
<img src="ima/refri2.png" width="132px" height="253px">
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

<div class="instagram">



 <script type="text/javascript">

$(function() {



    $.ajax({

    	type: "GET",

        dataType: "jsonp",

        cache: false,

        url: "https://api.instagram.com/v1/tags/indurama/media/recent?client_id=39b7ecfe8a1b4b069b0c9e88cfb33635#access_token=289150290.3fe6b6a.ac7852be1aae4573bbebb80ba41533a9",

        success: function(data) {



            for (var i = 4; i < 15; i++) {

        $(".instagram").append("<div class='instagram-placeholder'><a target='_blank' href='" + data.data[i].link +"'><img width='130' class='instagram-image' src='"+ data.data[i].images.standard_resolution.url+"' /></a></div>");   

      		}     

                            

        }

    });

});

</script>

</div>
<iframe id="iframecode" onload="" scrolling="no" frameborder="0" width="536" src="https://instaembedder.com/gallery.php?username=indurama&amp;hashtag=&amp;width=150&amp;cols=3&amp;frame=1&amp;image_border=10&amp;rows=2&amp;cell_margin=10&amp;display_username=0&amp;likes=1&amp;comments=1&amp;date=1&amp;link=1&amp;caption=0&amp;color=gray" style="height: 804px;"></iframe>
</div>
</div>
</body>



</html>