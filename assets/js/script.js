jQuery(document).ready(function ($) {
  // Handle insurance type button clicks
  $(".insurance-tab-btn").on("click", function (e) {
    e.preventDefault();

    // Remove active class from all buttons
    $(".insurance-tab-btn").removeClass("active");

    // Add active class to clicked button
    $(this).addClass("active");

    // Get insurance type and form title from data attributes
    var insuranceType = $(this).data("insurance-type");
    var formTitle = $(this).data("form-title");

    // Update the form title
    $("#dynamic-form-title").text(formTitle);

    // Update hidden field to track which tab was clicked
    $('input[name="insurance-source"]').val(insuranceType);

    // Map insurance types to select option text
    var optionTextMap = {
      home: "Home Insurance",
      vehicle: "Car Insurance",
      health: "Health Insurance",
      life: "Life Insurance",
    };

    var optionText = optionTextMap[insuranceType];

    // Update select dropdown by finding option with matching text
    $('select[name="insurance-type"] option').prop("selected", false);
    $('select[name="insurance-type"] option').each(function () {
      if ($(this).text() === optionText) {
        $(this).prop("selected", true);
      }
    });

    // Trigger change event for select field
    $('select[name="insurance-type"]').trigger("change");

    // Optional: Trigger custom event for additional handling
    $(document).trigger("insurance-type-changed", [insuranceType, formTitle]);
  });

  // Set initial insurance type for the form
  var initialType =
    $(".insurance-tab-btn.active").data("insurance-type") || "home";
  $('input[name="insurance-source"]').val(initialType);

  // Set initial select option
  var initialOptionTextMap = {
    home: "Home Insurance",
    vehicle: "Car Insurance",
    health: "Health Insurance",
    life: "Life Insurance",
  };

  var initialOptionText = initialOptionTextMap[initialType];
  $('select[name="insurance-type"] option').each(function () {
    if ($(this).text() === initialOptionText) {
      $(this).prop("selected", true);
    }
  });
});
