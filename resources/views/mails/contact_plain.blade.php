<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>{{ __ ('Respuesta automatica') }}</title>
</head>
<body>
    {{ __('Hola') }} {{ $email->sender }},
    <br/>
    <br/>
    <p>{{ __('Muchas gracias por ponerte en contacto conmigo. Recibirá una respuesta de mi parte a la brevedad.') }}</p>

    <p>{{ __('Aquí puede ver el contenido del mensaje que me ha enviado:') }}</p>

    <div>
    {{ $email->message }}
    </div>
    <br/>
    <p>{{ __('Si usted no se ha puesto en contacto conmigo, tenga en cuenta que alguien pudiere estar usando sus credenciales.') }}</p>

    {{ __('Muchas gracias') }}
    <br/>
    <br/>
    Kevin Molina
    <br/>
    <a href="https://molinakev.in">https://molinakev.in</a>
</body>
</html>
