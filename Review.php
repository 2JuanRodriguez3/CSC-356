<!-- Juan Rodriguez September 27th, 2025 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Results</title>
  <link rel="stylesheet" href="App.css">
</head>
<body>
  <h1>Application Received</h1>
  <p>Here is the information you submitted:</p>

  <script>
    // Get URL parameters
    const params = new URLSearchParams(window.location.search);

    document.write("<p><strong>Name:</strong> " + params.get("name") + "</p>");
    document.write("<p><strong>Age:</strong> " + params.get("age") + "</p>");
    document.write("<p><strong>Flight Hours:</strong> " + params.get("hours") + "</p>");
    document.write("<p><strong>Favorite Martian Feature:</strong> " + params.get("feature") + "</p>");
    document.write("<p><strong>Reason:</strong> " + params.get("reason") + "</p>");
  </script>
</body>
</html>
