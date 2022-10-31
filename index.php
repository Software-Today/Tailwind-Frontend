<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blurr</title>
	<!-- Tailwind -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<!-- Alpine -->
	<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
	<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
	<!-- AOS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- Custom style -->
	<link rel="stylesheet" href="css/style.css" />
	<!-- Poppins font -->
    <link href="https://fonts.googleapis.com/css?family=DM%20Sans" rel="stylesheet"> 
</head>
<body class="antialiased bg-dark">
	<!-- navbar -->
	<div x-data="{ open: false }" class="w-full container mx-auto max-w-screen-xl px-2  pr-20">
        <div class="flex flex-col max-w-screen-xl mx-auto md:items-center md:justify-between md:flex-row">
            <div class="flex flex-row items-center justify-between">
                <div class="relative md:mt-5 ml-10 ">
                    <a href="" class="text-2xl relative z-50 font-bold tracking-widest text-light-gray rounded-lg focus:outline-none focus:shadow-outline">Blurr</a>
                </div>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'transform md:transform-none': !open, 'h-full': open }" class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
                <a class="px-10 py-3 mt-2 text-sm text-center bg-light-gray text-black md:mt-5 md:ml-4" href="index.php">Lavori</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-5 md:ml-4 text-light-gray hover:text-gray-300 focus:outline-none focus:shadow-outline" href="./pages/we.html">Cosa Facciamo</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-5 md:ml-4 text-light-gray hover:text-gray-300 focus:outline-none focus:shadow-outline" href="./pages/studio.html">Studio</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-5 md:ml-4 text-light-gray hover:text-gray-300 focus:outline-none focus:shadow-outline" href="./pages/contact.html">Contattaci</a>
            </nav>
        </div>
    </div>

    <div class="container px-2 lg:px-8 mx-auto max-w-screen-xl overflow-hidden">
        <div class="md:ml-0 md:pl-0 block relative mt-40 relative ">
                <h1 class="text-5xl sm:text-6xl md:text-8xl text-light-gray font-medium ml-10 lg:ml-0">
                    <div style="display: block; text-align: start; position: relative;" class="lg:flex md:flex sm:block reveal-text">
                        <div class="relative inline-block my-2"> Uno</div> 
                        <div class="relative inline-block my-2">Studio</div> 
                        <div class="relative inline-block my-2">Che</div> 
                    </div>
                    <div style="display: block; text-align: start; position: relative;" class="reveal-text">
                        <div class="relative inline-block my-2">aiuta</div> 
                        <div class="relative inline-block my-2">le</div> 
                        <div class="relative inline-block my-2">aziende</div> 
                    </div>
                    <div style="display: block; text-align: start; position: relative;" class="reveal-text">
                        <div class="relative inline-block my-2">digital</div> 
                        <div class="relative inline-block my-2">a</div> 
                        <div class="relative inline-block my-2">creare</div> 
                    </div>
                    <div style="display: block; text-align: start; position: relative;" class="reveal-text">
                        <div class="relative inline-block my-2">soluzioni</div> 
                        <div class="relative inline-block my-2">digital</div> 
                    </div>
                </h1>
        </div>

		<div class="md:flex md:mt-40 mt-20 md:space-x-10 items-start pl-6 md:pl-0 lg:pl-0 xl:pl-0 sm:pl-14 items-center">
			<div class="md:w-6/12 ms:w-12/12 relative" data-aos="fade-right">
				<img class="relative z-50" style="width: 456px;" src="./img/aryan.png" alt="">
			</div>
			<div class="md:w-5/12 sm:w-10/12 items-center md:mt-0 text-light-gray ">
				<div data-aos="fade-right" class="flex items-center space-x-5 my-5">
					<hr style="width: 3rem;" class="text-light-gray"/>
					<p class="font-bold-700">Nati con la voglia di creare il nuovo</p>
				</div>
				<div data-aos="fade-left" class="md:transform md:-translate-y-20">
					<h1 class="text-3xl md:text-4xl lg:text-5xl">Amiamo comunicare attraverso creatività e semplicità</h1>
				</div>
				<div class="block my-5 text-2xl">
					<p>La nostra passione per la creatività ci spinge a realizzare design unici, capaci di dare risalto alle caratteristiche principali delle imprese.</p>
				</div>
			</div>
		</div>

		<div class="md:flex mt-40 md:space-x-10 items-start pl-6 md:pl-0 lg:pl-0 xl:pl-0 sm:pl-14 text-light-gray">
			<div data-aos="fade-up" class="md:w-6/12 relative mt-20 md:mt-0 md:mx-10">
				<div class="flex items-center space-x-5 my-5">
					<hr style="width: 3rem;"/>
					<p class="font-bold-700">Non ritrovarti a dover dire di no</p>
				</div>
				<div data-aos="fade-up" class="md:transform md:-translate-y-20">
					<h1 class="text-3xl md:text-4xl lg:text-5xl">Aiutiamo le aziende a scalare e produrre più progetti in tempo.</h1>
				</div>
			</div>
			<div data-aos="fade-up" class="md:w-5/12  relative xl:pt-8 md:pt-4">
				<div class="block my-5 font-size-lg">
					<p class="mb-2 text-2xl">Utilizziamo le migliori tecnologie e metodi smart per creare i tuoi progetti in tempistiche brevi.</p>
					<p class="mt-2 text-2xl">Non solo, Utilizziamo il famoso page builder chiamato Elementor per poster dare anche a voi la possibilità di gestire o modificare i siti dei vostri clienti.</p>
				</div>
			</div>
		</div>

		<div class="mt-30 md:ml-20 md:pl-20 lg:pl-0 xl:pl-0 px-10 text-light-gray flex">
			<div class="relative mt-20 md:ml-10 md:mt-0 md:w-10/12 block">
				<div data-aos="zoom-in" class="flex items-center text-center space-x-5 my-5">
					<hr style="width: 3rem;"/>
					<p class="font-bold-700">Come possiamo aiutarti</p>
				</div>
				<div data-aos="zoom-in" class="md:transform md:-translate-y-20">
					<h1 class="text-3xl lg:text-5xl md:text-4xl">Ci siamo verticalizzati sulla creazione di siti web in Wordpress e Custom, la nostra esperienza è al tuo servizio.</h1>
				</div>
				<div data-aos="zoom-in" class="block my-5 font-size-lg">
					<p class="italic text-2xl">Lavoriamo con 3 principali metodi di sviluppo in base al tipo di progetto</p>
				</div>

			</div>
		</div>

		<div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:mx-20 sm:mx-3 lg:px-20">
			<div class="flex flex-col justify-between mt-12 mx-10">
				<div class="md:flex my-2 items-center">
					<div class="xl:w-2/12 sm:w-12/12 md:pr-5">
						<div class="relative">
							<img class="w-full" src="img/frontend.png">
						</div>
					</div>
					<div class="md:w-10/12 sm:w-12/12 md:pt-0 pt-5">
						<h1 class="text-light-gray  text-2xl">WordPress + Custom Frontend</h1>
						<p class="text-light-gray my-1 sm:my-2 text-lg sm:text-md">Se sai già che now metterai mano al layout del del tuo sito ma solo ai contenuti consigliamo una Soluzione Custom, più leggero, performante e più creativo.</p>
					</div>
				</div>
				<div class="md:flex my-2 items-center">
					<div class="xl:w-2/12 sm:w-12/12 md:pr-5">
						<div class="relative justify-center">
							<img class="w-full" src="img/elementor.png">
						</div>
					</div>
					<div class="md:w-10/12 sm:w-12/12 md:pt-0 pt-5">
						<h1 class="text-light-gray text-2xl">WordPress + Elementor</h1>
						<p class="text-light-gray my-1 sm:my-2 text-lg sm:text-md">Se vuoi essere indipendente e avere la possiblilità di modificare l'àspetto del tuo sito come e quando vuoi, sicuramente la soluzione con Elementor fa al caso tuo, è anche la soluzion più economica e veloce.</p>
					</div>
				</div>
				<div class="md:flex my-2 items-center">
					<div class="xl:w-2/12 sm:w-12/12 md:pr-5">
						<div class="relative">
							<img class="w-full" src="img/custom.png">
						</div>
					</div>
					<div class="md:w-10/12 sm:w-12/12 md:pt-0 pt-5">
						<h1 class="text-light-gray text-2xl">Custom</h1>
						<p class="text-light-gray my-1 sm:my-2 text-lg sm:text-md">Se il sito è completamente statico e non c'è nessuna necessità di doverlo personalizzare costantemente la soluzione custom puo essere un'ottima opzione.</p>
					</div>
				</div>
			</div>
		</div>

		<button data-aos="flip-up" style="padding: 10px 32px;" class="bg-white text-black font-medium my-20 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out mx-auto block">Scopri tutti nostri servize</button>
		<!-- Latest News and Resources -->
		<div data-aos="fade-up" class="mt-30 md:mx-20 md:px-12">
			<img style="width:100%" src="img/shoes.png">
		</div>

		<div class="mt-40 md:ml-20 md:pl-20 pl-14 text-light-gray">
			<div class="relative mt-20 md:mt-0 ">
				<div data-aos="zoom-in" class="flex items-center text-center space-x-5 my-5">
					<hr style="width: 3rem;"/>
					<p class="font-bold-700">Alcune delle tecnologie che utilizziamo</p>
				</div>
				<div data-aos="zoom-in" class="md:transform md:-translate-y-20 text-3xl sm:text-4xl lg:text-6xl font-bold-600">
					<h1 class="my-2">Figma / AdobeXD /</h1>
					<h1 class="my-2">WordPress / Elementor /</h1>
					<h1 class="my-2">ACF / Wpml / Bootstrap /</h1>
					<h1 class="my-2">Javascript</h1>
				</div>
				<div data-aos="zoom-in" class="block mt-5 font-size-lg">
					<p  class="italic text-2xl">/ e molto altro ancora</p>
				</div>

			</div>
		</div>		
	</div>

	<div data-aos="zoom-in" class="mt-40 text-center mx-2">
		<h1 class="text-light-gray md:text-5xl text-3xl mb-20">Aziende con cui collaboriamo</h1>
		<!-- <div data-aos="fade-up" class="flex flex-col md:flex-row justify-around space-y-2 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
		</div>
		<div data-aos="fade-up" class="relative flex">
			<div class="md:w-3/42"></div>	
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-6/42 img_gallery">
				<img class="rounded-xl" src="img/phone.png" alt="">
			</div>
			<div class="md:w-3/42"></div>	
		</div> -->
		<article class="wrapper">
			<div class="marquee">
				<div class="marquee__group">
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
				</div>
		  
				<div aria-hidden="true" class="marquee__group">
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
				</div>
			</div>
		  
			<div class="marquee marquee--reverse">
				<div class="marquee__group">
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
				</div>
		  
				<div aria-hidden="true" class="marquee__group">
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
					<div class="marquee-item">
						<img src="img/blank.png" alt="">
					</div>
				</div>
			</div>
		</article>
	</div>

	<div class="container px-2 lg:px-8 mx-auto max-w-screen-xl overflow-hidden">
		<div data-aos="zoom-in" class="mt-40 text-center mx-2">
			<h1 class="text-light-gray text-6-5xl font-medium sm:text-4xl">Parlaci del tuo prossimo</h1>
			<h1 class="text-light-gray text-6-5xl font-medium sm:text-4xl">progetto.</h1>
			<button class="px-10 py-2 bg-white text-black font-medium mt-10 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out mx-auto block">Contattaci ora</button>
		</div>
	</div>
	

	<!-- .container -->

	<footer class="flex mt-32 bg-dark container max-w-screen-xl overflow-hidden mx-auto">
		<div class="relative md:mt-5 md:ml-15 ml-8 w-7/12">
			<a href="" class="text-2xl md:text-4xl relative z-50 font-bold tracking-widest text-light-gray rounded-lg focus:outline-none focus:shadow-outline">Blurr</a>
		</div>
		<div class="relative md:mt-5 md:ml-15 ml-8 w-2/12">
			<a href="" class="text-1xl relative text-light-gray focus:outline-none focus:shadow-outline w-4/12">Links</a>
		</div>
		<div class="relative md:mt-5 md:ml-15 ml-8 w-3/12">
			<a href="" class="text-1xl relative text-light-gray focus:outline-none focus:shadow-outline mx-10 w-8/12">Studio</a>
		</div>
	</footer>

	<!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script> -->
	<script src="scripts/plugins/gsap.min.js"></script>
	<script src="scripts/plugins/ScrollTrigger.min.js"></script>
	<script src="scripts/script.js"></script>
    <script>
    	AOS.init();
    </script>
</body>
</html>