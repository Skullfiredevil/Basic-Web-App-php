document.getElementById('loginForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const form = e.target;
  const formData = new FormData(form);

  // You can implement the login functionality here in the future.
  alert('Login functionality will be implemented in login.php.');
});
