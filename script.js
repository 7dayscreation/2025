function like() {
    // Check if the button has already been clicked
    if (!document.getElementById('likeButton').classList.contains('clicked')) {
        // Add the 'clicked' class to the button to disable further clicks
        document.getElementById('likeButton').classList.add('clicked');
        
        // Trigger the same behavior as the $(".heart").on("click") event handler
        $(".heart").toggleClass("is-active");
        
        // Get the current like count
        let currentCount = parseInt(document.getElementById('likeCount').innerText);
        
        // Increment the like count
        let newCount = currentCount + 1;
        document.getElementById('likeCount').innerText = newCount;
        
        // Send an AJAX request to update the like count on the server
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "updateLikes.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("likeCount=" + newCount);
    }
}
