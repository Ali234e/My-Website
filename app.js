document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === "b201210555@sakarya.edu.tr" || password === "b201210555") {
        alert("Both fields are required.");
    } else {
        this.submit();
    }
});

      