<html>
    <body>
        <p><strong>Type of Ticket:</strong> {{ $mailData['typeofticket'] }}</p>
        <p><strong>Date of Visit:</strong> {{ $mailData['dateofvisit'] }}</p>

        <p><strong>Total Number of Adults:</strong> {{ $mailData['noofadults'] }}</p>
        <p><strong>Total Price of Adults:</strong> {{ $mailData['tpnoofadults'] }}</p>

        <p><strong>Total Number of Children:</strong> {{ $mailData['noofchildren'] }}</p>
        <p><strong>Total Price of Children:</strong> {{ $mailData['tpnoofchildren'] }}</p>

        <p><strong>Total Number of Sr. Citizens:</strong> {{ $mailData['noofcitizens'] }}</p>
        <p><strong>Total Price of Sr. Citizens:</strong> {{ $mailData['tpnoofcitizens'] }}</p>

        <p><strong>Total Visitors:</strong> {{ $mailData['totalvisitors'] }}</p>
        <p><strong>Total Price:</strong> {{ $mailData['totalprice'] }}</p>
    </body>
</html>