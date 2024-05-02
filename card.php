<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(109.6deg, rgb(0, 0, 0) 11.2%, rgb(11, 132, 145) 91.1%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-card {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: left;
        }

        .profile-card h2 {
            margin-bottom: 10px;
            color: #fff;
        }

        .profile-card .label {
            font-weight: bold;
            color: #fff;
        }

        .profile-card .value {
            color: #bbb;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <h2><?php echo isset($_GET['name']) ? $_GET['name'] : 'Your Name'; ?></h2>

        <p class="label">Age: <span class="value"><?php echo isset($_GET['age']) ? $_GET['age'] : 'N/A'; ?></span></p>

        <p class="label">Address: <span class="value"><?php echo isset($_GET['address']) ? $_GET['address'] : 'N/A'; ?></span></p>

        <p class="label">Income per Month: <span class="value"><?php echo isset($_GET['income']) ? '&#2547;' . $_GET['income'] : 'N/A'; ?></span></p>

        <p class="label">Phone Number: <span class="value"><?php echo isset($_GET['phone']) ? $_GET['phone'] : 'N/A'; ?></span></p>

        <p class="label">Email Address: <span class="value"><?php echo isset($_GET['email']) ? $_GET['email'] : 'N/A'; ?></span></p>

        <p class="label">Gender: <span class="value"><?php echo isset($_GET['gender']) ? $_GET['gender'] : 'N/A'; ?></span></p>

        <p class="label">Blood Group: <span class="value"><?php echo isset($_GET['bloodGroup']) ? $_GET['bloodGroup'] : 'N/A'; ?></span></p>
    </div>

</body>
</html>
