<!--Para que haya un menú desplegable en todas las subpáginas, y además puedas
      volver más facilmente al menú principal-->
    
      <div class = "navbar">
	
        <a href = "formularioLogIn.php" id = "login"> Login</a>
        <a href = "videoclip.html"> Videoclips</a>
        <a href = "#ReservadeLanzamiento" id = "reserva_lanzamiento"> Reserva de Lanzamiento</a>
        <a href = "index.php"> Menú Principal</a>
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