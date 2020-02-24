jQuery(document).ready(function($) {
    $(window).scroll(function() {
      var scrollPos = $(window).scrollTop(),
          navbar = $('.navbar');

      if (scrollPos > 100) {
        navbar.addClass('alt-color');
      } else {
        navbar.removeClass('alt-color');
      }
    });
  });

  
  

  $(document).ready(function() {
        $('body').materialScrollTop({
            revealElement: 'header',
            revealPosition: 'bottom',
            duration: 600, 
            easing:'swing', 
            
            onScrollEnd: function() {
                console.log('Scrolling End');
            }
        });
    });

    new WOW().init();

    
    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    $(document).ready(function() {
		$('#material-tabs').each(function() {

				var $active, $content, $links = $(this).find('a');

				$active = $($links[0]);
				$active.addClass('active');

				$content = $($active[0].hash);

				$links.not($active).each(function() {
						$(this.hash).hide();
				});

				$(this).on('click', 'a', function(e) {

						$active.removeClass('active');
						$content.hide();

						$active = $(this);
						$content = $(this.hash);

						$active.addClass('active');
						$content.show();

						e.preventDefault();
				});
		});
});