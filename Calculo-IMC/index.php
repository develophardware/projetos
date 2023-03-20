<?php
require_once '../pages/header.php';

?>

<html>

<body>

    <div class="container" style="width: 300px; margin-top: 80px;">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Altura:</label>
            <input type="number" class="form-control" id="altura">
            <label for="exampleInputPassword1" class="form-label">Peso:</label>
            <input type="number" class="form-control" id="peso">
        </div>
        <button type="submit" class="btn btn-primary" id="calcular">Calcular</button>
        <label class="btn btn-sucsses" id="resposta"></label>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>


</html>