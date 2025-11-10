function validateForm() {
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const mobile1 = document.getElementById("mobile1").value.trim();
  const event = document.getElementById("event").value;

  // Regular expressions
  const namePattern = /^[A-Za-z\s]+$/;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const mobilePattern = /^[0-9]{10}$/;

  // Validation checks
  if (name === "" || !namePattern.test(name)) {
    alert("Please enter a valid name (letters only).");
    return false;
  }

  if (email === "" || !emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (mobile1 === "" || !mobilePattern.test(mobile1)) {
    alert("Please enter a valid 10-digit mobile number.");
    return false;
  }

  if (event === "") {
    alert("Please select an event.");
    return false;
  }

  alert("✅ Registration Successful!");
  return true;
}
