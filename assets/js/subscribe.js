const emailAdd = document.getElementById('email-address')

const submitButton = document.getElementById('subscribe')

emailAdd.addEventListener('input', ($event) =>{
    if ($event.target.value.length !== ''){
      submitButton.removeAttribute('disabled');
    } else{
      submitButton.setAttribute('disabled', 'true');
    }
  });
