const form = document.querySelector('card-back);
const nameInput = document.querySelector('input[type="text"]');
const emailInput = document.querySelector('input[type="email"]');
const passwordInput = document.querySelector('input[type="password"]');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  
  if (nameInput.value.trim() === '') {
    alert('Vă rugăm să introduceți numele dvs.');
    return;
  }
  
  const email = emailInput.value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert('Vă rugăm să introduceți o adresă de email validă.');
    return;
  }
  
  const password = passwordInput.value.trim();
  if (password.length < 8) {
    alert('Parola trebuie să fie de cel puțin 8 caractere.');
    return;
  }
  
  // dacă toate câmpurile sunt valide, puteți continua cu acțiunea dorită
  alert('Formularul a fost trimis cu succes!');
});