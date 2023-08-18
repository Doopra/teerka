<header class="header_section" >
    <div class="container" >
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}"> <p>Teer<span style="color: #00BFFF">ka.com</span></p> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="product.html">Apartment</a>
                </li>

                                <li class="nav-item">
                    <a class="nav-link" href="{{url('show_order')}}">Request</a>
                 </li>



               

                @auth
                <li class="nav-item " >
                    <x-app-layout>

                    </x-app-layout>
                 </li>
                


              @else
                 
              
                 <li class="nav-item">
                  <a class="btn btn-primary" id="logincss" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
               </li>

               <li class="nav-item">
                  <a class="btn btn-success" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
               </li>
                 @endauth

                
             </ul>
          </div>
       </nav>
    </div>
 </header>