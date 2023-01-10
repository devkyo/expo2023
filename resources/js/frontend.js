
const header = document.getElementById('header')


// const sticky = header.offsetTop

window.addEventListener('scroll', (event)=> {
  // console.log(window.pageYOffset)
 if(window.pageYOffset > 580 - header.offsetHeight){
  header.style.background = 'linear-gradient(to right,#B51D87, #005BA3)'
	header.classList.add('header-shadow')
 }else {
  header.style.background = 'transparent'
	header.classList.remove('header-shadow')
 }
})

countdown();

function countdown(){
	

	let now = new Date();
	let eventDate = new Date(Date.UTC(2023, 7, 8));
	let currentTime = now.getTime();
	let eventTime = eventDate.getTime();

	let remTime = eventTime - currentTime;

 
	let s = Math.floor(remTime / 1000);
	let m = Math.floor(s / 60);
	let h = Math.floor(m / 60);
	let d = Math.floor(h / 24);

	h %= 24;
	m %= 60;
	s %= 60;

	h = (h < 10) ? "0" + h : h;
	m = (m < 10) ? "0" + m : m;
	s = (s < 10) ? "0" + s : s;


	$('.c-days').text(d);
	$('.c-horas').text(h);
	$('.c-minutos').text(m);
	$('.c-segundos').text(s);




	if( d > 10){
		$('.t-days').text('días')
	}else {
		$('.t-days').text('día');
	}
	if(d <= 0){
		// alert('el evento ya empezo');
		$('.count-item').css('display','none');
    $('.count-now').css('display','block');
		$('.count-now').text('Los esperamos de 9:00 am a 9:00 pm');
	}
	
	setTimeout(countdown, 1000);
	if(d <= 0){
    document.getElementById('count').style.display="none";
		document.getElementById('title-count').innerHTML="Gracias a todos los asistentes <br> Nos vemos el proximo año!";
	}
}


$(window).ready(  ()=> {
	
	
		const map = L.map('feria__maps', {
			center: [-12.0920071, -76.9796076],
			zoom:13
		})

		L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 15,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
		id: 'feria__maps'
	}).addTo(map);
	

	const marker = L.marker([-12.0920071, -76.9796076]).addTo(map)

	$('.accordion-item').on('shown.bs.collapse', function (e) {
		map.invalidateSize(true);
	})
	



	AOS.init({
		once: true,
		delay: 500
	});

	lightbox.option({
		'resizeDuration': 200,
		'wrapAround': true
	})

	$('.owl-carousel').owlCarousel({
		items: 4,
		loop: true,
		rewind:true,
		rewindNav: false,
		nav: true,
		dots: false,
		navSpeed: 1000,
		lazyLoad: true,
		autoplay: true,
		autoplaySpeed: 1000,

		responsive: {
			1920: {
				items: 4
			},
			1024: {
				items: 3,
			},
			600: {
				items: 2
			}
		}
	});
})