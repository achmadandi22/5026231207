
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Achmad Andi Miftakhul Huda : 5026231207</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        
        .header-gradient {
            background: linear-gradient(135deg, #43cea2 0%, #185a9d 100%);
            padding: 25px 0;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
        }
        
        .header-text {
            color: white;
            font-weight: 600;
            letter-spacing: 1px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        .nav-menu {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 10px;
            margin-bottom: 25px;
        }
        
        .nav-item {
            margin: 5px;
        }
        
        .nav-link {
            border-radius: 8px;
            padding: 10px 15px;
            color: #495057;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }
        
        .nav-link:hover {
            background-color: #e9f9f9;
            color: #185a9d;
            transform: translateY(-2px);
        }
        
        .nav-icon {
            margin-right: 8px;
            font-size: 1.1em;
        }
        
        .content-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 25px;
        }
    </style>
</head>

<body>
    <div class="header-gradient text-center">
        <h1 class="header-text">5026231207 : Achmad Andi Miftakhul Huda</h1>
    </div>

    <div class="container">
        <nav class="nav-menu">
            <ul class="navbar-nav d-flex flex-row flex-wrap justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/frontend">
                        <i class="fas fa-laptop-code nav-icon"></i> All Front End
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">
                        <i class="fas fa-users nav-icon"></i> Pegawai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kulkas">
                        <i class="fas fa-snowflake nav-icon"></i> Tugas CRUD
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-graduation-cap nav-icon"></i> EAS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/latihan1">
                        <i class="fas fa-laptop nav-icon"></i> Latihan 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">
                        <i class="fas fa-laptop nav-icon"></i> Latihan 2
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">
                        <i class="fas fa-laptop nav-icon"></i> Latihan 3
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="content-container">
            @yield('content')
        </div>
    </div>

</body>

</html>
