
    function validateForm() {
        const fullname = document.getElementById('nom').value;
        const email = document.getElementById('prenom').value;
        const phone = document.getElementById('email').value;
        const message = document.getElementById('pass').value;


        if (!/^[a-zA-Z]+$/.test(nom)) {
            let span = document.getElementById('nameeror');
            span.innerHTML='Name must contain only letters';
            span.style.color='red';
            return false;
        }
        
        if (!/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[A-Za-z]+$/.test(email)) {
            let span = document.getElementById('emaileror');
            span.innerHTML='email invalid';
            span.style.color='red';
            
            return false;
        }

        if (!/^[a-zA-Z0-9]+$/.test(phone)) {
            let span = document.getElementById('phoneeror');
            span.innerHTML='phone must contain only numbers';
            span.style.color='red';
            
            return false;
        }

        }
            if (!/^[a-zA-Z]+$/.test(password)) {
                let span = document.getElementById('passeror');
                span.innerHTML='description invalid';
                span.style.color='red';
            
            return false;
        }