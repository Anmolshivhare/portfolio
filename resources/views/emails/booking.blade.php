<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Tour Booking Request</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
        <h2 style="color: #1a73e8;">New Tour Booking Request</h2>
        <p>A new booking request has been submitted through the website contact form. Below are the details:</p>
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; width: 30%; font-weight: bold;">Name:</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $userData['user_name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Email:</td>
                <td style="padding: 10px; border: 1px solid #ddd;"><a href="mailto:{{ $userData['user_email'] }}">{{ $userData['user_email'] }}</a></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Phone:</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $userData['user_phone'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Selected Tour:</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $userData['tour'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Message:</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $userData['message'] }}</td>
            </tr>
        </table>

        <p>Please contact the user as soon as possible.</p>
        <p style="font-size: 0.9em; color: #777;">Thank you.</p>
    </div>
</body>
</html>