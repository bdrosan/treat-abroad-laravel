<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Receipt</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; margin: 0; padding: 20px;">

<!-- Receipt Container -->
<div style="max-width: 600px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

    <!-- Logo Section -->
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('home') }}">
            <img style="max-height: 3em;"
                 src="/images/{{ \App\Models\Setting::key('site_logo_url') }}" alt="logo">
        </a>
        <h2 style="color: #333; margin-top: 10px;">Doctor's Appointment Receipt</h2>
    </div>

    <!-- Appointment Details -->
    <div style="margin-bottom: 20px;">
        <h3 style="color: #333; border-bottom: 1px solid #ddd; padding-bottom: 10px;">Appointment Details</h3>
        <p><strong>Appointment Serial:</strong> {{ "#".$appointment->id }}</p>
        <p><strong>Name:</strong> {{ $appointment->firstname . " " . $appointment->lastname }}</p>
        <p><strong>Age:</strong> {{ $appointment->age }}</p>
        <p><strong>Issue:</strong> {{ $appointment->issue }}</p>
        <p><strong>Phone:</strong> {{ $appointment->whatsapp }}</p>
    </div>

    <!-- Footer -->
    <div style="text-align: center; color: #666; font-size: 14px; margin-top: 20px;">
        <p>Thank you for booking an appointment with us.</p>
        <p>&copy; 2023 {{ \App\Models\Setting::key("site_name") }}. All Rights Reserved.</p>
    </div>
</div>

</body>
</html>
