var showcase_width;
var animation_time = 2000; //time for slides to animate
var interval_time = 8000; //time to display each slide before advancing
var animation_interval;

var next_slide = function() {
$j('#slide-reel').animate({left: '-=' + showcase_width, }, animation_time, function() { //move the slide-reel to the left
$j('#slide-reel').css('padding-left', '+=' + showcase_width); //pad the left of the slide-reel
$j('#slide-reel').append($j('.slide-wrapper:first')); //move the first slide to the end of the reel
});
reset_timer();
};

var previous_slide = function() {
$j('#slide-reel').css('padding-left', '-=' + showcase_width); //make some room on the left side of the slide-reel for an additional slide
$j('#slide-reel').prepend($j('.slide-wrapper:last')); //move the last slide to the beginning of the reel
$j('#slide-reel').animate({'padding-left': '+=' + showcase_width, }, animation_time); //move the slide-reel to the right
reset_timer();
};

//timer must be reset on document ready and on each manual advance
//TO DO: create flag to turn off automatic advance
var $j = jQuery.noConflict();

var reset_timer = function() {
if(animation_interval) {
clearInterval(animation_interval);
}
animation_interval = setInterval(next_slide, interval_time);
};

$j(document).ready(function() {

showcase_width = $j('#showcase').css('width'); //set the initial showcase width


$j('#slide-reel').css({
'width': String($j('.slide-wrapper').length) + '00%', //set the slide reel width to n*100% for n slides
//set some initial padding in case the user wants to click left first
'left': '-' + showcase_width,
'padding-left': showcase_width,
});
$j('.slide-wrapper').css('width', showcase_width); //make the slide-wrappers the same width as the showcase
$j('.slide-content').css('width', $j('.slide').css('width')); //set the content width
$j('.slide-content').css('width', '-=100'); //subtract the static values of the left and right buttons and padding

//handle clicks on left and right buttons to manually advance slides
$j(document).on('click', '.slide-button.right', next_slide);
$j(document).on('click', '.slide-button.left', previous_slide);

//starts the slideshow
reset_timer();
});

//resize the slideshow
$j(window).resize(function() {
showcase_width = $j('#showcase').css('width');
$j('.slide-wrapper').css('width', showcase_width); //update the slide-wrappers on resize
$j('.slide-content').css('width', $j('.slide').css('width')); //set the content width
$j('.slide-content').css('width', '-=100'); //subtract the static values of the left and right buttons and padding
});