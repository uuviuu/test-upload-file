<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Загрузить файл</title>
    <link rel="stylesheet" href="resources/styles.css">
</head>
<body>
<h1>Загрузите файл формата .txt</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept=".txt">
    <button type="submit">Загрузить</button>
</form>
<div id="result">
    <?php if (isset($_GET['status'])): ?>
        <div class="circle <?= $_GET['status'] == 'success' ? 'success' : 'error' ?>"></div>
    <?php endif; ?>
</div>
<div id="output">
    <?php if (isset($_GET['output'])): ?>
        <?php
        $lines = explode("\n", $_GET['output']);
        foreach ($lines as $line) {
            if (trim($line) != "") {
                echo '<div class="output-line">' . $line . '</div>';
            }
        }
        ?>
    <?php endif; ?>
</div>
</body>
<script src="resources/formHandler.js" defer></script>
</html>
