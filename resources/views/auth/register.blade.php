<!-- Comienzo del contenido para el registro de un usuario -->
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
            <img src="https://i.postimg.cc/fT8D03Px/1.png" alt="" height="150rem" width="150rem">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

 <!-- Formulario -->
 
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="first_name" value="{{ __('Nombres') }}" />
                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="off" />
            </div>

            <div class="mt-4">
                <x-jet-label for="last_name" value="{{ __('Apellidos') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="off" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="off"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="country_code" value="{{ __('Código de País') }}" />
                <x-jet-input id="country_code" class="block mt-1 w-full" type="text" name="country_code" :value="old('country_code')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone_number" value="{{ __('Número de Teléfono') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="phone" name="phone_number" :value="old('phone_number')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Dirección') }}" />
                <x-jet-input type="text" class="block mt-1 w-full" name="address" id="address" class="form-control" :value="old('address')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Finalizar Registro') }}
                </x-jet-button>
            </div>

            {{-- javascript code --}}
            <script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
                <script>
                    $(document).ready(function() {
                    $("#lat_area").addClass("d-none");
                    $("#long_area").addClass("d-none");
                    });
                </script>
                <script>
                    google.maps.event.addDomListener(window, 'load', initialize);
                    function initialize() {
                        var input = document.getElementById('address');
                        var address = new google.maps.places.Autocomplete(input);
                        address.addListener('place_changed', function() {
                            var place = address.getPlace();
                            $('#latitude').val(place.geometry['location'].lat());
                            $('#longitude').val(place.geometry['location'].lng());
                            // --------- show lat and long ---------------
                            $("#lat_area").removeClass("d-none");
                            $("#long_area").removeClass("d-none");
                            });
                    }
            </script>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
