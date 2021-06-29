<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="server.php" id="sendUrls">
        <input type="url" name="url1">
        
        <br>
        <input type="url" name="url2">
        <br>
        <input type="url" name="url3">
        <br>
        <input type="url" name="url4">
        <br>
        <input type="url" name="url5">
        <input type="submit" value="отправить">
    </form>
	<div>
    <video id="myvideo" width="480" height="270" poster="poster.gif" >
        <source src="trailer_480p.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
        <source src="trailer_480p.webm" type='video/webm; codecs="vorbis,vp8"'/> 
    </video>
	</div>
	<div id="controls">
		<span id="playpause" class="paused" >Play</span>
	</div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>