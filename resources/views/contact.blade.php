<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    
    <h2>"Bersatu Kita Teguh, Bercerai Tak Kawin"</h2>
    <div class="contact_container" style="display: flex; justify-content: center; align-items: center; flex-direction: row;">
          <div class="image_holder">
            <img src="img/WhatsApp Image 2025-02-18 at 16.18.18_d227a221.jpg" alt="My Foto" width="300">
          </div>
         <div class="mycontact">
            <h3>My Contact Details</h3>
            <p>My Name is <strong>{{ $fullname }}</strong> but you can call me "Lim"</p>
            <div class="mycontact_details">
                <p>Email : {{ $email }}</p>
                <p>Instagram : {{ $instagram }}</p>
                <p>Github : {{ $github }}</p>
                <p>Linkedin : {{ $linkedin }}</p>
                <p>mobile phone : {{ $mobile }}</p>
            </div>
        </div>
    
    </div>
  </x-layout>