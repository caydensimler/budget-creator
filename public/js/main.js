$(document).ready(function(){

	"use strict";

	var originalHTML = {};


	$('.navbar a').hover(function(){
		originalHTML.html = $(this).html();

		$(this).append(' <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>');
	}, function(){
		$(this).html(originalHTML.html);
	});	





});