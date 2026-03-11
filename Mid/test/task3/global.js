const registrations = [];
document.getElementById('reg').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('fullName').value.trim();
    const email = document.getElementById('email').value.trim();
    const type = document.querySelector('input[name="attendance"]:checked');
    const nameErr = document.getElementById('nameErr');
    const emailErr = document.getElementById('emailErr');
    const typeErr = document.getElementById('typeErr');
    let isValid = true;
    if (name.length < 6 || name.length > 100) {
        nameErr.innerHTML = "name must be between 6 and 100 characters.";
        isValid = false;
    } else { nameErr.innerHTML = ""; }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        emailErr.innerHTML = "enter a valid email.";
        isValid = false;
    } else { emailErr.innerHTML = ""; }

    if (!type) {
        typeErr.innerHTML = "select your attendance type.";
        isValid = false;
    } else { typeErr.innerHTML = ""; }

    if (isValid) {
        registrations.push({ type: type.value });
        alert("Registration successful!");
        this.reset();
        updateStats();
    }
});
function updateStats() {
    document.getElementById('totalCount').innerText = registrations.length;
    document.getElementById('virtualCount').innerText = registrations.filter(r=> r.type === 'Virtual').length;
    document.getElementById('inPersonCount').innerText = registrations.filter(r=> r.type === 'In-Person').length;
}

document.getElementById('a').addEventListener('click', function () {
    const panel = document.getElementById('event');
    const isHidden = panel.style.display === 'none' || panel.style.display === '';
    panel.style.display = isHidden ? 'block' : 'none';
    this.innerText = isHidden ? 'Hide Event Analytics' : 'Show Event Analytics';
});
