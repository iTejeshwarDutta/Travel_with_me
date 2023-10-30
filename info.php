
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Popup</title>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  .popup-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
  }
  .popup-content {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    max-width: 80%;
    text-align: center;
  }
  img {
    cursor: pointer;
    max-width: 100%;
    height: auto;
  }
</style>
</head>
<body>
  <img src="your_image_url.jpg" alt="Click me" onclick="openPopup()">
  <div class="popup-container" id="popup">
    <div class="popup-content">
      <h2>Details</h2>
      <p>Here are some details about the image.</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>

  <script>
    function openPopup() {
      document.getElementById('popup').style.display = 'flex';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
  </script>
</body>
</html>
