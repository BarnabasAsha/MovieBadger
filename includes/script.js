const form = document.getElementById('subscribe')
const email = document.getElementById('email');

window.onload = (function () {
    email.value = '';
})

form.addEventListener('submit', (e) => {
    e.preventDefault()

    if (email.value === '') {
        alert('Please Enter a Valid Email', 'alert-danger')
    } else {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText, 'alert-success')
            }
        }
        xmlHttp.open('GET', `./includes/mailer.php?email=${email.value}`, true)
        xmlHttp.send()
    }
})

function alert(message, classTitle) {
    const alertBox = document.querySelector('.alertOne')
    alertBox.style.display = 'block';
    alertBox.textContent = message;
    alertBox.classList.add(classTitle);
    setTimeout(() => {
        alertBox.style.display = 'none';
    }, 1000)
    email.value = '';
}

// Second Form

const form2 = document.getElementById('subscribe2')
const email2 = document.getElementById('email2');

window.onload = (function () {
    email2.value = '';
})

form2.addEventListener('submit', (e) => {
    e.preventDefault()

    if (email2.value === '') {
        alertTwo('Please Enter a Valid Email', 'alert-danger')
    } else {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alertTwo(this.responseText, 'alert-success')
            }
        }
        xmlHttp.open('GET', `./includes/mailer.php?email=${email2.value}`, true)
        xmlHttp.send()
    }
})

function alertTwo(message, classTitle) {
    const alertBox2 = document.querySelector('.alertTwo')
    alertBox2.style.display = 'block';
    alertBox2.textContent = message;
    alertBox2.classList.add(classTitle);
    setTimeout(() => {
        alertBox2.style.display = 'none';
    }, 1000);
    email2.value = '';
}