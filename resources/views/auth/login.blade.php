<x-guest-layout>
   <div class="container-fluid w-50 h-100 mt-30" style="background-color: #f8f5f1!important;margin-top: 5rem !important;margin-bottom: 5rem !important;">
  <div class="row justify-content-center h-100" >
    <div class="col col-lg-6 hidden-md-down" style="border-right:3px solid #715c54!important;">
                        <div class="container">
                              <div class="row justify-content-center align-items-center" style="padding-top:30%;">
                                <div class="col-12">
                                 <img src="{{ asset('image/LogoColoured.png') }}" alt="tag" style="width:40rem;height:6rem;"></a>
                                </div>
                              </div>
                              <div class="row justify-content-center align-items-center text-center" style="padding-top:20%;font-size: 2rem;">
                                <div class="col-8">
                                  Heureux de 
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center text-center" style="margin-bottom:35%;font-size: 2rem;">
                                <div class="col-8">
                                  Vous retrouvez !
                                </div>
                            </div>
                            </div>              
    </div>

    <div class="col col-lg-6">
     
                       <div class="container text-center">
                              <div class="row justify-content-center " style="margin-top:30%;">
                                 <div class="col-12" style="vertical-align: middle;">
                                <button class="btn btn-outline-success me-2 w-100 h-10" type="button" style="background-color: #A18C7A !important;color:white"><img src="{{ asset('image/13.png') }}" alt="tag" style="float:left;width:3rem;height:2rem;"> S'inscrire avec facebook</button>
                            </div>

                              </div>
                              <div class="row justify-content-center " style="margin-top:5%;">
                                         <div class="col-12" style="vertical-align: middle;">
                                  <a href="{{ route('socialite.redirect', 'google') }}" title="Connexion/Inscription avec Google" class="btn btn-outline-success me-2 w-100 h-10" type="button" style="background-color: #A18C7A !important;color:white"  ><img src="{{ asset('image/19.png') }}" alt="tag" style="float:left;width:2.8rem;height:2rem;"> S'inscrire avec gmail</a>
                            </div>
                              </div>

                              <div class="row justify-content-center align-items-start text-center" style="margin-top:10%;font-size: 2rem;">
                               
                                                                <div class="container m-2 " style="background-color: #A18C7A!important;width:100%;" >
                                                                     <form method="POST" action="{{ route('login') }}">
                                                                @csrf
                                                      <div class="row justify-content-center align-items-start text-center mt-2" style="font-size: 2rem;">
                                                                <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                                                                <div class="col-12">
                                                                <div>
                                                                    <input type="text" class="form-control" placeholder="Adresse email" aria-label="Recipient's username" aria-describedby="basic-addon2" id="email" type="email" name="email" :value="old('email')" required autofocus>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center align-items-start text-center mb-2" style="font-size: 2rem;">
                                                            <div class="col-12">

                                                                    <div>
                                                                    <input type="Mot de passe" class="form-control" placeholder="mot de passe" aria-label="Recipient's username" id="password" aria-describedby="basic-addon2" type="password" name="password" required autocomplete="current-password">
                                                                </div>
                                                            </div>
                                                         </div>
                                                             
                                                        </div>
                                                    </div>
                                 <div class="row align-items-center mb-4" style="font-size: 2rem;">
                                        <div class="col-7">
                                          <label for="remember_me" class="flex items-center">
                                                <x-jet-checkbox id="remember_me" name="remember" />
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                                            </label>
                                        </div>
                                        <div class="col-5">
                                          <label for="remember_me" class="flex items-center">
                                              @if (Route::has('password.request'))
                                                <span class="ml-2 text-sm text-gray-600"><a href="{{ route('password.request') }}"><strong> {{ __('Mot de passe oublié?') }}</strong></a></span>
                                                 @endif
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center align-items-start">
                                                            <div class="col-12">

                                                                    <x-jet-button class="w-60 h-12"  style="background-color: #bcbea2 !important;color:white;text-align: center;font-size: 1rem;">
                    {{ __('Connectez-vous ') }}
                </x-jet-button>
                 </form>
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
<!--
<img src="{{ asset('image/16.png') }}" alt="tag" style="float:left;position:relative;width:30rem;height:20rem;">
<img src="{{ asset('image/16.png') }}" alt="tag" style="float:right;width:30rem;height:20rem;">
<!--
    <x-jet-authentication-card>


        <x-slot name="logo">
            <x-jet-authentication-card-logo />
           <img src="{{URL::asset('/image/IconColoured.png')}}" alt="profile Pic" height="120" width="120" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>
    -->
</x-guest-layout>
