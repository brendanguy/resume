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
});