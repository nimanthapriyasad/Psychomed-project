
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Psychomed</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type='text/css' href="{{ asset('css/all.min.css') }}">
        


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-contain bg-no-repeat" >
        <div class="flex-col text-gray-800 antialiased">
            <div>
                @include('layouts.header')
            </div> 
            <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4 mb-5">
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="h-100 bg-light d-flex align-items-center p-10">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-map-marker-alt text-primary"></i>
              </div>
              <div class="ms-4" >
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Address
                </p>
                <h5 class="mb-0">New Road, Wennappuwa,Sri Lanka.</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s  ">
            <div class="h-100 bg-light d-flex align-items-center p-10 ">
              <div class="btn-lg-square bg-white flex-shrink-0" >
                <i class="fa fa-phone-alt text-primary"></i>
              </div>
              <div class="ms-4" >
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Call Now
                </p>
                <h5 class="mb-0" >(+94) 11 342 9702</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100 bg-light d-flex align-items-center p-10">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-envelope-open text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Mail Now
                </p>
                <h5 class="mb-0">nimanthapriyasad@icloud.com</h5>
              </div>
            </div>
          </div>
        </div>
       
        <img class="img-fluid mb-3" src="img/4.JPG" alt="Icon" />
        
                </div>
              </div>

              <div class="mt-20">
                @include('layouts.footer')
            </div>


            
          </div>
          
         
        </div>
      </div>
    
            
    
    </body>
</html>
