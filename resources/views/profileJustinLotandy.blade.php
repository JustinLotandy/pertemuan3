<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            width: 500px;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            background-color: #fff;
        }
        .card-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            font-size: 1.1rem;
            color: #555;
        }
        .info-label {
            font-weight: bold;
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="card text-center">
    <h1 class="card-title">Profile Page</h1>
    
    <div class="info-row">
        <div class="info-label">Nama Mahasiswa:</div>
        <div>Justin Lotandy</div>
    </div>
    <div class="info-row">
        <div class="info-label">Jurusan:</div>
        <div>Sistem Informasi</div>
    </div>
    <div class="info-row">
        <div class="info-label">Fakultas:</div>
        <div>Fakultas Science and Technology</div>
    </div>
    <div class="info-row">
        <div class="info-label">Hobi:</div>
        <div>Basket</div>
    </div>
    
    <a href="Matakuliah" class="btn btn-primary mt-4">Go to Mata Kuliah</a>
    <a href="Home" class="btn btn-primary mt-4">Back to Home</a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
