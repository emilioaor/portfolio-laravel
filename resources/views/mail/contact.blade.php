<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no" /> <!-- disable auto telephone linking in iOS -->

</head>
<body style="font-family: 'Roboto Condensed', sans-serif;">
    <div class='container' style="
            max-width: 700px;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding-bottom: 20px;">
        <p style="
            background-color: #f05f40;
            color: #fff;
            padding: 10px;
            font-size: 22px;
            font-family: 'Cantata One', serif;
            margin: 0;
            -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
            {{ $name }}, su mensaje fue enviado.
        </p>
        <div>
            <p style="box-sizing: border-box; padding: 5px 10px; text-align: justify;">
                Un placer en saludarte {{ $name }}, su mensaje fue enviado satisfactoriamente, muchas gracias por escribir tan pronto sea posible le daré un mensaje de respuesta.
                <br><br>
                Atte: Emilio Ochoa
            </p>
        </div>
        <hr>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Nombre:</strong>
            {{ $name }}
        </p>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Email:</strong>
            {{ $email }}
        </p>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Objetivos para crear pagina web:</strong>
            {{ $goals }}
        </p>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Referencias:</strong>
            {{ $references }}
        </p>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Modelos de diseño:</strong>
            {{ $references2 }}
        </p>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Otros comentarios:</strong>
            {{ $msg }}
        </p>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Presupuesto:</strong>
            {{ $amount }}
        </p>
        <p style="-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; padding: 5px 10px;">
            <strong>Tiempo de entrega:</strong>
            {{ $endTime }}
        </p>
    </div>
</body>
</html>