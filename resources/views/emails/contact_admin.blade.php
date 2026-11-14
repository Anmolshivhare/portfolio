<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f6f8; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
        <div style="background-color: #0d6efd; color: #ffffff; padding: 20px; text-align: center;">
            <h2 style="margin: 0; font-size: 22px;">New Contact Form Message</h2>
            <p style="margin: 5px 0 0; font-size: 14px; opacity: 0.9;">You have received a new inquiry from your website portfolio.</p>
        </div>

        <div style="padding: 24px;">
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                <tr>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb; background-color: #f9fafb; width: 28%; font-weight: bold; color: #4b5563;">Name:</td>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb; color: #111827;">{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb; background-color: #f9fafb; font-weight: bold; color: #4b5563;">Email:</td>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb;">
                        <a href="mailto:{{ $data['email'] }}" style="color: #0d6efd; text-decoration: none;">{{ $data['email'] }}</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb; background-color: #f9fafb; font-weight: bold; color: #4b5563;">Subject:</td>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb; color: #111827;">{{ $data['subject'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb; background-color: #f9fafb; font-weight: bold; color: #4b5563; vertical-align: top;">Message:</td>
                    <td style="padding: 10px 12px; border: 1px solid #e5e7eb; color: #111827; white-space: pre-wrap;">{{ $data['message'] }}</td>
                </tr>
            </table>

            <div style="background-color: #eef2ff; border-left: 4px solid #0d6efd; padding: 12px; border-radius: 4px; font-size: 13px; color: #374151;">
                <strong>Quick Tip:</strong> You can directly hit <em>Reply</em> to this email to respond to <strong>{{ $data['name'] }}</strong> ({{ $data['email'] }}).
            </div>
        </div>

        <div style="background-color: #f9fafb; padding: 14px; text-align: center; font-size: 12px; color: #6b7280; border-top: 1px solid #e5e7eb;">
            Portfolio Contact Notification &bull; {{ config('app.name', 'Portfolio') }}
        </div>
    </div>
</body>
</html>
