<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mata Kuliah</title>

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
            flex-direction: column;
            padding: 20px;
            margin: 0;
        }
        h1, h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .table-container {
            width: 100%;
            max-width: 800px;
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Mata Kuliah Page</h1>
    <h2>Nama Mahasiswa: Justin Lotandy</h2>
    <h2>Student ID: 03081220033</h2>
    <a href="Home" class="btn btn-primary mt-4">Back to Home</a>
    <a href="Profile" class="btn btn-primary mt-4">Back to Profile</a>

    <div class="table-container">
        <h3>Semester Ganjil</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Etika</td>
                    <td>4.00</td>
                    <td>A-</td>
                </tr>
                <tr>
                    <td>Pancasila</td>
                    <td>2.00</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Leadership and Entrepreneurship</td>
                    <td>2.00</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Tech Skills</td>
                    <td>2.00</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Manajemen Sistem Informasi</td>
                    <td>3.00</td>
                    <td>B-</td>
                </tr>
                <tr>
                    <td>Analisis dan Desain Sistem</td>
                    <td>3.00</td>
                    <td>B-</td>
                </tr>
                <tr>
                    <td>Manajemen Proyek Sistem Informasi</td>
                    <td>3.00</td>
                    <td>B-</td>
                </tr>
                <tr>
                    <td>Dasar Teknologi Web</td>
                    <td>2.00</td>
                    <td>B+</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="table-container">
        <h3>akselerasi</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jaringan dan Keamanan Komputer</td>
                    <td>3.00</td>
                    <td>A-</td>
                </tr>
                <tr>
                    <td>Arsitektur Perusahaan</td>
                    <td>3.00</td>
                    <td>A-</td>
                </tr>
                <tr>
                    <td>Multimedia and The Web</td>
                    <td>3.00</td>
                    <td>A</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="table-container">
        <h3>Semester Genap</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Description</th>
                    <th>Units</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>FLA 12101A</td>
                    <td>KEWARGANEGARAAN</td>
                    <td>2.00</td>
                    <td>A-</td>
                </tr>
                <tr>
                    <td>SYS 07208</td>
                    <td>SISTEM OPERASI</td>
                    <td>3.00</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>SYS 07501</td>
                    <td>PENULISAN KARYA ILMIAH</td>
                    <td>2.00</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>SYS 07501B</td>
                    <td>E-BUSINESS & E-COMMERCE</td>
                    <td>4.00</td>
                    <td>A-</td>
                </tr>
                <tr>
                    <td>SYS 07502</td>
                    <td>PERANCANGAN & PEMROGRAMAN WEB</td>
                    <td>3.00</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>SYS 07503</td>
                    <td>PEMODELAN & ANALISI PROSES BIS</td>
                    <td>3.00</td>
                    <td>C+</td>
                </tr>
                <tr>
                    <td>SYS 07504</td>
                    <td>TATA KELOLA TI</td>
                    <td>3.00</td>
                    <td>B+</td>
                </tr>
                <tr>
                    <td>SYS 07505</td>
                    <td>KEAMANAN TI & MANAJEMEN RESIKO</td>
                    <td>3.00</td>
                    <td>B+</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
