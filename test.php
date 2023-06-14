<!DOCTYPE html>
<html>
<head>
    <title>Dynamic QR Code</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .qrcode-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #qrcode canvas {
            width: 200px;
            height: 200px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 style="color: #007bff;">Dynamic QR Code Generator</h1>
    <div>
        <label for="expiration">Expiration Date and Time:</label>
        <input type="datetime-local" id="expiration" />
        <button onclick="generateQRCode()">Generate QR Code</button>
    </div>
    <div class="qrcode-container">
        <div id="qrcode"></div>
    </div>

    <script>
        // Function to generate dynamic QR code
        function generateQRCode() {
            var link = "https://firebase.google.com/"; // Constant link
            var expirationInput = document.getElementById("expiration").value;
            var expirationDate = new Date(expirationInput); // Convert user input to date object

            // Check if the entered date is valid
            if (isNaN(expirationDate.getTime())) {
                alert("Invalid expiration date and time format!");
                return;
            }

            // Check if the current date is before the expiration date
            if (new Date() < expirationDate) {
                var qrCodeData = link + "|" + expirationDate; // Combine link and expiration date
                var qrcode = new QRCode(document.getElementById("qrcode"), {
                    text: qrCodeData,
                    width: 200,
                    height: 200
                });
            } else {
                alert("QR code has expired!");
            }
        }
    </script>
</body>
</html>
