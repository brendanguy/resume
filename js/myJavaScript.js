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

function displayReferences() {
    let references = [
        {
            name: 'Peter Yin',
            phoneNumber: '801-651-3347',
            email: 'peter_yin@live.com'
        },
        {
            name: 'Anh Pham',
            phoneNumber: '801-512-6938',
            email: ''
        }
    ];

    let tableBody = document.querySelector('#references-table > tbody')

    for (let reference of references) {
        /*
        <tr>
            <td>reference.name</td>
            <td>reference.phoneNumber</td>
            <td>reference.email</td>
        </tr>
        */
       let html = '';
       html += '<tr>';
       html += '<td>' + reference.name + '</td>';
       html += '<td>' + reference.phoneNumber + '</td>';
       html += '<td>' + reference.email + '</td>';
       html += '</tr>';

       tableBody.innerHTML += html;
    }
}

$(document).ready(() => {
    $('#getUserName').modal('show');
    customizeGreeting();
    displayReferences();

    document.getElementById('form').onsubmit = validateForm;
});

function validateForm(event) {
    if (!document.getElementById('name').value.includes(' ')) {
        event.preventDefault();
    }
}