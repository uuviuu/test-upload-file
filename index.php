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
    <input type="file" name="file" accept=".txt" id="file">
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

<form>
    <div class="form-group">
        <label for="type">Тип:</label>
        <select name="type" id="type">
            <option value="typeAll">Все</option>
            <option value="type1">Тип 1</option>
            <option value="type2">Тип 2</option>
            <option value="type3">Тип 3</option>
            <option value="type4">Тип 4</option>
            <option value="type5">Тип 5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="field1">Значение 1 (Тип 1)</label>
        <input type="text" name="field1_type1" id="field1">
    </div>
    <div class="form-group">
        <label for="field2">Значение 2 (Тип 1)</label>
        <input type="text" name="field2_type1" id="field2">
    </div>
    <div class="form-group">
        <label for="field3">Значение 3 (Тип 2)</label>
        <input type="text" name="field3_type2" id="field3">
    </div>
    <div class="form-group">
        <label for="field4">Значение 4 (Тип 3)</label>
        <input type="text" name="field4_type3" id="field4">
    </div>
    <div class="form-group">
        <label for="field5">Значение 5 (Тип 4)</label>
        <input type="text" name="field5_type4" id="field5">
    </div>
    <div class="form-group">
        <label for="field6">Значение 6 (Тип 5)</label>
        <input type="text" name="field6_type5" id="field6">
    </div>
    <div class="form-group">
        <label for="field7">Значение 7 (Тип 5)</label>
        <input type="text" name="field7_type5" id="field7">
    </div>
    <div class="form-group">
        <input name="button1_type1" type="button" value="Кнопка 1 (Тип 1)">
    </div>
    <div class="form-group">
        <input name="button2_type2" type="button" value="Кнопка 2 (Тип 2)">
    </div>
    <div class="form-group">
        <input name="button3_type3" type="button" value="Кнопка 3 (Тип 3)">
    </div>
    <div class="form-group">
        <input name="button4_type4" type="button" value="Кнопка 4 (Тип 4)">
    </div>
</form>
</body>
<script src="resources/formHandler.js" defer></script>
</html>
