<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead - {{$contact->first_name}}</title>
</head>
<body style="font-family: Arial, sans-serif;">

    <div style="text-align: center; width: 100%; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f5f5f5; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #333;">New Lead - {{$contact->first_name}}</h1>
        <h4 style="color: #555; line-height: 1.6;">
            <strong>Vehicle Information:</strong><br>
            Vehicle Id: {{$contact->vehicle_id}}<br>
            First Name: {{$contact->first_name}}<br>
            Last Name: {{$contact->last_name}}<br>
            Email: {{$contact->email}}<br>
            Phone: {{$contact->phone}}<br>
            Payment Method: {{$contact->payment_method}}<br>
            Postal code: {{$vehicle->postal_code}}<br>
            Sent on: {{date('d, M Y h:i:s', strtotime($contact->created_at))}}<br>
        </h4>
        <hr style="border: 1px solid #ddd;">
        <h4 style="color: #555; line-height: 1.6;">
            <strong>Vehicle Details:</strong><br>
            Vin number: {{$vehicle->vin_number}}<br>
            Vehicle Type: {{$vehicle->vehicle_type}}<br>
            Make: {{$vehicle->make}}<br>
            Model: {{$vehicle->model}}<br>
            Year: {{$vehicle->year}}<br>
            Trim: {{$vehicle->trim}}<br>
            Mileage: {{$vehicle->km}}<br>
            Exterior Color: {{$vehicle->vec_exterior_color}}<br>
            Replacement: {{$vehicle->replacing}}<br>
            Lease Company: {{$vehicle->lease_company}}<br>
            Repair Cost: {{$vehicle->repair_cost}}<br>
            Damage History: {{$vehicle->damage_history}}<br>
        </h4>
        <br>
        <img src="https://vincash.ca/public/images/1653367549.png" alt="Logo" width="140" style="margin-top: 20px;">
    </div>

</body>
</html>
