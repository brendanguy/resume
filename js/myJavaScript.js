function customizeGreeting() {
    let hour = getTimeOfDay();
    let message = 'Hello';

    if (hour >= 5 && hour < 12) {
        message = 'Good Morning';
    } else if (hour >=12 && hour < 18) {
        message = 'Good Afternoon';
    } else if (hour >= 18) {
        message = ('Good Evening');
    }
    
    displayGreetingMessage(message);
}

function displayGreetingMessage(message) {
    document.getElementById('message').innerHTML = message;
}

function getTimeOfDay() {
    let now = new Date();
    let hour = now.getHours();
    return hour;
}

function getContactData() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    window.alert('Hello, ' + name + '! Thank you for your submission.')
}
function greetUser() {
    let name = document.getElementById('greetingName').value;
    document.getElementById('userName').innerHTML = name;
    $('#getUserName').modal('hide');
    $('#greetUser').modal('show');
}

$(document).ready(() => {
    $('#getUserName').modal('show');
    customizeGreeting();
});