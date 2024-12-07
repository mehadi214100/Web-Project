document.getElementById('appointmentForm').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const date = document.getElementById('date').value;

    if (!name || !email || !date) {
        alert('Please fill out all required fields.');
        event.preventDefault(); // Prevent form submission if validation fails
    }
});