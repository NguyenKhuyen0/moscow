(function($) {

    "use strict";
	
    $(document).ready(function() {
		
		// PRELOADER
        $("body").toggleClass("loaded");
        setTimeout(function() {
            $("body").addClass("loaded");
        }, 3000);
		
		// PORTFOLIO DIRECTION AWARE HOVER EFFECT
		var item = $("#bl-work-items>div");
		var elementsLength = item.length;
		for (var i = 0; i < elementsLength; i++) {
			$(item[i]).hoverdir();
		}
		
		// TEXT ROTATOR
		$("#selector").animatedHeadline({
             animationType: "clip"
        });
		
		// BOX LAYOUT
        Boxlayout.init();
		
		// REMOVE # FROM URL
		$("a[href='#']").on("click", (function(e) {
			e.preventDefault();
		}));

        // AJAX CONTACT FORM
        $(".contactform").on("submit", function() {
            $(".output_message").text("Loading...");

            var form = $(this);
            $.ajax({
                url: form.attr("action"),
                method: form.attr("method"),
                data: form.serialize(),
                success: function(result) {
                    if (result == "success") {
                        $(".contactform").find(".output_message").addClass("success");
                        $(".output_message").text("Message Sent!");
                    } else {
                        $(".contactform").find(".output_message").addClass("error");
                        $(".output_message").text("Error Sending!");
                    }
                }
            });

            return false;
        });

		// MATERIAL CAROUSEL
        $(".carousel.carousel-slider").carousel({
            fullWidth: true,
            indicators: true,
        });
		
		// RESUME CARDS ANIMATION
		if ($(window).width() > 800) {
			$(".resume-list-item, .resume-card").on("click", function() {
				$(".resume-list-item").removeClass("is-active");
				var e = parseInt($(this).data("index"),10);
				$("#resume-list-item-" + e).addClass("is-active");
				var t = e + 1,
					n = e - 1,
					i = e - 2;
				$(".resume-card").removeClass("front back up-front up-up-front back-back"), $(".resume-card-" + e).addClass("front"), $(".resume-card-" + t).addClass("back"), $(".resume-card-" + n).addClass("back-back"), $(".resume-card-" + i).addClass("back")
			});
        }
    });

})(jQuery);

function openNav() {
    document.getElementById("myNav").style.width = "100%";
    body = document.getElementsByTagName('body')[0];
    body.style.overflow =  "hidden";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    body = document.getElementsByTagName('body')[0];
    body.style.overflow =  "unset";
}

// FAQ
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
      this.getElementsByClassName("fa-plus")[0].style.display = "block";
      this.getElementsByClassName("fa-minus")[0].style.display = "none";
    } else {
      panel.style.display = "block";
      this.getElementsByClassName("fa-plus")[0].style.display = "none";
      this.getElementsByClassName("fa-minus")[0].style.display = "block";
    }
  });
}