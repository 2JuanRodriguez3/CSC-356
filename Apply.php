<!-- Juan Rodriguez September 27th, 2025 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mars Expeditions - Pilot Application Process</title>
  <!-- Link to external CSS -->
  <link rel="stylesheet" href="App.css">
  <!-- Link to external JavaScript -->
  <script src="Validation.js" defer></script>
</head>
<body>
  <h1>Mars Pilot Application</h1>
  <form name="pilotForm" action="review.php" method="post" onsubmit="return validateForm()">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name">

    <label for="age">Age (21-65):</label>
    <input type="number" id="age" name="age">

    <label for="hours">Total Flight Hours:</label>
    <input type="number" id="hours" name="hours">

    <label for="skill">Strongest Skill:</label>
    <select id="skill" name="skill">
      <option value="">-- Select --</option>
      <option value="Navigation">Navigation</option>
      <option value="Emergency Response">Emergency Response</option>
      <option value="Spacecraft Systems">Spacecraft Systems</option>
      <option value="Leadership">Leadership</option>
      <option value="Problem Solving">Problem Solving</option>
    </select>

    <label for="motto">Personal Motto (at least 10 characters):</label>
    <textarea id="motto" name="motto"></textarea>

    <button type="submit">Submit Application</button>
  </form>
</body>
</html>