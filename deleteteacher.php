<!doctype html>
<html>
<head>
    <title>Remove Teacher</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #f44336;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <h2>Remove Teacher</h2>
    <form action="removeteacher.php" method="POST">
        <label for="userid">User ID:</label>
        <input type="text" id="userid" name="userid" required>
        <br><br>
        <input type="submit" value="Remove Teacher">
    </form>
</body>
</html>
