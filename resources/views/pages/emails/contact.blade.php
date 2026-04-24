<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Enquiry</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f9; font-family: Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f9; padding:20px 0;">
<tr>
<td align="center">

    <!-- Main Container -->
    <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.05);">

        <!-- Header -->
        <tr>
            <td style="background:#1B3B6F; padding:20px; text-align:center;">
                <img src="{{ asset('logo/academy_logo.jpeg') }}" alt="Anandham Mindcare Foundation" width="140" style="margin-bottom:10px;">
                <h1 style="color:#ffffff; margin:0; font-size:20px;">New Contact Enquiry</h1>
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:30px; color:#333333;">

                <p style="font-size:16px; margin-bottom:20px;">
                    You’ve received a new enquiry through your website.
                </p>

                <!-- Info Card -->
                <table width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e0e3e6; border-radius:6px;">
                    
                    <tr>
                        <td style="padding:12px; background:#f7f9fc;"><strong>Name</strong></td>
                        <td style="padding:12px;">{{ $name }}</td>
                    </tr>

                    <tr>
                        <td style="padding:12px; background:#f7f9fc;"><strong>Email</strong></td>
                        <td style="padding:12px;">{{ $email }}</td>
                    </tr>

                    <tr>
                        <td style="padding:12px; background:#f7f9fc;"><strong>Service</strong></td>
                        <td style="padding:12px;">{{ $service }}</td>
                    </tr>

                </table>

                <!-- Message -->
                <div style="margin-top:25px;">
                    <p style="font-weight:bold; margin-bottom:10px;">Message</p>
                    <div style="padding:15px; background:#f2f4f7; border-left:4px solid #fccc38; border-radius:4px; line-height:1.6;">
                        {{ $user_message }}
                    </div>
                </div>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="padding:20px; text-align:center; font-size:12px; color:#777;">
                <p style="margin:0;">Anandham Mindcare</p>
                <p style="margin:5px 0;">Compassion • Science • Healing</p>
                <p style="margin:0;">© {{ date('Y') }} All rights reserved</p>
            </td>
        </tr>

    </table>

</td>
</tr>
</table>

</body>
</html>