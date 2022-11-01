<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blurr</title>
	<!-- Tailwind -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
	<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
	<!-- AOS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- Custom style -->
	<link rel="stylesheet" href="css/style.css" />
	<!-- Poppins font -->
    <link href="https://fonts.googleapis.com/css?family=DM%20Sans" rel="stylesheet"> 
</head>
<body class="bg-dark">
	<div class="scroller">
		<!-- navbar -->
		<div class="panel container-1">
			<div x-data="{ open: false }" class="w-full container mx-auto max-w-screen-xl px-12">
				<div class="flex flex-col max-w-screen-xl mx-auto md:items-center md:justify-between md:flex-row">
					<div class="flex flex-row items-center justify-between">
						<div class="relative">
							<a href="" class="text-2xl relative font-bold text-light-gray">Blurr</a>
						</div>
						<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
							<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
								<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
								<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</div>
					<nav :class="{ 'transform md:transform-none': !open, 'h-full': open }" class="h-0 mt-2 md:h-auto flex flex-col flex-grow md:items-center md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
						<a class="px-2 py-2 font-1s text-sm bg-transparent rounded-lg text-light-gray" href="index.php">Lavori</a>
						<a class="px-2 py-2 font-1s text-sm bg-transparent rounded-lg text-light-gray" href="./pages/we.html">Cosa Facciamo</a>
						<a class="px-8 py-2 font-1s text-sm bg-transparent rounded-lg text-light-gray" href="./pages/studio.html">Studio</a>
						<a class="px-5 py-1 font-1s text-sm text-center bg-light-gray text-black" href="./pages/contact.html">Contattaci</a>
					</nav>
				</div>
			</div>

			<div class="container sm:mx-20 mx-10 md:px-8 max-w-screen-xl overflow-hidden pt-10">
				<h1 class="mx-5 block relative mt-20 w-8/12 py-2 text-light-gray font-8xl">
					<div class="lg:flex md:flex sm:block reveal-text home-top-text">
						<div class="relative inline-block my-2"> Uno</div> 
						<div class="relative inline-block my-2">Studio</div> 
						<div class="relative inline-block my-2">Che</div> 
					</div>
					<div class="block relative reveal-text home-top-text">
						<div class="relative inline-block my-2">aiuta</div> 
						<div class="relative inline-block my-2">le</div> 
						<div class="relative inline-block my-2">aziende</div> 
					</div>
					<div class="block relative reveal-text home-top-text">
						<div class="relative inline-block my-2">digital</div> 
						<div class="relative inline-block my-2">a</div> 
						<div class="relative inline-block my-2">creare</div> 
					</div>
					<div class="block relative reveal-text home-top-text">
						<div class="relative inline-block my-2">soluzioni</div> 
						<div class="relative inline-block my-2">digital</div> 
					</div>
				</h1>
			</div>
		</div>

		<div class=" panel container-2 mx-10">
			<div class="container overflow-hidden md:mt-20 pt-6 justify-center">
				<div class="md:flex items-center md:mx-20" >
					<div class="md:w-6/12 w-12/12 relative">
						<div class="md:image-card mx-5">
							<img class="relative z-50" style="width: 85%;" src="./img/aryan.png" alt="">
						</div>
					</div>
					<div class="md:w-6/12 w-12/12 text-light-gray md:px-0">
						<div class="flex items-center space-x-5 my-5">
							<hr style="width: 3rem;"/>
							<p class="font-bold-700 text-md md:font-2s">Nati con la voglia di creare il nuovo</p>
						</div>
						<div class="md:transform -translate-y-20">
							<h1 class="md:font-5xl text-4xl">Amiamo comunicare attraverso creatività e semplicità</h1>
						</div>
						<div class="block my-5 md:text-lg text-md">
							<p>La nostra passione per la creatività ci spinge a realizzare design unici, capaci di dare risalto alle caratteristiche principali delle imprese.</p>
						</div>
					</div>
				</div>

				<div class="md:flex mt-40 md:mx-20">
					<div class="md:w-6/12 sm:w-12/12 items-center md:mt-0 text-light-gray md:mx-5 md:pr-10">
						<div class="flex items-center space-x-5 my-5">
							<hr style="width: 3rem;"/>
							<p class="font-bold-700 text-md md:font-2s">Non ritrovarti a dover dire di no</p>
						</div>
						<div class="md:transform -translate-y-20">
							<h1 class="text-4xl md:font-5xl">Aiutiamo le aziende a scalare e produrre più progetti in tempo.</h1>
						</div>
					</div>

					<div class="md:w-6/12  relative">
						<div class="block my-5 font-size-lg">
							<p class="mb-2 md:text-lg text-sm">Utilizziamo le migliori tecnologie e metodi smart per creare i tuoi progetti in tempistiche brevi.</p>
							<p class="mt-2 md:text-lg text-sm">Non solo, Utilizziamo il famoso page builder chiamato Elementor per poster dare anche a voi la possibilità di gestire o modificare i siti dei vostri clienti.</p>
						</div>
					</div>
				</div>

				<div class= "mt-40 md:mx-20 md:px-20 text-light-gray">
					<div class="mt-10 pl-2 md:mt-0 md:w-12/12 block">
						<div class="flex items-center space-x-5 my-5">
							<hr style="width: 3rem;"/>
							<p class="font-bold-700 text-sm md:font-2s">Come possiamo aiutarti</p>
						</div>
						<div class="md:transform -translate-y-20">
							<h1 class="md:font-5xl text-4xl">Ci siamo verticalizzati sulla creazione di siti web in Wordpress e Custom, la nostra esperienza è al tuo servizio.</h1>
						</div>
						<div class="block my-5 font-size-lg">
							<p class="italic md:text-lg text-sm">Lavoriamo con 3 principali metodi di sviluppo in base al tipo di progetto</p>
						</div>

					</div>
				</div>

				<div class="my-14 flex flex-col md:flex-row md:mx-20 sm:mx-3 md:px-20">
					<div class="flex flex-col justify-between mt-12 mx-16">
						<div class="md:flex my-2 items-center">
							<div class="xl:w-2/12 sm:w-12/12 md:pr-5">
								<div class="relative">
									<img class="w-full" src="img/frontend.png">
								</div>
							</div>
							<div class="md:w-10/12 sm:w-12/12 md:pt-0 pt-5">
								<h1 class="text-light-gray  font-2xl">WordPress + Custom Frontend</h1>
								<p class="text-light-gray my-1 sm:my-2 font-2s">Se sai già che now metterai mano al layout del del tuo sito ma solo ai contenuti consigliamo una Soluzione Custom, più leggero, performante e più creativo.</p>
							</div>
						</div>
						<div class="md:flex my-2 items-center">
							<div class="xl:w-2/12 sm:w-12/12 md:pr-5">
								<div class="relative justify-center">
									<img class="w-full" src="img/elementor.png">
								</div>
							</div>
							<div class="md:w-10/12 sm:w-12/12 md:pt-0 pt-5">
								<h1 class="text-light-gray font-2xl">WordPress + Elementor</h1>
								<p class="text-light-gray my-1 sm:my-2 font-2s">Se vuoi essere indipendente e avere la possiblilità di modificare l'àspetto del tuo sito come e quando vuoi, sicuramente la soluzione con Elementor fa al caso tuo, è anche la soluzion più economica e veloce.</p>
							</div>
						</div>
						<div class="md:flex my-2 items-center">
							<div class="xl:w-2/12 sm:w-12/12 md:pr-5">
								<div class="relative">
									<img class="w-full" src="img/custom.png">
								</div>
							</div>
							<div class="md:w-10/12 sm:w-12/12 md:pt-0 pt-5">
								<h1 class="text-light-gray font-2xl">Custom</h1>
								<p class="text-light-gray my-1 sm:my-2 font-2s">Se il sito è completamente statico e non c'è nessuna necessità di doverlo personalizzare costantemente la soluzione custom puo essere un'ottima opzione.</p>
							</div>
						</div>
					</div>
				</div>

				<button style="padding: 10px 25px;" class="bg-white text-black font-2s my-8  mx-auto block">Scopri tutti nostri servize</button>
				<!-- Latest News and Resources -->
				<div class="mt-40 md:mx-20 px-20">
					<img style="width:100%" src="img/shoes.png">
				</div>

				<div class="mt-40 md:mx-20 md:px-20 px-14 text-light-gray">
					<div class="relative mt-20 md:mt-0 to-left md:pr-20">
						<div class="flex items-center text-center space-x-5 my-5">
							<hr style="width: 3rem;"/>
							<p class="font-bold-700 text-sm md:font-2s">Alcune delle tecnologie che utilizziamo</p>
						</div>
						<div class="md:transform -translate-y-20 font-6xl font-bold-600">
							<h1 class="my-2">Figma / AdobeXD / WordPress / Elementor / ACF / Wpml / Bootstrap / Javascript</h1>
						</div>
						<div class="block mt-5 font-size-lg">
							<p  class="italic md:text-lg text-sm">/ e molto altro ancora</p>
						</div>

					</div>
				</div>		
			</div>
		</div>

		<div class="mt-40 text-center mx-2 panel container-3">
			<h1 class="text-light-gray font-5xl mb-20">Aziende con cui collaboriamo</h1>
			<article class="wrapper">
				<div class="marquee">
					<div class="marquee__group">
						<div class="marquee-item">
							<img src="img/logo/1.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/2.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/3.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/4.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/5.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/6.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/7.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/8.png" alt="">
						</div>
					</div>
			
					<div aria-hidden="true" class="marquee__group">
						<div class="marquee-item">
							<img src="img/logo/1.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/2.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/3.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/4.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/5.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/6.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/7.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/8.png" alt="">
						</div>
					</div>
				</div>
			
				<div class="marquee marquee--reverse">
					<div class="marquee__group">
						<div class="marquee-item">
							<img src="img/logo/9.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/10.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/11.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/12.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/13.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/14.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/15.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/16.png" alt="">
						</div>
					</div>
			
					<div aria-hidden="true" class="marquee__group">
						<div class="marquee-item">
							<img src="img/logo/9.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/10.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/11.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/12.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/13.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/14.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/15.png" alt="">
						</div>
						<div class="marquee-item">
							<img src="img/logo/16.png" alt="">
						</div>
					</div>
				</div>
			</article>
		</div>

		<div class="panel container-4">
			<div class="container px-2 lg:px-8 mx-auto max-w-screen-xl overflow-hidden">
				<div class="text-center mx-2">
					<h1 class="text-light-gray font-5xl">Parlaci del tuo prossimo</h1>
					<h1 class="text-light-gray font-5xl">progetto.</h1>
					<button class="px-10 py-2 bg-white text-black font-medium mt-10 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out mx-auto block">Contattaci ora</button>
				</div>
			</div>
			

			<!-- .container -->

			<footer class="flex mt-32 bg-dark mx-10" >
				<div class="relative block md:mt-5 md:ml-15 ml-8 w-7/12">
					<p><a href="" class="text-4xl text-light-gray mb-2">Blurr</a></p>
					<p><a href="" class="text-2xl text-light-gray">ll tuo</a></p>
					<p><a href="" class="text-2xl text-light-gray">partner</a></p>
					<p><a href="" class="text-2xl text-light-gray">per il</a></p>
					<p><a href="" class="text-2xl text-light-gray">design e</a></p>
					<p><a href="" class="text-2xl text-light-gray">sviluppo</a></p>
				</div>
				<div class="relative md:mt-5 md:ml-15 ml-8 w-2/12">
					<a href="" class="text-1xl relative text-light-gray focus:outline-none focus:shadow-outline w-4/12">Links</a>
				</div>
				<div class="relative md:mt-5 md:ml-15 ml-8 w-3/12">
					<a href="" class="text-1xl relative text-light-gray focus:outline-none focus:shadow-outline mx-10 w-8/12">Studio</a>
				</div>
			</footer>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.5.2/smooth-scrollbar.js"></script>
	<!-- <script src="scripts/plugins/jquery.min.js"></script>
	<script src="scripts/plugins/gsap.min.js"></script>
	<script src="scripts/plugins/ScrollTrigger.min.js"></script>
	<script src="scripts/plugins/smooth-scrollbar.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
	<script src="scripts/script.js"></script>
</body>
</html>