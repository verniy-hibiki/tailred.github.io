<!DOCTYPE html>
<style>
	body{
		margin:3px;
		font:11px test,verdana;
	}
	object,iframe,center{
		border:ridge 2px #DEAD64;
		background:#000;
		padding:1px;
	}
	.i{ color:#999; }
	.i span{ color:#EEE; }
</style>
<body>
	<object type="application/x-shockwave-flash" width="798" height="483" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=verniy">
		<param name="flashvars" value="channel=verniy&auto_play=true">
		<param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf">
		<param name="allowFullScreen" value="true">
		<param name="allowscriptaccess" value="always">
	</object>
	<iframe src="http://www.twitch.tv/chat/embed?channel=verniy&popout_chat=true" width="310" height="477" scrolling="no"></iframe>
	<center style="width:792px">
		<span class="i">
			Viewers:
			<span id="vwr0">-</span> &nbsp; (
			<span id="vwr1">-</span>,
			<span id="vwr2">-</span>,
			<span id="vwr3">-</span> )<b style="margin-left:50px"></b>
			Views:
			<span id="numv">-</span>
		</span>
		<span id="size" style="margin-left:100px" class="i"></span>
	</center>
	<script>
		function info(){
			var s=document.createElement("script");
			var h=document.head;
			s.src="http://api.justin.tv/api/stream/list.json?jsonp=jsonp&channel=verniy";
			h.insertBefore(s, h.firstChild);
			h.removeChild(s);
			setTimeout("info()",30000);
		}
		window["jsonp"]=function(r){
			function s(n,x){ document.getElementById(n).innerHTML=x }
			s("vwr0",r[0].channel_count);
			s("vwr1",r[0].stream_count);
			s("vwr2",r[0].site_count);
			s("vwr3",r[0].embed_count);
			s("numv",r[0].channel_view_count);
			s("size",r[0].video_width+"x"+r[0].video_height+", "+Math.floor(r[0].video_bitrate)+"kbps");
		};
		info();
	</script>
</body>
