/* 
File Name: hamburger.js
Date: 05/04/2018 
Programmer: Jeremy Braun
*/
$( document ).ready(function() {

$( ".cross" ).hide();
$( "nav" ).hide();
$( ".hamburger" ).click(function() {
$( "nav" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( "nav" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

});