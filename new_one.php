<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>QR Welcome</title>
  <script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>

  <style>
    body{
      font-family: Arial;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }
    #welcome{
      display: none;
      font-size: 40px;
    }
  </style>
</head>

<body>

  <!-- QR Section -->
  <div id="qrSection">
    <h2>Scan This QR Code</h2>
    <div id="qrcode"></div>
  </div>

  <!-- Welcome Section -->
  <div id="welcome">
    <h1>WELCOME</h1>
  </div>

  <script>
    // Agar URL me ?welcome ho to Welcome show kare
    if (window.location.search.includes("welcome")) {
      document.getElementById("qrSection").style.display = "none";
      document.getElementById("welcome").style.display = "block";
    } else {
      new QRCode(document.getElementById("qrcode"), {
        text: window.location.href + "?welcome",
        width: 200,
        height: 200
      });
    }
  </script>

</body>
</html>

