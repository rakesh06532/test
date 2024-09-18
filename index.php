<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encryption Practice</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
    <div class="containr">
        <div class="row">
            <div class="col-md-8 offset-md-2 bg-light p-4 mt-5 rounded">
                <form action="action.php" method="POST">
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="text" class="form-control" id="msg" rows="3" placeholder="Enter your message"></textarea><br>
                    </div>
                    <button type="submit" name="Encrypt" class="btn btn-primary">Encrypt</button>
                    <button type="submit" name="Decrypt" class="btn btn-primary">Decrypt</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>