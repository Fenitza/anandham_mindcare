<!DOCTYPE html>
<html>
<body style="margin:0; background:#f4f6f9; font-family:Arial;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:20px;">
<tr>
<td align="center">

<table width="600" style="background:#fff; border-radius:8px; overflow:hidden;">

<!-- Header -->
<tr>
<td style="background:#1B3B6F; text-align:center; padding:20px;">
    <img src="https://yourdomain.com/images/logo.png" width="140">
    <h2 style="color:#fff;">Reset Your Password</h2>
</td>
</tr>

<!-- Body -->
<tr>
<td style="padding:30px; color:#333;">

<p>Hello {{ $user->name ?? 'User' }},</p>

<p>
We received a request to reset your password for your Anandham Mindcare account.
</p>

<div style="text-align:center; margin:30px 0;">
    <a href="{{ $url }}"
       style="background:#1B3B6F; color:#fff; padding:14px 24px; text-decoration:none; border-radius:6px;">
        Reset Password
    </a>
</div>

<p style="font-size:14px; color:#666;">
This link will expire in 60 minutes.
</p>

<p style="font-size:14px; color:#666;">
If you did not request this, you can safely ignore this email.
</p>

</td>
</tr>

<!-- Footer -->
<tr>
<td style="text-align:center; padding:20px; font-size:12px; color:#888;">
© {{ date('Y') }} Anandham Mindcare
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>