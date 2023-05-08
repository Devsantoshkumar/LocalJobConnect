<?php

$this->view("includes/header");

?>


<form id="myForm">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name"><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email"><br>

  <label for="image">Image:</label>
  <input type="file" name="image" id="image"><br>

  <input type="submit" value="Submit">
</form>



<?php

$this->view("includes/footer");

?>


<script>

$(document).ready(function() {
  $('#myForm').submit(function(event) {
    // Stop form from submitting normally
    event.preventDefault();

    // Get form data
    var formData = new FormData($(this)[0]);

    // Send AJAX request
    $.ajax({
      url: '',
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
        console.log(response)
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
        alert('Error inserting data');
      }
    });
  });
});



</script>