<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin:auto;
            width:450px;
            border:1px solid black;    
        }
        .efecto{
            width:12px;
            height: 12px;
            border-radius: 50%;
            transition:ease  .3s;
            animation: efecto 1.2s infinite;
        }
        @keyframes efecto{
       0%{
            box-shadow: 0 0 0 0 rgba(0,0,0,0.85);
        }
        100%{
            box-shadow: 0 0 0 25px rgba(26,116,26,0.3);
        }
}
    </style>
</head>
<body>
    <div class='efecto'></div>
    <form action="datosImagen.php" method="POST" enctype="multipart/form-data"> 
        <table>
            <tr>
                <td>
                    <input type="text" name="nombre">
                </td>
                <td> 
                   <label for="imagen">Imagen:</label>

                </td>
                <td>
                    <input type="file" name="imagen" size="20">
                </td>
            </tr>    
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="guardar">
                </td>
            </tr>
        </table>    
    </form>
</body>
</html>