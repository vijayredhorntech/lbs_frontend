<!DOCTYPE html>
<html>
<head>
    <title>Complaint Status Update</title>
</head>
<body>
<p>Dear {{$complain['name']}},</p>

<p>Your complaint status has been updated:</p>
<ul>
    <li><strong>Status:</strong> {{$complain['status']}}</li>
    <li><strong>Remarks:</strong> {{$complain['remark']}}</li>
</ul>

<p>If you have any further concerns, please contact support.</p>

<p>Best regards,<br>
    Principal,<br>
    LBS Government College</p>
</body>
</html>
