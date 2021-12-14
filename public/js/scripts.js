function verifInput(input){
  
    const inputType = input.getAttribute('type');
    // Name => Abcdef - 2 caractères minimum
    const pseudoRegex = /^[a-zA-Z-]{2,}$/;
    // Password => 8caractères minimum + 1 majuscule minimum + 1 caractère spécial
    const pwdRegex = /((?=.*[0-9])(?=.*[A-Z])(?=.*[!+*&#$@%€])){8,}/;
    let test, msg;
    
    switch(inputType){
      case 'text':
        test = pseudoRegex.test(input.value);
        msg = 'Nom incorrect (minimum 2 caractères , pas de caractères spéciaux)';
      break;
      case 'password':
        test = pwdRegex.test(input.value);

      break;
      default:
        
    }
     
    if(!test){
      input.style.borderColor = 'red' ;
      alert(msg);
    }else{
      input.style.borderColor = 'green' ;
    }
    return test; 
  }
  
  const inputs = document.querySelectorAll("input");
  
  inputs.forEach((input) => {
    input.addEventListener("blur", (e) => {
      console.log(verifInput(input));
    });
  });
  