
    function validateForm() {
        const fname = document.forms['myform']['nom'].value;
        const lname = document.forms['myform']['prenom'].value;
        const email = document.forms['myform']['email'].value;
        const password = document.forms['myform']['pass'].value;
        const regex_name = /^[a-zA-Z]+$/;
        const regex_email = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[A-Za-z]+$/;
        const regex_pass = /^[a-zA-Z]+$/;
        


        if (regex_name.test(fname) === false) {
            let span = document.getElementById('nameeror');
            span.innerHTML='Name must contain only letters';
            span.style.color='red';
            return false;
        }
        if (regex_name.test(lname) === false) {
            let span = document.getElementById('nameeror');
            span.innerHTML='Name must contain only letters';
            span.style.color='red';
            return false;
        }
        
        if (regex_email.test(email) === false) {
            let span = document.getElementById('emaileror');
            span.innerHTML='email invalid';
            span.style.color='red';
            
            return false;
        }
        
        if (regex_pass.test(password) === false && password < 1) {
            let span = document.getElementById('passeror');
            span.innerHTML='password invalid';
            span.style.color='red';
        
        return false;
        }
    }