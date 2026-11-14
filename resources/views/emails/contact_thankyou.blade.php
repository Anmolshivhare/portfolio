<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for getting in touch!</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f6f8; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
        <div style="background-color: #0d6efd; color: #ffffff; padding: 24px; text-align: center;">
            <h2 style="margin: 0; font-size: 22px;">Thank You for Reaching Out!</h2>
            <p style="margin: 6px 0 0; font-size: 14px; opacity: 0.9;">I have received your message.</p>
        </div>

        <div style="padding: 24px;">
            <p style="font-size: 16px; margin-top: 0;">Hi <strong>{{ $data['name'] }}</strong>,</p>

            <p>Thank you for contacting me through my portfolio website. I appreciate you taking the time to write!</p>

            <p>I have received your inquiry regarding <strong>"{{ $data['subject'] }}"</strong> and will review your message shortly. You can expect a response as soon as possible.</p>

            <div style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 6px; padding: 16px; margin: 20px 0;">
                <h4 style="margin: 0 0 10px; color: #4b5563; font-size: 14px; text-transform: uppercase; letter-spacing: 0.5px;">Summary of your message:</h4>
                <p style="margin: 0; color: #1f2937; white-space: pre-wrap; font-size: 14px;">{{ $data['message'] }}</p>
            </div>

            <p style="margin-bottom: 0;">Best regards,<br>
            <strong>{{ config('mail.from.name', config('app.name', 'Portfolio')) }}</strong></p>
        </div>

        <div style="background-color: #f9fafb; padding: 14px; text-align: center; font-size: 12px; color: #6b7280; border-top: 1px solid #e5e7eb;">
            This is an automated confirmation email &bull; {{ config('app.name', 'Portfolio') }}
        </div>
    </div>
</body>
</html>
