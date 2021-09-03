
  
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
    <div class="container" style="background-color:#ccd2e4">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'ems') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active" >
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{ url('services') }}">Services</a>
                  </li>
                 
                @auth
                    
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('bulksms') }}">Send SMS</a>
                </li>
                
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('posts.create') }}">Create New Post</a>
              <a class="dropdown-item" href="{{ route('posts.index') }}">List of Posts</a>
              </div>
                  </li>
                  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('events.create') }}">Create New Event</a>
              <a class="dropdown-item" href="{{ route('events.index') }}">List of Events</a>
              
            </div>
          </li>
      @endauth

            </ul>
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>
                  

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <a class="dropdown-item" href="{{ route('register') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Edit Profile') }}
                   </a>
                   @can('manage-users')
                   <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                   User Management
                </a>
                @endcan
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>

                  </div>
                  
                  
              </li>
          @endguest
            </ul>

        </div>
    </div>
</nav>