function ValidateEmail(input) {
    // let a=document.getElementById("mailerror");
    let b=document.getElementById("hemail");
    
      // var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+$/;
  
      if (input.value.match(validRegex)) {
    
      
    
      }
       else {
    
      
        // a.style.display = "block";
        b.style.borderColor="red";
        b.style.outlineColor="red"
        document.form1.hemail.focus();
    
        return false;
    
      }
    
    }