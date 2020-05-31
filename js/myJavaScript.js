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
    $('#message').html(message);
}

function getTimeOfDay() {
    let now = new Date();
    let hour = now.getHours();
    return hour;
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

    attachEvents();
});

function attachEvents() {
    $('#form').submit(validateForm);
    $('#submit').on('click', formSubmission);
    $('.school').click(toggleSubtext);
}

function toggleSubtext($event) {
    console.log($event);
    $($event.target.nextElementSibling).toggle();
}


function validateForm($event) {
    if (!$('#name').val().includes(' ')) {
        $('#name-alert').addClass('show');
    } else {
        $('#name-alert').removeClass('show');
    }

    if (!$('#email').val().match(/([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})/)) {
        $('#email-alert').addClass('show');
    } else {
        $('#email-alert').removeClass('show');  
    }

    $event.preventDefault();
}

function formSubmission() {
    let contact = {
        name: '',
        email: '',
        phoneNumber: '',
        reason: '',
        comment: ''
    };

    contact.name = document.querySelector('#name').value;
    contact.email = document.querySelector('#email').value;
    contact.phoneNumber = document.querySelector('#phone').value;
    contact.reason = document.querySelector('#reason').value;
    contact.comment = document.querySelector('#comments').value;

    console.log(contact);
}