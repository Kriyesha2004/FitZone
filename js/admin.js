document.addEventListener("DOMContentLoaded", () => {
    fetch("admin_home.php")
        .then(response => response.json())
        .then(data => {
            document.getElementById("customerCount").innerText = data.customers;
            document.getElementById("staffCount").innerText = data.staff;
        })
        .catch(error => console.error("Error fetching data:", error));
});
