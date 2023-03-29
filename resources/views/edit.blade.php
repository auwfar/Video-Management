<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Video</title>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container col-md-6 position-absolute top-50 start-50 translate-middle">
            <h3>Edit Video</h3>
            <form action="/update/{!! $video->id !!}" method="post" enctype="multipart/form-data">
            	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				<div class="form-group">
					<label>Nama File</label>
					<input type="text" name="file_name" minlength="2" required class="form-control" placeholder="Masukkan nama file" value="{!! $video->file_name !!}">
				</div>
				<div class="form-group">
					<label>File Lama</label>
					<input type="text" name="old_file_url" readonly class="form-control" value="{!! $video->file_url !!}">
				</div>
				<div class="form-group mb-3">
					<label for="videoFile" class="form-label">File Baru</label>
					<input type="file" accept="video/*" name="video_file" class="form-control" id="videoFile">
				</div>
				<div class="form-group text-end">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
        	</form>
        </div>
	</body>
</html>