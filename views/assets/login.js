document.addEventListener('DOMContentLoaded', function() {
  const passwordInput = document.getElementById('password');
  const alertList = document.querySelector('.alert');
  const showPasswordButton = document.getElementById('showPw');

  passwordInput.addEventListener('input', function() {
    const password = this.value;
    const requirements = [
      { regex: /[0-9]/, message: 'Need at least 1 number' },
      { regex: /[A-Z]/, message: 'Need at least 1 uppercase letter' },
      { regex: /.{8,}/, message: 'Need at least 8 characters long' }
    ];

    alertList.innerHTML = '';

    requirements.forEach(requirement => {
      const li = document.createElement('li');
      const isValid = requirement.regex.test(password);
      li.textContent = requirement.message;
      if (!isValid) {
        alertList.appendChild(li);
      }
    });
  });

  showPasswordButton.addEventListener('mouseover', function() {
    passwordInput.type = 'text';
  });

  showPasswordButton.addEventListener('mouseout', function() {
    passwordInput.type = 'password';
  });
});