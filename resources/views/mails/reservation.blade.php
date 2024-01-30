<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmation</title>
    <style>
        body {
            background-color: #f3f4f6;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .message {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .details-box {
            background-color: #d1fae5;
            color: #065f46;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .details-box strong {
            font-weight: bold;
        }

        .contact-info {
            font-size: 16px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="heading">Reservation For {{$reservation->pack->name}}</div>
    <div class="message">
        Dear {{$reservation->name}},
        <br><br>
        Thank you for choosing Furious Quad Marrakech! We have received your reservation .<br>
        To see your reservation <a href="https://furiousquadmarrakech.com/reservation/{{$reservation->id}}">Click Here</a>
    </div>
    <div class="details-box">
        <strong>Reservation Details:</strong><br>
        Date: {{$reservation->reservation_date}}<br>
        Time: {{$reservation->reservation_time}}<br>
        Drivers: {{$reservation->drivers}}<br>
        Passengers: {{$reservation->passengers}}<br>
        Children: {{$reservation->children}}<br>
        Total Price: {{$reservation->total_price}} Dh<br>
        Reservation ID: {{$reservation->id}}
    </div>
    <div class="message">
        We look forward to welcoming you on {{$reservation->reservation_date}}. If you have any questions or need to make changes to your reservation, please contact us at <a href="mailto:furiousmarrakech@gmail.com">furiousquadmarrakech@gmail.com</a> or call us at +212 6 06 04 02 70.
        <br><br>
        Thank you once again for choosing Furious Quad Marrakech. We can't wait to serve you!
    </div>
</div>
</body>

</html>
