// Get form elements by their IDs
const form = document.getElementById("Form");
const profileContainer = document.getElementById("profile");

// Add a form submit event listener
form.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission behavior

    // Capture form data
    const email = document.getElementById("email").value;
    const fullName = document.getElementById("fullName").value;
    const age = document.getElementById("age").value;
    const education = document.getElementById("education").value;
    const Institutename = document.getElementById("Institute name").value;
    const study = document.getElementById("study").value;
    const workexperience = document.getElementById("workexperience").value;
    const  admittedInstitute = document.getElementById("admittedInstitute").value;
    const secondInstitute = document.getElementById("secondInstitute").value;
    const countryApplyingFrom = document.getElementById("countryApplyingFrom").value;
    const futureGoals = document.getElementById("futureGoals").value;
    const listeningScore = document.getElementById("listeningScore").value;
    const readingScore = document.getElementById("readingScore").value;
    const speakingScore = document.getElementById("speakingScore").value;
    const writingScore = document.getElementById("writingScore").value;
    const tuitionPayment = document.getElementById("tuitionPayment").value;
    const tuitionAmount = document.getElementById("tuitionAmount").value;
    const gicStatus = document.getElementById("gicStatus").value;
    const gicAmount = document.getElementById("gicAmount").value;



    // Create a user profile
    const userProfile = `
        <h2>${fullName}</h2>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Age:</strong> ${age}</p>
        <p><strong>Education:</strong> ${education}</p>
        <p><strong>Institute Name:</strong> ${instituteName}</p>
        <p><strong>Study:</strong> ${study}</p>
        <!-- Add other fields as needed -->
    `;

    // Display the user profile
    profileContainer.innerHTML = userProfile;
});
