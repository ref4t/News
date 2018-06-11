<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Site</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/summernote.css" rel="stylesheet">
    <script src="js/summernote.js"></script>
</head>
<body>

<div class="container">
    <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>
    <form name="summernote" method="post" action="setdata.php">
        <textarea name="newsbody" id="summernote"></textarea>
        <input type="submit" class="btn btn-success"/>
    </form>
    <br/>
<a href="viewdata.php" class="btn btn-primary">View Data</a>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>
</html>