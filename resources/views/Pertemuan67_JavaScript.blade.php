<html>
    <head>
        <title>JavaScript</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <script>
            function hello() {
                alert("Hello World!!");
            }   

            function tambah() {
                var bilangan1 = parseFloat(document.getElementById("bill").value);
                var bilangan2 = parseFloat(document.getElementById("bill2").value);

                hasil = bilangan1 + bilangan2;

                document.getElementById("hasil").innerHTML = hasil ; 
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="" style="padding: 50px;">
                <h3>Kalkulator</h3>
                Bilangan 1 :
                <input type="text" name="" id="bill" class="form-control" value="0">
                <br>
                Bilangan 2 :
                <input type="text" name="" id="bill2" class="form-control" value="0">
                <br>
                Hasil Penjumlahan : <div id="hasil"></div>
                <br>    
                <button type="button" class="btn btn-primary" onclick="tambah()">Tambah</button>
            </div>
        </div>
    </body>
</html>