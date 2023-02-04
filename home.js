 // Get the button and the popup
 const popup = document.getElementById("popup");
const close = document.getElementById("close");
const display = document.getElementById("b-right");
const message = document.getElementById("message");
const newPost = document.createElement("div");
const post = document.getElementById("post");

function show() {
  popup.style.display = "block";
};

close.addEventListener('click', ()=>{
    popup.style.display = 'none';
})
popup.addEventListener("click", function(event) {
  if (event.target === popup) {
    popup.style.display = "none";
  }
});

post.addEventListener('click', () => {

    const task = message.value;
    
    if (!task) {
        alert("please write a post");
        return;
    }
        const author = document.getElementById('author');
        var newPost = document.createElement("div");
        newPost.innerHTML = `
                <div class="message">
                    <span><img src="./img/Cartwright_Promotions_logo.png" alt="" height="50" width="50" >
                    <h2>Cartwright Promotions</h2></span>
                    <h2>${task}</h2>
            </div>
        `;
        display.appendChild(newPost);
       popup.style.display = 'none';
})



// // Get the form
// const form = document.getElementById("form");

// // Get the submit button

// // Add a submit event listener to the form
// form.addEventListener("submit", function(event) {
//   // Prevent the form from submitting
//   event.preventDefault();

//   // Get the form data
//   var formData = new FormData(form);

//   // Check if the form has already been submitted
//   if (localStorage.getItem("formSubmitted") === null) {
//     // If the form hasn't been submitted, store the form state in local storage
//     localStorage.setItem("formSubmitted", true);

//     // Submit the form data
//     // ...

//   } else {
//     // If the form has already been submitted, show an error message
//     alert("Form has already been submitted");
//   }
// });

// Add a click event listener to the submit button
// post.addEventListener("click", function() {
//   // Remove the form state from local storage
//   localStorage.removeItem("formSubmitted");
// });
