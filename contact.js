document.getElementById('contactForm').addEventListener('submit', function (e) {
  e.preventDefault();
  const form = e.target;
  const formData = new FormData(form);

  fetch('contact.php', {
      method: 'POST',
      body: formData
  })
  .then(response => {
      if (response.ok) {
          return response.json();
      } else if (response.status === 400) {
          throw new Error('Validation error');
      } else {
          throw new Error('Server error');
      }
  })
  .then(data => {
      alert(data.message);
      form.reset();
  })
  .catch(error => {
      alert(error.message);
  });
});
