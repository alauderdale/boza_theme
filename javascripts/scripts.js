$(document).ready(function(){

	/// menu

    // $(window).scroll(function(){
    //  var divOffset2 = $('.shrink-nav').offset();
    //  if(window.scrollY > divOffset2.top ){
    //     $('.main-nav').addClass('small-nav');
    //  }
    //  if(window.scrollY < divOffset2.top){
    //     $('.main-nav').removeClass('small-nav');
    //  }
    // });

	//slider
  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: false,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 350,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: false,
    transitionType:'move',
    globalCaption: true
  });
    

});
