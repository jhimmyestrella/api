<section class="content">

    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('imagenes/'.Auth::user()->photo) }}" width="50" height="50" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>

           
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                

     

                    <li class="{{ (Route::currentRouteName() == 'user.index' || Route::currentRouteName() == 'user.create' 
                                || Route::currentRouteName() == 'user.edit' || Route::currentRouteName() == 'user.show' ) 
                                   ? 'active':'' }}">
                        <a href="{{ route('user.index') }}">
                            <i class="material-icons">person</i>
                            <span>Usuarios</span>
                        </a>
                    </li>

                <br>
                <br>
         

       

                <li class="header"></li>
                <li>
                    <a class="dropdown-item" 
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                        <i class="material-icons col-red">donut_large</i>
                        <span>Cerrar Sesion</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                    </form>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
      
    </aside>
</section>