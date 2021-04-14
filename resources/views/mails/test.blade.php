{{ __('Hola') }} <i>{{ $email->sender }}</i>,
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
<i>Kevin Molina</i>
<br/>
<a href="https://molinakev.in">https://molinakev.in</a>
