function loadPage(param,param2) {
	
window.location="index.php?page=result&elem="+param;

}

$(function(){
  
	createSticky(jQuery("#persist-wrap"));

});

function createSticky(sticky) {
	
	if (typeof sticky != "undefined") {

		var	pos = sticky.offset().top,
			win = jQuery(window);
			
		win.on("scroll", function() {
			
			if( win.scrollTop() > pos ) {
				sticky.addClass("fixed");
			} else {
				sticky.removeClass("fixed");
			}			
		});			
	}
}
  
//--------------DÉBUT SELECT--------------//
 
 (function() {
  $(window).load(function() {
    var initCustomSelects, setSelectText;
    initCustomSelects = function() {
      $('.customSelect').each(function() {
        var $this, value;
        $this = $(this);
        value = $this.find('select').val();
        setSelectText($this, value);
      });
    };
    setSelectText = function(element, text) {
      element.find('span').text(text);
    };
    $('.customSelect select').change(function() {
      var parent, value;
      parent = $(this).parent('.customSelect');
      value = $(this).val();
      setSelectText(parent, value);
    });
    initCustomSelects();
  });

}).call(this);

//--------------FIN SELECT--------------//

//--------------DÉBUT INPUT--------------//

$(document).ready(function() {

  $('input').each(function() {

    $(this).on('focus', function() {
      $(this).parent('.css').addClass('active');
    });

    $(this).on('blur', function() {
      if ($(this).val().length == 0) {
        $(this).parent('.css').removeClass('active');
      }
    });

    if ($(this).val() != '') $(this).parent('.css').addClass('active');

  });

});

//--------------FIN INPUT--------------//

<!----DÉBUT ACCORDION---->

  $(function() {
    $( "#accordion" ).accordion({
      event: "click hoverintent",
	  heightStyle: "content"
    });
  });
 
  
  $.event.special.hoverintent = {
    setup: function() {
      $( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
    },
    teardown: function() {
      $( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
    },
    handler: function( event ) {
      var currentX, currentY, timeout,
        args = arguments,
        target = $( event.target ),
        previousX = event.pageX,
        previousY = event.pageY;
 
      function track( event ) {
        currentX = event.pageX;
        currentY = event.pageY;
      };
 
      function clear() {
        target
          .unbind( "mousemove", track )
          .unbind( "mouseout", clear );
        clearTimeout( timeout );
      }
 
      function handler() {
        var prop,
          orig = event;
 
        if ( ( Math.abs( previousX - currentX ) +
            Math.abs( previousY - currentY ) ) < 7 ) {
          clear();
 
          event = $.Event( "hoverintent" );
          for ( prop in orig ) {
            if ( !( prop in event ) ) {
              event[ prop ] = orig[ prop ];
            }
          }
          
          delete event.originalEvent;
 
          target.trigger( event );
        } else {
          previousX = currentX;
          previousY = currentY;
          timeout = setTimeout( handler, 100 );
        }
      }
 
      timeout = setTimeout( handler, 100 );
      target.bind({
        mousemove: track,
        mouseout: clear
      });
    }
  };

<!----FIN ACCORDION---->

<!----DÉBUT FILTRE---->

(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);

<!----FIN FILTRE---->

