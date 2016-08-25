define([], function () {
  'use strict';

  var bigheadmode = (function () {   
    var skroll;
    
    var init = function () {
      console.log('bigheadmode');
      
      require([
        'skrollr'
      ], function (skrollr) {
        skroll = skrollr.init({
          forceHeight: false,
          smoothScrolling:  false
        });

        if (skroll.isMobile()) {
          skroll.destroy();
        }
      });
    };

    var destroy = function () {
      skroll.destroy();
    };

    return {
      path:     'modules/bigheadmode',
      destroy:  destroy,
      init:     init
    };
  })();
  
  return bigheadmode;
});