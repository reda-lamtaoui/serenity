<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            body {
                 background-image: url('./image/7.png');
                 font-family: Raleway, sans-serif;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
        margin-left:0px;
        margin-right:0px;

}
input[type="text"], textarea {

  background-color : #A18C7A; 
  color: white;

}
input::placeholder {
  color: red;
}

.bg{
     background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
        </style>
        {{-- Loads Inter --}}
    @googlefonts

    {{-- Loads IBM Plex Mono --}}
    @googlefonts('code')
    </head>
    <body class="antialiased">
         @include('Components.navBar')
    <!-- Search container-->
    <div class="row justify-content-start align-items-center w-100 p-3 text-white" style="margin-left: 5%">
         <div class="col-4 text-left" style="vertical-align: middle;color:#715c54 !important;font-size:2rem;margin-top:2%;">
                                    <p>Mon profil</p>
                                    
                                 </div>
      </div>
           <div class="container-fluid h-100 mt-30" style="width:100%;margin-bottom: 5rem !important;margin-left: 5%">
  <div class="row justify-content-start h-100" >
    <div class="col-10 text-center">
     
                              <div class="row justify-content-between " style="margin-top:5%;">
                                         <div class="col-2" style="vertical-align: middle;">
                                 <button class="btn btn-outline-success me-2 w-100 h-10" type="button" style="background-color: #A18C7A !important;color:white"><img src="{{ asset('image/70.png') }}" alt="tag" style="float:left;width:2.8rem;height:2rem;"> Paramètre </button>
                            </div>
                            <div class="col-4 p-0" style="vertical-align: middle;">
                                <button class="btn btn-outline-success w-100 h-20" type="button" style="background-color: #A18C7A !important;text-align: left;color:white;font-size:1.7rem;width:100%;height:4rem;">Pays<img src="{{ asset('image/73.png') }}" alt="tag" style="float:right;padding-top:0.3rem;width:2.8rem;height:2rem;"></button>
                            </div>
                              </div>
                               <div class="row justify-content-end align-items-center " style="margin-top:1%;">
                            <div class="col-4" style="vertical-align: middle;background-color:#bcbea2 !important;height:17rem;color: black;font-size: 1.2rem">
                               <div class="row justify-content-center align-items-center " style="margin-top:6%;">
                                    <div class="col-3">
                                     <img src="{{ asset('image/74.png') }}" alt="tag" style="float:left;text-align: center;width:8rem;height:6rem;">
                                    </div>
                                     <div class="col-7" style="font-size: 1.2rem;color:#A18C7A !important;">
                                     <span>INFORMATION BANCAIRE </span> 
                                    </div>
                                </div>
                                <div class="row justify-content-center align-items-center " style="margin-top:10%;">
                                    <div class="col-10">
                                      <button class="btn btn-outline-success w-100 h-20" type="button" style="background-color: #A18C7A !important;text-align: center;color:white;font-size:1.2rem;width:100%;height:2.2rem;"><span>Numéro carte  </span> </button>
                                    </div>
                                </div>
                               
                                <div class="row justify-content-center align-items-center " style="margin-top:3%;">
                                    <div class="col-5">
                                      <button class="btn btn-outline-success w-100 h-20" type="button" style="background-color: #A18C7A !important;text-align: center;color:white;font-size:1.2rem;width:100%;height:2.2rem;"><span>Expire le </span> </button>
                                    </div>
                                     <div class="col-5">
                                      <button class="btn btn-outline-success w-100 h-20" type="button" style="background-color: #A18C7A !important;text-align: center;color:white;font-size:1.2rem;width:100%;height:2.2rem;"><span>CRYPTO</span></button>
                                    </div>
                                </div>
                            </div>
                              </div>
                              <div class="row justify-content-end" style="margin-top:2%;">
                            <div class="col-4 p-0" style="vertical-align: middle;">
                                <button class="btn btn-outline-success w-100 h-20 text-left" type="button" style="background-color: #A18C7A !important;text-align: left; color:white;font-size:1.7rem;width:100%;height:4rem;">Modifier mon mot de passe <img src="{{ asset('image/73.png') }}" alt="tag" style="float:right;padding-top:0.3rem;width:2.8rem;height:2rem;"></button>
                            </div>
                              </div> 
                              <div class="row justify-content-end " style="margin-top:2%;">
                            <div class="col-4 p-0" style="vertical-align: middle;">
                                <button class="btn btn-outline-success w-100 h-20 text-left" type="button" style="background-color: #A18C7A !important;text-align: left;color:white;font-size:1.7rem;width:100%;height:8rem;">Modifier mes informations <br> personnelles <img src="{{ asset('image/73.png') }}" alt="tag" style="float:right;padding-top:0.3rem;width:2.8rem;height:2rem;"></button>
                            </div>
                              </div>  

                                                    
                                                </div>
                               </div>
                           
                           </div>
                </div>  
    </div>
  </div>
</div>
    <!-- End info container -->
          @include('Components.footBar')
    </body>
</html>
