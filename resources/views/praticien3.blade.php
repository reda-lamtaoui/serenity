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
        <link
    rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
    type="text/css"
  />
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script
    src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    type="text/javascript"
  ></script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
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
/* sidebar links -------------------------- */

.sidebar-link {
    display: flex;
    text-decoration: none;
}

.sidebar-link img {
    width: 20px;
    height: 20px;
}

.sidebar-link span {
    align-self: center;
    margin-left: 15px;
    font-size: 16px;
    font-weight: bold;
    color: var(--text-color-secondary);
}

/********************************************/

/* header links --------------------------- */

.header-link, .header-link-index, .header-link-login, .header-link-register {
    display: flex;
    flex-direction: row;
    align-items: center;
    text-decoration: none;
    border-radius: 25px;
    height: 50px;
}
.header-link span, .header-link-index span, .header-link-login span, .header-link-register span {
    font-size: 25px;
    font-weight: 600;
    color: var(--text-color-primary);
}

.header-link-index span {
    font-weight: bold;
}

.header-link-login {
    background-color: var(--white-link);
}

.header-link-register {
    justify-content: center;
    width: 200px;
    background-color: var(--green-link);
}
.header-link-register span {
    color: var(--text-color-secondary);
    margin-left: 15px;
    margin-right: 15px;
}


/**********************************************/
/* header links --------------------------- */

.footet {
    display: flex;
    flex-direction: row;
    align-items: center;
    text-decoration: none;
    border-radius: 25px;
    height: 50px;
}
.footer span{
    font-size: 25px;
    font-weight: 600;
    color: white;
}

/**********************************************/

/* register link --------------------------- */

.register-link span {
    align-self: center;
    margin-top: 20px;
    outline: none;
    color: var(--text-color-thirdly);
}

.register-login-link {
    align-self: center;
    margin-top: 20px;
    outline: none;
    font-size: 14px;
    font-weight: 600;
    color: var(--text-color-thirdly);
}
/*********************************************/

/* login link ----------------------------- */
.forgot-password-link {
    align-self: center;
    margin-top: 20px;
    outline: none;
    font-size: 14px;
    font-weight: 600;
    color: var(--text-color-thirdly);
}
/*******************************************/
        </style>
      <script>
        window.addEventListener("load",function(event){
            console.log("test");
            var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday",
        ],
        datasets: [
          {
            label: "work load",
            data: [2, 9, 3, 17, 6, 3, 7],
            backgroundColor: "rgba(153,205,1,0.6)",
          },
          {
            label: "free hours",
            data: [2, 2, 5, 5, 2, 1, 10],
            backgroundColor: "rgba(155,153,10,0.6)",
          },
        ],
      },
    });
        });

        window.onload=init();

        function init(){
            
        };

    
  </script>
        {{-- Loads Inter --}}
    @googlefonts

    {{-- Loads IBM Plex Mono --}}
    @googlefonts('code')
    </head>
    <body class="antialiased">
         
         <div class="row align-items-start w-100 p-3" style="background-color: white!important;font-size: 1rem;">
            <div class="col-3 h-100">
                                        
                                 @include('Components.sidebar')
                                 
                                 
           </div>

    <div class="col-9 h-100" >
      <div class="row justify-content-center h-100" >
        <div class="col col-lg-12" style="margin-top: 100px;">
                                  <p style="color:#bcbea2 !important;font-size:2.2rem;">la liste des praticiens</p>
                                </div>
      </div>
      <div class="row justify-content-start h-100" style="margin-top: 100px;" >
        <div class="col col-lg-12">
                                  <a href="/praticien2"> <button class="btn btn-outline-success me-2" type="button" style="background-color: #bcbea2 !important;color:white">ajouter praticien</button></a>
                                </div>
      </div>
  <div class="row justify-content-center h-100" style="margin-top: 50px;">
    <div class="col col-lg-12" >
                        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">certification</th>
      <th scope="col">status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user['id']}}</th>
      <td>{{$user['name']}}</td>
      <td>{{$user['email']}}</td>
      <td>non certifié</td>
      <td>Non validé</td>
      <td> <a href="/praticien"> <button class="btn btn-outline-success me-2" type="button" style="background-color: #bcbea2 !important;color:white">View profile</button></a></td>

    </tr>
    @endforeach
  </tbody>
</table>
                                                    
                                                </div>
                               </div>
                           
                           
                </div>  
    </div>
  </div>
</div>
    <!-- End info container -->
          
  </div>
</div>
                      
    </body>
</html>
