<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>{{ __ ('Respuesta automatica') }}</title>
</head>
<body>
    {{ __('Hola') }} <i>{{ $email->sender }}</i>,
    <br/>
    <br/>
    <p>{{ __('Muchas gracias por ponerte en contacto conmigo. Recibirá una respuesta de mi parte a la brevedad.') }}</p>

    <p>{{ __('Aquí puede ver el contenido del mensaje que me ha enviado:') }}</p>

    <div style="width: 100%; border:1px solid #000; padding-top: 5px; padding-bottom: 5px;">
    {{ $email->message }}
    </div>
    <br/>
    <p>{{ __('Si usted no se ha puesto en contacto conmigo, tenga en cuenta que alguien pudiere estar usando sus credenciales.') }}</p>

    {{ __('Muchas gracias') }}
    <br/>
    <br/>
    <i>Kevin Molina</i>
    <br/>
    <a href="https://molinakev.in">https://molinakev.in</a>
</body>
</html>
