//
// Copyright 2014 101 Studio. All Rights Reserved.
//
// This source code follows Google JavaScript Style Guide
// http://google-styleguide.googlecode.com/svn/trunk/javascriptguide.xml
//

var als = als || {};

/**
 *
 * @author maxonmishin@gmail.com
 */


als.centerImg = function( ) {

  /**
   * @type {*}
   * @private
   */
  this.root_ = jQuery("body");
  /**
   * @type {*}
   * @private
   */
  this.slider_ = this.root_.find('.gallery_mansory');
  /**
   * @type {*}
   * @private
   */
  this.sliderItem_ = this.slider_.find('.item');

  /**
   * Entry point
   *
   * @private
   */
  this.init_();

};


/**
 *	Run
 */
als.centerImg.prototype.init_ = function () {
  this.imageCentered_();
};


/**
 *
 * @private
 */
als.centerImg.prototype.imageCentered_ = function () {
  var self = this;

  this.sliderItem_.each( function() {
    /**
     * @type {*|jQuery|HTMLElement}
     */
    var el = $(this);
    /**
     * @type {*|jQuery}
     */

    var img = el.find('img');
    var elW = el.width();
    var imW = img[0].naturalWidth;
    var elH = el.height();
    var imH = img[0].naturalHeight;


    if (elW > imW) {
      img.css({
        'left':'50%',
        'margin-left': -0.5*imW
      });
    } else if(elW < imW) {
      var ratio = imW - elW;
      img.css({
        'left': -0.5*ratio
      });


    }

    if (elH > imH) {
      img.css({
        'top': 0
      });
    } else {
      var ratio = imH - elH;
      img.css({
        'top': -0.5*ratio
      });
    }

    img.width(imW).height(imH);

  });

};


$(window).on('load', function() {
  var cont = $('.gallery_mansory');
  new als.centerImg();
  setTimeout(function(){
    cont.animate({'opacity': 1}, 200);
  }, 700);


});





