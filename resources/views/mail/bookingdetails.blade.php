<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007BFF;
        }

        .details {
            margin-top: 20px;
        }

        .details p {
            margin: 5px 0;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Booking Confirmation</h1>
        <p>Dear {{ $bookingDetails[0]->name }},</p>
        <p>Thank you for booking with us. Below are your booking details:</p>

        <div class="details">
            <p><strong>Booking ID:</strong> {{ $user->id }}</p>
            <p><strong>Movie Name:</strong> {{ $user->movie->movie_name }}</p>
            <p><strong>Multiplex Name:</strong> {{ $user->multiplex->multiplex_name }}</p>
            <p><strong>Booking Date:</strong> {{ $bookings->booking_date }}</p>
            <p><strong>Seat Number:</strong> {{ $user->seat_number }}</p>
            <p><strong>Total Seat:</strong> {{ $user->total_seat }}</p>
            <p><strong>Total Amount:</strong> ${{ $user->total_amount }}</p>
        </div>

        <div class="footer">
            <p>If you have any questions, please contact us at support@example.com.</p>
            <p>Thank you for choosing us!</p>
        </div>
    </div>
</body>

</html>
