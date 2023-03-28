<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tambah Video</title>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container col-md-6 position-absolute top-50 start-50 translate-middle">
            <h3>Tambah Video</h3>
            <form action="/store" method="post" enctype="multipart/form-data" id="add_form">
            	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				<div class="form-group">
					<label>Nama File</label>
					<input type="text" name="file_name" minlength="2" required class="form-control" placeholder="Masukkan nama file">
				</div>
				<div class="form-group mb-3" style="margin-top: 10px;">
					<label for="videoFile" class="form-label">File</label>
					<input type="file" accept="video/*" required name="video_file" class="form-control" id="videoFile">
				</div>
				<div class="form-group text-end">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
        	</form>
        </div>
	</body>
</html>