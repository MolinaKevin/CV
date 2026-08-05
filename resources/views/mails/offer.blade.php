<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje desde molinakev.in</title>
</head>
<body>
    <p><strong>Nombre:</strong> {{ $email->sender }}</p>
    <p><strong>Email:</strong> <a href="mailto:{{ $email->senderEmail }}">{{ $email->senderEmail }}</a></p>
    <p><strong>Asunto:</strong> {{ $email->subject }}</p>
    <p><strong>Mensaje:</strong></p>
    <div style="white-space: pre-wrap; border: 1px solid #000; padding: 8px;">{{ $email->message }}</div>
</body>
</html>
