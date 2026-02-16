document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector("form");

  form.addEventListener("submit", function(event) {
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const course = form.course.value.trim();

    if (!name || !email || !course) {
      alert("Please fill out all fields!");
      event.preventDefault(); // stop form submission
    }

    // Simple email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
      alert("Please enter a valid email address!");
      event.preventDefault();
    }
  });
});
