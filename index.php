<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(109.6deg, rgb(0, 0, 0) 11.2%, rgb(0, 91, 101) 91.1%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgba(8, 86, 56, 0.9); /* Slightly transparent white */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
            color: #000000; /* Dark gray text color */
        }

        input,
        select {
            width: calc(100% - 16px); /* Adjusted width to leave room for padding */
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #000000; /* Green submit button */
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>

    <form id="registrationForm" action="card.php" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="income">Income per Month:</label>
        <input type="number" id="income" name="income" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="bloodGroup">Blood Group:</label>
        <input type="text" id="bloodGroup" name="bloodGroup" required>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
