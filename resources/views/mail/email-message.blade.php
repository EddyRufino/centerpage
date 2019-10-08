@component('mail::message')
# Resumen del Mensaje

The body of your message.

# Asunto:<br>
{{ $msg['subject'] }}

# Contenido:<br>
{{ $msg['body'] }}

@component('mail::button', ['url' => ''])
Ver Mensaje
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
