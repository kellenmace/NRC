/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    'transactions':{
      init: function(){
      },
      finalize: function(){
        // console.log("function fired");
        //quick search regex
        var qsRegex;

        //init Isotope
        var $grid = $('.grid').imagesLoaded(function() {
          $grid.isotope({
            itemSelector: '.grid-item',
            layoutMode:   'fitRows',
            fitRows:      {
              gutter: 15
            },
            filter: function(){
              return qsRegex ? $(this).text().match(qsRegex) : true;
            }
          });
        });

        //debounce so filtering doesn't trigger every millisecond
        function debounce( fn, threshold){
          var timeout;
          return function debounced(){
            if ( timeout ) {
              clearTimeout( timeout );
            }
            function delayed(){
              fn();
              timeout = null;
            }
            timeout = setTimeout( delayed, threshold || 100);
          };
        }

        //get value of search field to pass through filter
        var $quicksearch = $('.quicksearch').keyup(debounce( function(){
          qsRegex = new RegExp( $quicksearch.val(), 'gi');
          $grid.isotope();
        }, 200));
      }
    },
    'production_team':{
      init: function(){
      },
      finalize: function(){
        //flatten object by concatenating values
        function concatValues( obj ){
          var value = '';
          for ( var prop in obj) {
            value += obj[prop];
          }
          return value;
        }

        var $grid = $('.grid-producer').imagesLoaded(function(){
            $grid.isotope({
              itemSelector: '.producer-item',
              layout: 'fitRows',
              fitRows: {
                gutter: 15
              }
            });
          }
        );

        //filters init
        var filters = {};

        $('.filters').on( 'click', '.btn', function(){
          var $this = $(this);
          var $buttonGroup = $this.parents('.btn-group');
          var filterGroup = $buttonGroup.attr('data-filter-group');

          filters[ filterGroup ] = $this.attr('data-filter');

          var filterValue = concatValues( filters );

          $grid.isotope({ filter: filterValue });
        });

      }
    },
    'single_producer': {
      init: function(){
      },
      finalize: function(){
        // console.log("function fired");
        //quick search regex
        var qsRegex;

        //init Isotope
        var $grid = $('.grid').imagesLoaded(function() {
          $grid.isotope({
            itemSelector: '.grid-item',
            layoutMode:   'fitRows',
            fitRows:      {
              gutter: 0
            },
            filter: function(){
              return qsRegex ? $(this).text().match(qsRegex) : true;
            }
          });
        });

        //debounce so filtering doesn't trigger every millisecond
        function debounce( fn, threshold){
          var timeout;
          return function debounced(){
            if ( timeout ) {
              clearTimeout( timeout );
            }
            function delayed(){
              fn();
              timeout = null;
            }
            timeout = setTimeout( delayed, threshold || 100);
          };
        }

        //get value of search field to pass through filter
        var $quicksearch = $('.quicksearch').keyup(debounce( function(){
          qsRegex = new RegExp( $quicksearch.val(), 'gi');
          $grid.isotope();
        }, 200));
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
