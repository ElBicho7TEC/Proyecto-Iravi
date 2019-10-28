@extends('layouts.head')
@include('layouts.menu_NavegacionCliente')
{{-------------------------Buscador---------------------------}}
<div class="container-fluid">
	<div class="row justify-content-center">
	   <div class="col-md-4"></div>
		<div class="col-md-4"></div>
        <div class="col-md-4">
          <form>
            <div class="card-body row no-gutters align-items-center">
             <div class="col">
              <input class="form-control" type="search" placeholder="Buscar">
             </div>
            <div class="col-auto">
            <button class="btn" type="submit">
            <img src="images/iconoBuscar.png" width="30" height="30"	class="d-inline-block align-top">	
            </button>
            </div>
           </div>
          </form>
        </div>
    </div>
</div>
{{------------------------Fin de Buscador---------------------------}}

@include('layouts.carruselCliente') 

{{------------------------Productos---------------------------}}

<?php
$i=0;
?>
<table>
@foreach ($productos as $producto)
  <tr>
  <?php
  if($i==1 || $i==2 || $i==3)
  {
  ?>
    <td>
    <div class="container" class="nav-link active">
      <div class="row">
        <div class="col-md-5">
          <div class="card" style="width: 15rem;">
            <center>
              <a href="#">
                <img src="storage{{$producto->ruta}}"  class="card-img-top" alt="Card image cap">
              </a>
              <div class="card-body">
                <span class="d-inline-block align-top"><h4>{{ $producto->nombreproducto }}</h4></span>
                <class="card-text"><h5>${{ $producto->precio }}</h5></class="card-text">
                <a href="{{ url('vista_Producto')}}" class="btn btn-primary" style="background:#003366">Ver descripción</a>
              </div>
            </center>
          </div>  
        </div>
      </div>
    </div>
    </td>

  <?php
  }
  else
  {
  ?>
    </tr>

  <?php
  $i=0;
  }
  $i = $i+1;
  ?>
@endforeach
</table>

{{--------------------Fin Productos---------------------------}} 


{{--------------------Inicio de Paginación----------------------}}
<div class="container-fluid">
 <div class="row">
   <div class="col-md-4">     
   </div>
   <div class="col-md-4">
    <nav aria-label="Page navigation example">
       <ul class="pagination">
         <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>
         </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
      </ul>
   </nav>    
  </div>
  <div class="col-md-4">     
  </div>
 </div> 
</div>
{{--------------------Fin de Paginación----------------------}}

@extends('layouts.footer')

