// Juan Rodriguez September 28th, 2025
// Function to validate form before it submits
function validateForm() {
  // Get the form reference
  let form = document.forms["pilotForm"];

  // Extract values from inputs
  let name = form["name"].value.trim();    // Full name (text)
  let age = form["age"].value;             // Age (number)
  let hours = form["hours"].value;         // Flight hours (number)
  let motto = form["motto"].value.trim();  // Personal motto (text)
  let skill = form["skill"].value;         // Strongest skill (dropdown)

  // Checks if name is empty
  if (name === "") {
    alert("Please enter your full name.");
    return false; // Prevent form submission
  }

  // This checks if age is valid and within range
  if (isNaN(age) || age < 21 || age > 65) {
    alert("Age must be a number between 21 and 65.");
    return false;
  }

  // This checks if flight hours are acceptable
  if (isNaN(hours) || hours < 100) {
    alert("You must have at least 100 flight hours.");
    return false;
  }

  // This checks if any skill was picked
  if (skill === "") {
    alert("Please select your strongest skill.");
    return false;
  }

  // Thus makes sure that more than 10 characters are used for the motto
  if (motto.length < 10) {
    alert("Your motto must be at least 10 characters long.");
    return false;
  }

  // If all is good then it can be submitted
  return true;
}
