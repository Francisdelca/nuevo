<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <header>
        <h1><a href="#">Cacao cool</a></h1>
        <a href="$">Salir</a>
    </header>
    <div id="contenido"></div>
    <script>
        $(document).ready(function()
        {
            setInterval(() => {
                $.ajax({  
                url: 'leerdato.php',  
                success: function(data) {  
                $('#contenido').html(data);  
                }  
                });
            }, 1000);
        });
    </script>
</body>
</html>