
  window.onload=function(){
    const menu_btn=document.querySelector('.right-bar');
    const mobile_nav=document.querySelector('.mobile-nav');
  
    menu_btn.addEventListener('click',function(){
      menu_btn.classList.toggle('is-active');
      mobile_nav.classList.toggle('is-active');
    });
  };



    /*form valid js*/

  (function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()