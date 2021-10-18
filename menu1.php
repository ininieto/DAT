<!--EN ESTE ARCHIVO INCLUIMOS FRAGMENTOS DE CÓDIGO HTML QUE SE REPITEN -->

	<!--Para que haya un menú desplegable en todas las subpáginas, y además puedas
      volver más facilmente al menú principal-->
    
	
	
      <div class = "navbar">
	
		<a href = "index.php"> Menú Principal</a>
        <a href = "formularioLogIn.php" id = "login"> Login</a>
        <a href = "videoclip.php"> Videoclips</a>
        <a href = "#ReservadeLanzamiento" id = "reserva_lanzamiento"> Reserva de Lanzamiento</a>
        <a href = "buscador.php" id = "reserva_lanzamiento"> Búsqueda de Productos</a>
        <div class = "dropdown">
        
        <button class = "dropbtn"> Comprar
          <i class = "fa fa-caret-down"></i>
        </button>
        
          <div class = "dropdown-content">
            <a href = "compra.php?categoria=vinilo" id = "vinilos">Vinilos</a>
            <a href = "compra.php?categoria=CD" id = "CDs">CD´s</a>
            <a href = "compra.php?categoria=Blue-ray" id = "Blu-ray">Blu-Ray</a>
          </div>
        
        </div>
       
      </div>

