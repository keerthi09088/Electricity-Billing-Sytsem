<!DOCTYPE html>
<html>
<head>
    <title>New Bill Entry - Electricity Billing System</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .success-message {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Bill Entry</h2>
        <form action="add_bill_process.php" method="post">
            <label for="connectionid">Connection ID:</label>
            <input type="text" id="connectionid" name="connectionid" required>

            <label for="initialreading">Initial Meter Reading:</label>
            <input type="number" id="initialreading" name="initialreading" required>

            <label for="finalreading">Final Meter Reading:</label>
            <input type="number" id="finalreading" name="finalreading" required>

            <label for="month">Month:</label>
            <input type="text" id="month" name="month" required>

            <label for="year">Year:</label>
            <input type="number" id="year" name="year" required>

            <label for="rate">Rate:</label>
            <input type="number" id="rate" name="rate" required>

            <button type="submit">Submit</button>
        </form>

        <?php
        // This section is for displaying the success message after adding the bill
        if (isset($_GET['success']) && $_GET['success'] == 'true') {
            echo '<p class="success-message">Bill successfully added!</p>';
        }
        ?>
    </div>
</body>
</html>
