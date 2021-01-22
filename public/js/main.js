$(function() {
  $.scrollify({
    section: ".panel",
    //sectionName:false,
    scrollSpeed: 1100,
    after: function(i) {
      /*
			if(i===2) {
				$.scrollify.setOptions({
					easing:"easeOutExpo"
				});
			}*/
    }
  });

  $(".scroll,.scroll-btn").click(function(e) {
    e.preventDefault();

    $.scrollify.next();
  });

  var hasHovered = false;
  $(".coffee").on("mouseenter focus", function() {
    if (hasHovered === false) {
      ga("send", "event", "Coffee", "hover", "Buy me a coffee");
      hasHovered = true;
    }
  });
});



// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  let forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
})()