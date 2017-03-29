<div id="pg1">

<div class="port-super-natural-cardapio">
	
	<div class="texto-principal">
		<span>CARDÁPIO • SUPER NATURAL</span>
		<h4>Design Editorial, Ilustração </h4>
		<h5>Surgiu a necessidade e então o Super Natural, loja e buffet de alimentos naturais e saudáveis localizada na Rua Augusta em São Paulo, nos procurou para criar um cardápio alegre, dinâmico e instigante para sua loja. Aceitamos o desafio e, com ilustrações apetitosas e muitas cores alegres, a peça foi desenvolvida!</h5>
	</div>

	<div class="imagens-super-natural-cardapio">
		
		<div class="row">
		
		<div class="div-imagens-pg3">
			<img src="images/case3/foto-pequena/1-29.png" onclick="openModal();currentSlide(1)" class="cursor-pointer" id="img-1" />
			<img src="images/case3/foto-pequena/1-30.png" onclick="openModal();currentSlide(2)" class="cursor-pointer" id="img-2" />
			<img src="images/case3/foto-pequena/1-31.png" onclick="openModal();currentSlide(3)" class="cursor-pointer" id="img-3" />
			<img src="images/case3/foto-pequena/1-32.png" onclick="openModal();currentSlide(4)" class="cursor-pointer" id="img-4" />
		</div>
		
		<div id="myModal" class="modal-slides">
		  <span class="fechar3 cursor-pointer" onclick="closeModal()">&times;</span>
		  <div class="modal-content">

		    <div class="mySlides">
		      <div class="numbertext">1 / 4</div>
		        <img src="images/case3/foto-grande/1.png" style="width:100%">
		    </div>

		    <div class="mySlides">
		      <div class="numbertext">2 / 4</div>
		        <img src="images/case3/foto-grande/2.jpg" style="width:100%">
		    </div>

		    <div class="mySlides">
		      <div class="numbertext">3 / 4</div>
		        <img src="images/case3/foto-grande/3.jpg" style="width:100%">
		    </div>

		    <div class="mySlides">
		      <div class="numbertext">4 / 4</div>
		        <img src="images/case3/foto-grande/4.jpg" style="width:100%">
		    </div>

			<div class="setas">
				<a class="anterior" onclick="plusSlides(-1)">&#10094;</a>
		    	<a class="proximo" onclick="plusSlides(1)">&#10095;</a>
			</div>
		  </div>
		</div>

		    <script>

                function openModal() {

                  document.getElementById('myModal').style.display = "block";

                  var scrollBarWidth = window.innerWidth - document.body.offsetWidth;
                   $('body').css({
                      marginRight: scrollBarWidth,
                      overflow: 'hidden'
                   });

                }

                function closeModal() {

                  document.getElementById('myModal').style.display = "none";

                  var scrollBarWidth = window.innerWidth + document.body.offsetWidth;
                   $('body').css({
                      marginRight: scrollBarWidth,
                      overflowY: 'auto'
                   });
                }

                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" ativo", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " ativo";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
            </script>

		</div>
		
	</div>

</div>