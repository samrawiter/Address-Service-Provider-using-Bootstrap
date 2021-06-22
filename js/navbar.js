		var $navbar = $('#navbar');                   // Navbar to go trough!
		var $more   = $('#nav-more');                 // More More item to show/hide
		var $v_wrap = $('#navbar .nav');              // Visible wrapper
		var $h_wrap = $('#nav-more .dropdown-menu');  // Hidden wrapper
		var breaks  = [];                             // Breakpoints
    var pop_all_breakpoint = 768;                 // *** modify as needed. ***

		/**
		 * Return child to it's original place in the nav-wrapper
		 */
		function returnChild( $child, $dest_wrapper ) {
			var cplace = $child.attr('data-navorder'),
				  inserted = false;
			
			// Find place for the child... insert if found...
      $dest_wrapper.children().each( function(idx, obj){
			  if ( idx == cplace ) {
					$child.insertBefore(this);
					inserted = true;
				}
			});
			
			// ...if we didn't find a place to insert the childe, insert it last.
      if ( !inserted ) {
				$child.appendTo( $dest_wrapper );
			}
		}
		
		/**
		 * Check navbar and handle more/show/hide.
		 */
		function updateNav() {

			// If collapsed bootstrap nav, return all items to default places and hide 'more' dropdown.
			if ( $(window).width() < pop_all_breakpoint ) {
				while ( breaks.length ) {
					returnChild( $h_wrap.children().first(), $v_wrap );
					breaks.pop();
				}

				// Hide the 'more' dropdown
				$more.addClass('hidden');
				return; // Don't do anything else!
			}
			
			// Set/save order of menu-items (needed to keep their place among static items). Only run once!
			if ( $v_wrap.attr('data-navsetup') != 'done' ) {
				$v_wrap.children().each( function(idx, obj){
					if ( $(this).hasClass('hideable') )
						$(this).attr('data-navorder', idx);
				});
				$v_wrap.attr('data-navsetup', 'done');
			}
			
			// Calculate available space ( -30 to make sure )
			var availableSpace = $navbar.width() - 30 - $('.navbar-header').width();
			var changes = 0; // Could be true/false as well..

			// The visible list is overflowing the nav & we have stuff we CAN hide
			if ( availableSpace < $v_wrap.width() && $v_wrap.children('.hideable') ) {

				// Record the width of the list
				breaks.push( $v_wrap.width() );
				changes++;

				// Move item to the hidden list
				$v_wrap.children('.hideable').last().prependTo( $h_wrap );

				// Show the dropdown btn
				if ($more.hasClass('hidden')) {
					$more.removeClass('hidden');
					$h_wrap.removeClass('hidden');
				}
			}
      else { // The visible list is not overflowing

				// Is there space for another item in the nav?
				if (availableSpace > breaks[breaks.length - 1]) {

					// Move the item to the visible list
					returnChild( $h_wrap.children().first(), $v_wrap );
					breaks.pop();
					changes++;
				}

				// Hide the dropdown btn if hidden list is empty
				if ( breaks.length <= 0 ) {
					$more.addClass('hidden');
					$h_wrap.addClass('hidden');
				}
			}

			// Recur if changes were made
			if ( changes ) {
				updateNav();
			}

		}

		// Window resize listener + trigger
		$(window).resize(function() {
			updateNav();
		}).trigger('resize');