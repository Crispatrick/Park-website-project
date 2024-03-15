var acc = document.getElementsByClassName("accordion");


for (var i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}




// //!php button bypasser and required attribute toggler - doesnt work, below works
//   //makes the required button not triggered. Fylart in the future: for some reason this is not needed anymore, i dont know but i messed with the checkbox and all
//   // function toggleValidation() {
//   //   var form = document.getElementById('Form');
//   //   form.noValidate = !form.noValidate; 
//   //   if (form.noValidate) {
//   //     for (var i = 0; i < form.elements.length; i++) {
//   //       form.elements[i].removeAttribute('required');
//   //     }
//   //   } else {
//   //     var requiredElements = form.querySelectorAll('[required]');
//   //     requiredElements.forEach(function(element) {
//   //       element.setAttribute('required', 'required');
//   //     });
//   //   }
//   // }

//   function toggleCheckbox() {
//     var checkbox = document.getElementById('bypassButton').querySelector('input[type="checkbox"]');
//     checkbox.checked = !checkbox.checked; // Toggle the checkbox state
//     // console.log("napindot par")
//   }


//   //bypass the php default sent form, basta sininend nya agad kahit di submit type
//   document.getElementById('bypassButton').addEventListener('click', function(event) {
//     event.preventDefault(); 
//     // toggleValidation();
//     // toggleCheckbox();
//   });

//   function bypasser(){
//     event.preventDefault(); 
//     toggleCheckbox();
//   }




//*redo of the code above
document.querySelectorAll('.bypassButton').forEach(function(button) {
  button.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default button behavior
    // toggleValidation(); // Toggle validation behavior
    toggleCheckbox(this); // Toggle the checkbox state for the clicked button
    // You can add additional logic here if needed
    
  });
});

function toggleValidation() {
  var form = document.getElementById('myForm');
  form.noValidate = !form.noValidate; // Toggle HTML5 form validation
  if (form.noValidate) {
    // Remove 'required' attribute from all form elements
    for (var i = 0; i < form.elements.length; i++) {
      form.elements[i].removeAttribute('required');
    }
  } else {
    // Restore 'required' attribute for required elements
    var requiredElements = form.querySelectorAll('[required]');
    requiredElements.forEach(function(element) {
      element.setAttribute('required', 'required');
    });
  }
}

function toggleCheckbox(button) {
  var checkbox = button.querySelector('input[type="checkbox"]');
  if (checkbox && checkbox.type === 'checkbox') {
    checkbox.checked = !checkbox.checked; // Toggle the checkbox state
  }
}





//*checks if an attraction is picked, if not displays an js alert
function validateForm() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checked = false;

  checkboxes.forEach(function(checkbox) {
    if (checkbox.checked) {
      checked = true;
    }
  });

  if (!checked) {
    alert("Please select at least one attraction.");
    event.preventDefault(); 
    return false; // Prevent form submission
  }
}




//css doesnt have a built in function that change the posistion of a parent via child, so there you have it. a js function that maniputes the parent

left_move = 460;

function moveParent() {
  var parent = document.getElementById('nature');

  parent.style.zIndex = 2;
  parent.style.left = left_move + 'px'; // Adjust the value as needed
  parent.addEventListener('mouseleave', function() {
      parent.style.left = '140px'; // Return parent to original position when mouse leaves
      parent.style.zIndex = 1;
      
  });
}
function moveParent_ad() {
  var parent = document.getElementById('adventure');

  parent.style.zIndex = 2;
  parent.style.left = left_move + 'px'; // Adjust the value as needed
  parent.addEventListener('mouseleave', function() {
      parent.style.left = '140px'; // Return parent to original position when mouse leaves
      parent.style.zIndex = 1;
  });
}
function moveParent_lei() {
  var parent = document.getElementById('leisure');

  parent.style.zIndex = 2;
  parent.style.left = left_move + 'px'; // Adjust the value as needed
  parent.addEventListener('mouseleave', function() {
      parent.style.left = '140px'; // Return parent to original position when mouse leaves
      parent.style.zIndex = 1;

      
  });
}