function checkInput(element, group, feedback, minLength) {
  var value = element.value.trim();

  group.classList.remove('has-error', 'has-success');
  feedback.innerHTML = '';

  if (value.length === 0) {
    feedback.innerHTML = 'This field cannot be empty';
    group.classList.add('has-error');
  } else if (value.length < minLength) {
    feedback.innerHTML = 'Must be at least ' + minLength + ' characters';
    group.classList.add('has-error');
  } else {
    feedback.innerHTML = 'Looks good!';
    group.classList.add('has-success');
  }
}

var elUsername = document.getElementById('username');
var elUserGroup = document.getElementById('unGroup');
var elUserFeedback = document.getElementById('userFeedback');

var elPassword = document.getElementById('password');
var elPwdGroup = document.getElementById('pwdGroup');
var elPwdFeedback = document.getElementById('pwdFeedback');

elUsername.addEventListener('blur', function() {
  checkInput(elUsername, elUserGroup, elUserFeedback, 4);
}, false);

elPassword.addEventListener('blur', function() {
  checkInput(elPassword, elPwdGroup, elPwdFeedback, 8);
}, false);
