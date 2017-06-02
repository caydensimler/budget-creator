$(document).ready(function(){

	"use strict";

	// var originalHTML = {};


	// $('.navbar a').hover(function(){
	// 	originalHTML.html = $(this).html();

	// 	$(this).append(' <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>');
	// }, function(){
	// 	$(this).html(originalHTML.html);
	// });	

	$('.navbar a').hover(function(){
		$(this).animate({
			backgroundColor: "#1E3333",
			color: "white",
			fontSize: "20px",
			paddingTop: "-=.4%"
		}, 500).animate({
			borderBottomWidth: "1px",
			borderTopWidth: "1px"
		}, 50);
	}, function(){
		$(this).animate({
			borderBottomWidth: "0px",
			borderTopWidth: "0px"
		}, 50).animate({
			color: "#97AAAF",
			backgroundColor: "#305252",
			fontSize: "15px",
			paddingTop: "+=.4%"
		}, 500);
	});





});