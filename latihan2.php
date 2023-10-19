<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- input -->
        <div class="card">
            <div class="card-body">
                <form method="get" action="latihan3.php">
                    <div class="form-group" >
                        <label for="Input1">Masukkan suhu dalam C</label>
                        <input type="number" name="inputAngka" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Angka">
                    </div>
                    <!-- dropdown -->
                    <br>
                    <label for="InputDropdown">Satuan suhu</label>
                    <select class="form-control" name="inputDropdown" >
                        <option>Select ...</option>
                        <option value="F">Fahrenheit</option>
                        <option value="K">Kelvin</option>
                        <option value="R">Reamur</option>
                    </select>
                    <br>
                    <center><button type="submit" class="btn btn-primary">Hitung</button></center>
                </form>
            </div>
        </div>
    </body>
</html>