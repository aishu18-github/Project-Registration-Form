$(document).ready(function() {
  $("#registrationForm").on("submit", function(e) {
    let valid = true;

    $(this).find("input, select, textarea").each(function() {
      if (!$(this).val()) {
        $(this).css("border-color", "red");
        valid = false;
      } else {
        $(this).css("border-color", "#ccc");
      }
    });

    if (!valid) {
      e.preventDefault();
      alert("Please fill out all required fields before submitting.");
    }
  });
});
