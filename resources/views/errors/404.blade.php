<!DOCTYPE html>
<html>
   @include('home.style')
<body >
<header class="header_section" >

    <div class="container" >
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}"> <p>Teer<span style="color: #00BFFF">ka.com</span></p> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                             

                @auth
                <li class="nav-item " >
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="logoutDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                     </button>
                     <div class="dropdown-menu" aria-labelledby="logoutDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             Logout
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                           @method('DELETE')
                             
                         </form>
                     </div>
                 </div>
                 
                    
                 </li>

                 
                
                

              @else
                 
              
                 <li class="nav-item">
                  <a class="btn btn-primary" id="logincss" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="background-color: #00BFFF; border-color: #00BFFF;">Login</a>
               </li>

               <li class="nav-item">
                  <a class="btn btn-success" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="background-color: #002c3e; border-color:#002c3e;">Register</a>
               </li>
                 @endauth
                 
                
             </ul>
          </div>
       </nav>
    </div>
 </header>

<div class="container mt-5 mb-5">

    <div class="page-caption text-center py-5">
        <h1 style="color: #00BFFF">PAGE NOT FOUND</h1>
        <p style="font-size: 18px;
        letter-spacing: .3px; color: rgb(101, 114, 121)">
            Please call +234 913 413 5226 to book

            <br>

            Sorry, we can't seem to find the page you're looking for. <br>
            Please head back to the home page or search for a hall
        </p>
    </div>

</div>



 @include('home.footer')