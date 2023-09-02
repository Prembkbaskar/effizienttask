/*document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("sopForm");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        generateSOP();
    });
});//

function generateSOP() {
    // Fetch form data and process here
    // You can use JavaScript to collect form input values, generate the SOP, and potentially send it via email.
    // Modify this function according to your requirements.
}*/

// This code will show the "If Other, please specify" input field when the "Other" option is selected in the "Highest Level of Education" select field.

var educationSelect = document.getElementById("education");
var otherInput = document.getElementById("Education");

educationSelect.addEventListener("change", function() {
  if (educationSelect.value === "other") {
    // Create the otherInput element if it doesn't exist yet
    if (!otherInput) {
      otherInput = document.createElement("input");
      otherInput.setAttribute("id", "otherInput");
      otherInput.setAttribute("type", "text");
      otherInput.setAttribute("placeholder", "Other");
      otherInput.style.display = "none";
      document.getElementById("bio-form").appendChild(otherInput);
    }

    otherInput.style.display = "block";
  } 
  else
  {
    otherInput.style.display = "none";
  }
});


/*   gform connect
function getFormData() {
  var formData = {};
  var form = document.getElementById("myForm");
  for (var i = 0; i < form.elements.length; i++) {
    var element = form.elements[i];
    formData[element.name] = element.value;
  }
  return formData;
}

function displayFormData() {
  var formData = getFormData();
  for (var key in formData) {
    document.getElementById(key).innerHTML = formData[key];
  }
}

document.getElementById("submitButton").addEventListener("click", displayFormData);
*/

const navBtn = document.getElementById('nav-btn');
const cancelBtn = document.getElementById('cancel-btn');
const sideNav = document.getElementById('sidenav');
const modal = document.getElementById('modal');

navBtn.addEventListener("click", function(){
    sideNav.classList.add('show');
    modal.classList.add('showModal');
});

cancelBtn.addEventListener('click', function(){
    sideNav.classList.remove('show');
    modal.classList.remove('showModal');
});

window.addEventListener('click', function(event){
    if(event.target === modal){
        sideNav.classList.remove('show');
        modal.classList.remove('showModal');
    }
});

