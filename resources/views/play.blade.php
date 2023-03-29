<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Play Video</title>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container position-absolute top-50 start-50 translate-middle">
            <video class="w-100 video-js" controls preload="auto" data-setup='{"fluid": true}'>
			  <source src="{!! $video_url !!}" type="video/mp4" />
			</video>
        </div>
	</body>
</html>