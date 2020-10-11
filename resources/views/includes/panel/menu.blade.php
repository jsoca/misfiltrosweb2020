<form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>

                <!--// aca empieza -->

              
<div class="list-group">
   <!-- 
  <a class="list-group-item" href="/equivals"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; ABM Filtros</a>
  <a class="list-group-item" href="/buscadors"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Buscador
  </a>
  <a class="list-group-item" href="logout"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Salir</a> 

  <ul class="fa-ul">
  <li><i class="fa-li fa fa-check-square" href="/equivals"></i>Buscador</li>
  <li><i class="fa-li fa fa-check-square"></i>can be used</li> 
  <li><i class="fa-li fa fa-spinner fa-spin"></i>as bullets</li>
  
</ul>
  -->


</div>







<!--// aca termina  -->



              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
         
         
          
          
         
       
            <!--
            <a class="nav-link" href="./index.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Tablas
            </a> -->

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('fromLogout').submit();">
            </a>

         
            <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
            @csrf
        </form>
      

        
          
