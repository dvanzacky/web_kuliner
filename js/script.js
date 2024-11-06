const stars = document.querySelectorAll('.star');
const commentInput = document.getElementById('comment');
const submitButton = document.getElementById('submitComment');
let selectedRating = 0;

stars.forEach(star => {
    star.addEventListener('click', () => {
        const value = parseInt(star.getAttribute('data-value'));
        
        // Toggle the selected star
        if (value === selectedRating) {
            selectedRating = 0; // Deselect if the same star is clicked
        } else {
            selectedRating = value; // Update selected rating
        }
        
        // Update the stars display
        stars.forEach(s => {
            if (parseInt(s.getAttribute('data-value')) <= selectedRating) {
                s.classList.add('selected');
            } else {
                s.classList.remove('selected');
            }
        });

        alert(`You rated us: ${selectedRating} stars!`);
    });
});

submitButton.addEventListener('click', () => {
    const comment = commentInput.value;
    if (comment) {
        alert(`Your comment: "${comment}" has been submitted!`);
        commentInput.value = ''; // Clear the textarea
    } else {
        alert("Please enter a comment before submitting.");
    }
});

