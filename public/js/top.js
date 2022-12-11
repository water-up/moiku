//画像の設定

var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
		
var responsiveImage = [
	{ src: './images/cook.jpg'},
	{ src: './images/bouldering.jpeg'},
	{ src: 'images/guitar.jpg'},
	{ src: './images/lecture.jpeg'}
	
];

//Vegas全体の設定

$('#slider').vegas({
		overlay: true,
		transition: 'fade2',
		transitionDuration: 2000,
		delay: 5000,
		animationDuration: 20000,
		animation: 'random',
		slides: responsiveImage,
	});
	
