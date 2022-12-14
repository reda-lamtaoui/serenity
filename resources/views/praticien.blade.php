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
                 background-image: url('./image/5.png');
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
input::-webkit-input-placeholder {
    color:red;
}

input::-moz-placeholder {
    color:red;
}

input::-ms-placeholder {
    color:red;
}

input::placeholder {
    color:red;
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
    <div class="row justify-content-center align-items-center w-100 p-3 text-white" style="margin-bottom:2%">
         <div class="col-12 text-center" style="vertical-align: middle;color:#715c54 !important;font-size:2rem;margin-top:2%;">
                                    <p>Vous ??tes praticiens ?</p>
                                    
                                 </div>
      </div>
           <div class="container-fluid h-100 mt-30" style="width:80%;background-color: #f8f5f1!important;margin-top: 5rem !important;margin-bottom: 5rem !important;">
  <div class="row justify-content-center h-100" >
    <div class="col col-lg-6 hidden-md-down" style="border-right:3px solid #715c54!important;">
                        <div class="container">
                              <div class="row justify-content-center align-items-center" style="padding-top:6%;">
                                <div class="col-12">
                                  <p style="color:#715c54 !important;font-size:1.6rem;margin-top:3%;">Pourquoi nous rejoindre ? </p>
                                </div>
                              </div>
                              <div class="row justify-content-center align-items-center text-left" style="padding-top:10%;">
                                <div class="col-3">
                                  <img src="{{ asset('image/63.png') }}" alt="tag" style="width:9rem;height:6rem;">
                                </div>
                                <div class="col-9">
                                 <p style="color:#715c54 !important;font-size:1rem;"> D??veloppez votre r??seau : Serenity c???est aussi un espace ou cr??er du lien avec la communaut?? de praticiens : souder vos liens, communiquer, ??changer des informations avec d???autres professionnels sur votre activit??, cr??er des opportunit??s</p>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center text-left" style="padding-top:10%;">
                                <div class="col-3">
                                  <img src="{{ asset('image/64.png') }}" alt="tag" style="width:9rem;height:6rem;">
                                </div>
                                <div class="col-9">
                                 <p style="color:#715c54 !important;font-size:1rem;">Un v??ritable gain de temps : G??rez votre emploi du temps avec un calendrier vous permettant d???avoir une visibilit?? et focalisez vous sur vos clients, ne vous pr??occupez plus des t??ches administratives : de l???encaissement jusqu???au service apr??s ventes : nous sommes l?? pour vous aider. </p>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center text-left" style="padding-top:10%;">
                                <div class="col-3">
                                  <img src="{{ asset('image/62.png') }}" alt="tag" style="width:9rem;height:6rem;">
                                </div>
                                <div class="col-9">
                                 <p style="color:#715c54 !important;font-size:1rem;"> Gagnez plus : Augmentez vos chiffre d'affaires et vos rendez vous gr??ce ?? notre base de client mais ??galement avec notre syst??me de g??olocalisation qui vous permet de d??goter des rdv de derni??res minutes et combler vos annulations. </p>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center text-left" style="padding-top:10%;">
                                <div class="col-3">
                                  <img src="{{ asset('image/66.png') }}" alt="tag" style="width:9rem;height:6rem;">
                                </div>
                                <div class="col-9">
                                 <p style="color:#715c54 !important;font-size:1rem;"> Fid??lisez vos clients : Communiquez directement via notre chat avec vos clients et faites leurs d??couvrir vos prestations et d??velopper votre r??putation gr??ce aux avis clients certifi??s. </p>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center text-left" style="padding-top:10%;padding-bottom:10%;">
                                <div class="col-3">
                                  <img src="{{ asset('image/65.png') }}" alt="tag" style="width:9rem;height:6rem;">
                                </div>
                                <div class="col-9">
                                 <p style="color:#715c54 !important;font-size:1rem;">Soyez libre : Pas d???engagement obligatoire, choisissez le moment et le lieu o?? vous souhaitez pratiquer. </p>
                                </div>
                            </div>
                            </div>              
    </div>

    <div class="col col-lg-6">
     
                       <div class="container text-center">
                        <div class="row justify-content-start align-items-center text-left" style="padding-top:20%;">
                                <div class="col-5">
                                  <p style="color:#bcbea2 !important;font-size:2.2rem;">Inscrivez-vous  </p>
                                </div>
                              </div>
                              
                              <div class="row justify-content-center " style="margin-top:4%;">
                                 <div class="col-6" style="vertical-align: middle;">
                                <input type="text" class="form-control" placeholder="Votre pr??nom  " aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                 </div>
                                 <div class="col-6" style="vertical-align: middle;">
                                <input type="text" class="form-control" placeholder="Votre nom " aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                 </div>

                              </div>
                              <div class="row justify-content-center " style="margin-top:4%;">
                                 <div class="col-12" style="vertical-align: middle;">
                                <input type="text" class="form-control" placeholder="Votre adresse e-mail " aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                 </div>

                              </div>
                              <div class="row justify-content-center " style="margin-top:4%;">
                                 <div class="col-2" style="vertical-align: middle;">
                                <input type="text" class="form-control" placeholder="+33 " aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                 </div>
                                 <div class="col-10" style="vertical-align: middle;">
                                <input type="text" class="form-control" placeholder="Votre num??ro de t??l??phone  " aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                 </div>

                              </div>
                               <div class="row justify-content-center " style="margin-top:4%;">
                                 <div class="col-12" style="vertical-align: middle;">
                                <input type="text" class="form-control" placeholder="Quel type de praticiens ??tes-vous ? " aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                 </div>

                              </div>
                               <div class="row justify-content-center " style="margin-top:4%;">
                                 <div class="col-12" style="vertical-align: middle;">
                                <input type="text" class="form-control" placeholder="O?? exercer vous ?   " aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                 </div>

                              </div>
                              <div class="row justify-content-center " style="margin-top:4%;">
                                 <div class="col-12" style="vertical-align: left;">
                                <label for="image" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">inserez votre image</label>
                                <input type="file" class="form-control" placeholder="??tes-vous certifi??s ?    " aria-label="Recipient's username" aria-describedby="basic-addon2" id="image" hidden>
                                 </div>
                              </div>
                               <div class="row justify-content-center " style="margin-top:4%;margin-bottom: 10%">
                                 <div class="col-12" style="vertical-align: middle;">
                                  <label for="files" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">??tes-vous certifi??s ?</label>
                                <input type="file" class="form-control" placeholder="??tes-vous certifi??s ?    " aria-label="Recipient's username" aria-describedby="basic-addon2" id="files" hidden>
                                
                                 </div>

                              </div>
                              
                                 <div class="row align-items-center mb-4" style="font-size: 3rem;padding-bottom: 10%">
                                        <div class="col-7">
                                          <label for="remember_me" class="flex items-center">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                <span class="ml-2 text-sm text-gray-600"><a href="https://serenity.expert/CGU.php">{{ __("J'accepte la politique de confidentialit?? de Serenity ") }}</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center align-items-start">
                                                            <div class="col-12">

                                                                    <x-jet-button class="w-60 h-12"  style="background-color: #bcbea2 !important;color:white;text-align: center;font-size: 1rem;">
                    {{ __('Envoyez d??s maintenant ') }}
                </x-jet-button>
            
                                                            </div>
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
