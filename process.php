<!DOCTYPE html>
<html>
<head>
    <title>QR Code Scanner</title>
    <script src="https://unpkg.com/@zxing/library@latest"></script>
</head>
<body>
    <h1>QR Code Scanner</h1>
    <video id="video" width="400" height="300"></video>
    <div id="qrcodeResult"></div>

    <script>
        let codeReader = new ZXing.BrowserQRCodeReader();
        let video = document.getElementById('video');
        let qrcodeResult = document.getElementById('qrcodeResult');

        codeReader
            .listVideoInputDevices()
            .then(videoInputDevices => {
                // Select the first video device found
                let selectedDeviceId = videoInputDevices[0].deviceId;

                // Start video stream from the selected device
                codeReader.decodeFromVideoDevice(selectedDeviceId, 'video', (result, err) => {
                    if (result) {
                        // QR code is successfully decoded
                        let data = result.getText();
                        let parts = data.split("|");
                        let link = parts[0];
                        let expirationDate = new Date(parts[1]);

                        let currentDateTime = new Date();

                        if (currentDateTime <= expirationDate) {
                            // QR code is not expired, navigate to the link
                            window.location.href = link;
                        } else {
                            // QR code is expired
                            alert("QR code has expired!");
                        }
                    }

                    if (err && !(err instanceof ZXing.NotFoundException)) {
                        // Handle any errors during QR code scanning
                        console.error(err);
                    }
                });
            })
            .catch(err => {
                console.error(err);
            });
    </script>
</body>
</html>