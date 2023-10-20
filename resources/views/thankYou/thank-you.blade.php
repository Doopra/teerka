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
{{-- 
        
            <div class="content text-center">
                <h4 class="display-4"></h4>
                
            </div>
        </div> --}}
        <div class="container  ">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card col-md-8  shadow-md p-5" style="border-color: #ffffff !important"> 
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" style="color: #00BFFF" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"  style="color: #00BFFF"/>
                    </svg>
                </div>
                <div class="text-center">
                    <h4>Thank you for your Reservation!</h4>
                    <p class="lead mt-3">Your reservation has been successfully processed.</p>
                         <p>An agent will contact you as soon as possible</p>
                        <hr class="my-4">
                        <p>For any inquiries or changes to your reservation, please contact us at <strong>+234 913 413 5226</strong>.</p>
                    <a class="btn btn-outline-info" href="{{ route('home.index') }}" style="color: #00BFFF; border-color: #00BFFF;">Back Home</a>
                </div>
            </div>
        </div>
        </div>

 @include('home.footer')