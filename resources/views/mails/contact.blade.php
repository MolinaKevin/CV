<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Confirmación de contacto') }}</title>
</head>
<body style="margin: 0; padding: 0; background: #f2f6f7; color: #001946; font-family: Arial, Helvetica, sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="padding: 32px 16px; background: #f2f6f7;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="max-width: 600px; overflow: hidden; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 18px rgba(0, 25, 70, .12);">
                    <tr>
                        <td style="padding: 24px 32px; background: #025373; color: #f5fafa;">
                            <div style="font-size: 21px; font-weight: 700;">Kevin Molina</div>
                            <div style="padding-top: 4px; font-size: 14px; opacity: .9;">{{ __('Confirmación de contacto') }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 32px; font-size: 16px; line-height: 1.6;">
                            <p style="margin: 0 0 20px;">{{ __('Hola') }} <strong>{{ $email->sender }}</strong>,</p>
                            <p style="margin: 0 0 24px;">{{ __('Gracias por escribirme. Ya recibí tu mensaje y te responderé apenas pueda.') }}</p>

                            <div style="margin: 0 0 24px; padding: 18px; border-left: 4px solid #8ab0bf; background: #f5fafa;">
                                <div style="margin-bottom: 8px; font-size: 13px; font-weight: 700; letter-spacing: .04em; text-transform: uppercase; color: #025373;">{{ __('Tu mensaje') }}</div>
                                <div style="white-space: pre-wrap;">{{ $email->message }}</div>
                            </div>

                            <p style="margin: 0 0 24px; color: #52606d; font-size: 14px;">{{ __('Si no enviaste este mensaje, podés ignorar este correo.') }}</p>
                            <p style="margin: 0;">{{ __('Saludos,') }}<br><strong>Kevin Molina</strong><br><a href="https://molinakev.in" style="color: #025373;">molinakev.in</a></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
