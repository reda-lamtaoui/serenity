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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
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
            <div class="container text-center">
                            <div class="row justify-content-center " style="margin-top:6%;">
                                 <div class="col-12" style="vertical-align: middle;">
                                    <img src="{{ asset('image/LogoColoured.png') }}" alt="tag" style="width:45rem;height:10rem;"></a>
                                </div>
                            </div>
                              <div class="row justify-content-center " style="margin-top:2%;">
                                 <div class="col-12" style="vertical-align: middle;color:#bcbea2 !important;font-size:2rem;">
                                    <p>Trouvez votre praticien idéal </p>
                                 </div>

                              </div>
                              <div class="row justify-content-center " style="margin-top:2%;">
                                 <div class="col-12 text-uppercase" style="vertical-align: middle;font-size:1.7rem;">
                                    <p>Cliquer, Réserver, Respirer.</p>
                                 </div>

                              </div>

                              <div class="row justify-content-center align-items-start text-center " style="margin-top:5%;font-size: 2rem;">
                               
                                                                <div class="container m-2 p-3" style="background-color: #A18C7A!important;width:100%;" >
                                                                     <form method="POST" action="{{ route('login') }}">
                                                                @csrf
                                                      <div class="row justify-content-center align-items-start text-center" style="font-size: 2rem;">
                                                                <div class="col-6 " >
                                                                <div>

                                                                    <input type="text" class="form-control text-uppercase" style="height:50px" placeholder="Recherche par prestation" aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                                                </div>
                                                                
                                                            </div>
                                                                <div class="col-3">

                                                                    <div>
                                                                    <input type="Mot de passe" class="form-control text-uppercase" style="height:50px" placeholder="Date" aria-label="Recipient's username" id="password" aria-describedby="basic-addon2" type="password" name="password" required autocomplete="current-password">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">

                                                                    <div>
                                                                        <input type="text" id="search" name="search" placeholder="Search" class="form-control text-uppercase" aria-label="Recipient's username" id="password" aria-describedby="basic-addon2" required autocomplete="current-password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                        <div class="row justify-content-center align-items-start" style="margin-top:5%;">
                                                                                <div class="col-12 ">
                                                                                  <a href="/rdv2">
                                                                                        <x-jet-button class="w-70 h-15 rounded-pill text-uppercase"  style="background-color: #bcbea2 !important;color:black;text-align: center;font-size: 1.3rem;">
                                                                                           <a href="/rdv2" style="color:white;">
                                                                                            {{ __('Prendre rendez-vous ') }}
                                                                                          </a>
                                                                                        </x-jet-button>
                                                                                      
                                                                                             </form>
                                                                                </div>
                                                        </div>
                                                         <div class="row justify-content-center align-items-start" style="margin-top:10%;">
                                                                                <div class="col-1 align-self-start" >
                                                                                    <img src="{{ asset('image/2.png') }}" alt="tag" style="float:right;width:3rem;height:2rem;">
                                                                                </div>
                                                                                 <div class="col-10 align-self-center" style="vertical-align: middle;font-size:2rem;">
                                                                                     <p>Alliant bien-être mental & physique, nous sommes la pour vous accompagner. </p>
                                                                                </div>
                                                                                 <div class="col-1 align-self-start" style="transform: rotate(180deg);">
                                                                                     <img src="{{ asset('image/2.png') }}" alt="tag" style="float:right;width:3rem;height:2rem;">
                                                                                </div>
                                                        </div>
                                       
                            </div>
                                                    
                                                </div>
                               </div>
                           
                           </div>
                </div>  
    </div>
</form>
</div>
</div>
</div>
    <!-- End Search Container -->

    <!-- info Container -->

      <div class="row justify-content-center align-items-center w-100 p-3 text-white bg" style="background-image: url('./image/3.png');">
                    <div class="col-4 justify-content-center ">
                                <div class="container ">
                                    <div class="row justify-content-center align-items-start text-center " style="color:#715c54;width:100%;font-size:1.5rem;">
                                        <img src="{{ asset('image/32.png') }}" alt="tag" style="width:20rem;height:10rem;position: absolute;left:0;">
                                             <div class="col-12 m-3 align-self-center" >

                                                                    <b><p>Le bien être dans<br>
                                                                        toute sa splendeur.
                                                                     </p></b>
                                            </div>
                                    </div>
                                    <div class="row justify-content-center align-items-start" style="color:#715c54;width:100%;font-size:1.3rem;">
                                             <div class="col-9 align-self-center" style="background-color: #fff4b9!important; height: 15rem" >
                                                                    <p style="margin:8%;">Envie d'un massage ou d'une séance de sophrologie ? 
                                                                        <br>Séance de yoga  ou nouvelle coupe ? 
                                                                        <br>Avec Serenity vous avez le choix pour TOUT (ou presque)  
                                                                     </p>
                                            </div>
                                    </div>
                                                                           
                                </div>
                    </div>
                    <div class="col-4">
                                <div class="container ">
                                    <div class="row justify-content-center align-items-start text-center" style="color:#715c54;width:100%;font-size:1.5rem;">
                                       <img src="{{ asset('image/33.png') }}" alt="tag" style="width:12rem;height:6rem;position: absolute;right:55%;">
                                            <div class="col-12 m-3 align-self-center" >
                                                                    <b><p>Sélectionnez votre<br>
                                                                        praticien. 
                                                                     </p></b>
                                            </div>
                                    </div>
                                   <div class="row justify-content-center align-items-start" style="color:#715c54;width:100%;font-size:1.3rem;">
                                             <div class="col-9 align-self-center" style="background-color: #fff4b9!important; height: 15rem" >
                                                                     <p style="margin:8%;">Découvrez le profil de chacun de nos experts et laissez vous tenter par nos nombreux services
                                                                     </p>
                                            </div>
                                    </div>
                                                                           
                                </div>
                    </div>
                    <div class="col-4  ">
                                <div class="container">
                                    <div class="row justify-content-center align-items-start text-center" style="color:#715c54;width:100%;font-size:1.5rem;">
                                        <img src="{{ asset('image/34.png') }}" alt="tag" style="width:12rem;height:6rem;position: absolute;right:21%;">
                                            <div class="col-12 m-3 align-self-center" >
                                                                    <b><p>Où vous souhaitez,<br>quand vous pouvez.  
                                                                     </p></b>
                                            </div>
                                    </div>
                                   <div class="row justify-content-center align-items-start" style="color:#715c54;width:100%;font-size:1.3rem;">
                                             <div class="col-9 align-self-center" style="background-color: #fff4b9!important; height: 15rem" >
                                                                     <p style="margin:8%;">A domicile, En ligne, ou en cabinet <br> Ce week-end ? Pendant la pause dej ? <br>Choisissez le jour, l'heure et l'adresse et on s'occupe de tout !   
                                                                     </p>
                                            </div>
                                    </div>
                                                                           
                                </div>
                    </div>
  </div>
                        
    <!-- End info container -->

        <!-- Qui sommes nous ?-->
         <div class="row justify-content-center align-items-center w-100 p-3 text-white bg" style="background-image: url('./image/20.png');">
                                 <div class="col-12 text-center" style="vertical-align: middle;color:#715c54 !important;font-size:2.2rem;margin-top:2%;">
                                    <p>Qui sommes nous ?</p>
                                 </div>
                                <div class="col-12">
                                    <div class="row  justify-content-end align-items-start text-left" style="background-color:#A18C7A !important;color:#fdf8f4;font-size:1.2rem;margin-top:3%;">
                                        <div class="col-4" style="
    padding-left: 0px;
    padding-right: 15px;">
                                            <img src="{{ asset('image/quisommesnous.png') }}" alt="tag" style="width:38rem;height:40rem"></a>
                                        </div>
                                             <div class="col-8" style="font-size:1.5rem;" >
                                                                    <p style="margin-top:5%;">À l’origine une histoire d’amitié, amies d’enfance depuis toute petite, Sarah et Flore grandissent ensemble, mais évoluent différemment. Elles se retrouvent durant leurs études supérieures pendant 5 ans. Durant cette période, elles font face à de nombreux facteurs de stress s’entremêlant à leurs vies, et les nombreux confinements liés à la crise sanitaire leur font ressentir un sentiment de solitude. Force de volonté, ces jeunes femmes toujours optimistes réalisent l’importance de prendre soin d’elles autant physiquement que mentalement et décident d'adopter une véritable routine bien être. L’idée leur paraît alors évidente, créer Serenity.<br><br>

                                        À travers notre histoire, nous avons eu la volonté de transmettre le « well-being », parce qu’il est tout aussi important de prendre soin de sa santé mentale que de sa santé physique.<br><br>
                            Nous souhaitons offrir à nos clients la sérénité dans leur quotidien. S’accorder un moment dans la journée pour prendre soin de soi, accompagné d’une sélection qualitative de praticiens qui partagent des valeurs communes aux nôtres.</p><br><br>
                            <p style="margin-bottom:2%;text-align: right;"><a href="/QuiSommesNous">Lire la suite >>></a></p>
                                            </div>
                                    </div>
                                    <div class="row justify-content-center align-items-center w-100 p-3 text-white bg" style="background-image: url('./image/18.png');">
                                 <div class="col-4">
                                    
                                 </div>
                                 <div class="col-4">
                                    
                                 </div>
                                 <div class="col-4">
                                    
                                 </div>

            </div>
                            </div>

                </div>
            </div>




                              
    <!-- End Qui sommes nous? -->
     <!-- info Container -->

      <div class="row justify-content-center align-items-center w-100 p-3 text-white ms-0" style="margin-bottom: 10%">
         <div class="col-12 text-center" style="vertical-align: middle;color:#715c54 !important;font-size:2.4rem;margin-top:3%;margin-bottom:6%">
                                    <p>Découvrez nos 4 catégories de praticiens</p>
                                 </div>
                    <div class="col-3 center-block">
                                <div class="container">
                                    <a href="/QuiSommesNous">
                                    <div class="row justify-content-center align-items-end text-center" style="color:#715c54;width:70%;font-size:1.5rem;">
                                             <div class="col-12  center-block" >
                                                                    <b><u><p>Beauté</p></u></b>
                                            </div>
                                    </div>
                                    <div class="row justify-content-center align-items-start" style="color:#715c54;width:70%;font-size:1.3rem;">
                                             <div class="col-12 m-1  center-block" >
                                                                    <img src="{{ asset('image/22.png') }}" alt="tag" style="width:20rem;height:28rem;padding-top:0;">
                                            </div>
                                       

                                    </div>
                                        </a>                                   
                                </div>

                    </div>
                    <div class="col-3">
                                <div class="container">
                                     <a href="/bienEtrePhysique">
                                    <div class="row justify-content-center align-items-start text-center" style="color:#715c54;width:70%;font-size:1.5rem;">
                                             <div class="col-12 align-self-center" >
                                                                     <b><u><p>Bien-être physique</p></u></b>
                                            </div>
                                    </div>
                                   <div class="row justify-content-center align-items-start" style="color:#715c54;width:70%;font-size:1.5rem;">
                                             <div class="col-12 m-1 align-self-center" >
                                                                   <img src="{{ asset('image/23.png') }}" alt="tag" style="width:20rem;height:28rem;">
                                            </div>
                                    </div>
                                                                           
                                </div>
                                </a>
                    </div>
                    <div class="col-3">
                                <div class="container ">
                                     <a href="/relaxation">
                                    <div class="row justify-content-center align-items-start text-center" style="color:#715c54;width:70%;font-size:1.5rem;">
                                            <div class="col-12 align-self-center" >
                                                                    <b><u><p>Relaxation</p></u></b>
                                            </div>
                                    </div>
                                    <div class="row justify-content-center align-items-start" style="color:#715c54;width:70%;font-size:1.3rem;">
                                             <div class="col-12 m-1 align-self-center" >
                                                                   <img src="{{ asset('image/24.png') }}" alt="tag" style="width:20rem;height:28rem;">
                                            </div>
                                    </div>
                                        </a>                                   
                                </div>
                    </div>
                    <div class="col-3">
                                <div class="container">
                                     <a href="/bienEtreMental"> 
                                    <div class="row justify-content-center align-items-start text-center" style="color:#715c54;width:70%;font-size:1.5rem;">
                                            <div class="col-12 align-self-center" >
                                                                    <b><u><p>Bien-être mental</p></u></b>
                                            </div>
                                    </div>
                                    <div class="row justify-content-center align-items-start" style="color:#715c54;width:70%;font-size:1.3rem;">
                                             <div class="col-12 m-1 align-self-center" >
                                                                  <img src="{{ asset('image/25.png') }}" alt="tag" style="width:20rem;height:28rem;">
                                            </div>
                                    </div>
                                       </a>                                    
                                </div>
                    </div>
  </div>
                        
    <!-- End info container -->
          @include('Components.footBar')
    </body>
</html>
