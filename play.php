<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<hide>

<Module>
<ModulePrefs title="youtube channel" />
<Content type="html"><![CDATA[

  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    
    <style type="text/css">
	body
	{
		background-image:url(img/youtube3.png);
		/*background-image:url(img/youtube2.jpg);*/
		background-repeat:no-repeat;
	}
	#logo
	{
		/*padding-top:83px;
		padding-left:337px;*/
		/*padding-top:549px;
		padding-left:299px;*/
		background-image:url(img/logo1.png);
		background-repeat:no-repeat;
		margin-top:310px;
		margin-left:112px;
		
	}
	
#player {
	
   /*height: 450px;
    left: 173px;
    overflow: hidden;
    position: absolute;
    top: 283px;
    width: 571px;*/
	/* width: 458px;
    height: 450px;
	overflow:hidden;
    left:195px;
	top:250px;
	position:absolute;*/
	width: 545px;
height: 473px;
overflow: hidden;
left: 182px;
top: 283px;
position: absolute;
cursor: pointer; 
	
		
}
.youtube .carousel {
    width: 84%;
   overflow:auto;
    position: absolute;
    right: 80px;
    z-index: 3;
	top:381px;
	cursor: pointer; 
}

.youtube .thumbnail {
    margin: 2px;
    width: 30%;
    border: 1px solid black;		    cursor: pointer;  
}

.youtube iframe.player {
    width: 80%;
    height: 285px;  
    overflow: auto;
    border: 0;
	cursor: pointer; 
	
}
.logo
{
	margin-top:587px;
		margin-left:322px;
		position:absolute;
}
img {border:none;}
        </style>


       <div id="player">
        </div>

        <script language="JavaScript"  type="text/javascript">
            (function() {
    function createPlayer(jqe, video, options) {
        var ifr = $('iframe', jqe);
        if (ifr.length === 0) {
            ifr = $('<iframe scrolling="no">');
            ifr.addClass('player');
        }
        var src = 'https://www.youtube.com/embed/' + video.id;
        if (options.playopts) {
            src += '?';
            for (var k in options.playopts) {
                src+= k + '=' + options.playopts[k] + '&';
            }  
            src += '_a=b';
        }
        ifr.attr('src', src);
        jqe.append(ifr);  
    }
    
    function createCarousel(jqe, videos, options) {
        var car = $('div.carousel', jqe);
        if (car.length === 0) {
            car = $('<div>');
            car.addClass('carousel');
            jqe.append(car);
            
        }
        $.each(videos, function(i,video) {
            options.thumbnail(car, video, options); 
        });
    }
    
    function createThumbnail(jqe, video, options) {
        var imgurl = video.thumbnails[0].url;
        var img = $('img[src="' + imgurl + '"]');
        if (img.length !== 0) return;
        img = $('<img>');    
        img.addClass('thumbnail');
        jqe.append(img);
        img.attr('src', imgurl);
        img.attr('title', video.title);
        img.click(function() {
            options.player(options.maindiv, video, $.extend(true,{},options,{playopts:{autoplay:1}}));
        });
    }
    
    var defoptions = {
        autoplay: false,
        user: null,
        carousel: createCarousel,
        player: createPlayer,
        thumbnail: createThumbnail,
        loaded: function() {},
        playopts: {
            autoplay: 0,
            egm: 1,
            autohide: 1,
            fs: 1,
            showinfo: 0
        }
    };
    
    
    $.fn.extend({
        youTubeChannel: function(options) {
            var md = $(this);
            md.addClass('youtube');
            md.addClass('youtube-channel');
            var allopts = $.extend(true, {}, defoptions, options);
            allopts.maindiv = md;
            $.getJSON('https://gdata.youtube.com/feeds/users/' + allopts.user + '/uploads?alt=json-in-script&format=5&callback=?', null, function(data) {
                var feed = data.feed;
                var videos = [];
                $.each(feed.entry, function(i, entry) {
                    var video = {
                        title: entry.title.$t,
                        id: entry.id.$t.match('[^/]*$'),
                        thumbnails: entry.media$group.media$thumbnail
                    };
                    videos.push(video);
                });
                allopts.allvideos = videos;
                allopts.carousel(md, videos, allopts);
                allopts.player(md, videos[0], allopts);
                allopts.loaded(videos, allopts);
            });
        } 
    });
    
})();
        
$(function() {
    $('#player').youTubeChannel({user:'Induramainspira'});
});
        </script>   


</Content>
</Module>
</hide>
<title>Maggi</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38627793-1']);
  _gaq.push(['_setDomainName', 'appiglu.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '515762881853759',                        // App ID from the app dashboard
      channelUrl : 'www.appiglu.com/apps.facebook/utils/srcfb/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true,
	  oauth: true,                                  // Look for social plugins on the page
    });
			
    // Additional initialization code such as adding Event Listeners goes here
	
  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   
</script>
<div id class="youtube iframe.player">

</div>
</body>
</html>
