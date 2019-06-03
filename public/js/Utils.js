
			//FUNCIONES PARA ABRIR Y CERRAR EL SIDEBAR
			function openLeftMenu() {
			  document.getElementById("leftMenu").style.display = "block";
			}
			function closeLeftMenu() {
			  document.getElementById("leftMenu").style.display = "none";
			}
			function openRightMenu() {
			  document.getElementById("rightMenu").style.display = "block";
			}
			function closeRightMenu() {
			  document.getElementById("rightMenu").style.display = "none";
			}

			function openCity(cityName, elmnt, color) {
		  // Hide all elements with class="tabcontent" by default */
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  // Remove the background color of all tablinks/buttons
		  tablinks = document.getElementsByClassName("tablink");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].style.backgroundColor = "";
		  }
		  // Show the specific tab content
		  document.getElementById(cityName).style.display = "block";
		  // Add the specific color to the button used to open the tab content
		  elmnt.style.backgroundColor = color;
			}
			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();

			var btncargar1 = document.getElementById('cargar');
			function cargarcontenido(){
				var xhr = new XMLHttpRequest();
				xhr.open("GET","http://localhost:8080/noticia1",true);
				xhr.onreadystatechange = function(){
					if (xhr.readyState === 4 && xhr.status === 200) {
						var contenido = document.getElementById("contenido");
						contenido.innerHTML = xhr.responseText;
					}
				}
				xhr.send();
			}
			btncargar1.addEventListener('click',cargarcontenido());
			var btncargar2 = document.getElementById("cargar2");
			function cargarcontenido2(){
				var xhr = new XMLHttpRequest();
				xhr.open("GET","http://localhost:8080/noticia2",true);
				xhr.onreadystatechange = function(){
					if (xhr.readyState === 4 && xhr.status === 200) {
						var contenido = document.getElementById("contenido");
						contenido.innerHTML = xhr.responseText;
					}
				}
				xhr.send();
			}
			btncargar2.addEventListener('click',cargarcontenido2());
			var btncargar3 = document.getElementById("cargar3");
			function cargarcontenido3(){
				var xhr = new XMLHttpRequest();
				xhr.open("GET","http://localhost:8080/noticia3",true);
				xhr.onreadystatechange = function(){
					if (xhr.readyState === 4 && xhr.status === 200) {
						var contenido = document.getElementById("contenido");
						contenido.innerHTML = xhr.responseText;
					}
				}
				xhr.send();
			}
			btncargar3.addEventListener('click',cargarcontenido3());
