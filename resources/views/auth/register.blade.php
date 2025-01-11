<x-layout>

    <x-page-heading> Create Account </x-page-heading> 
    <hr>
    <x-page-heading-2> <i class="fa-solid fa-file-lines fa-xl m-5"></i> Account Information </x-page-heading-2> 
        <p class="text-center font-xl"> First we need to know you! <strong>The email and password will be your credentials to log in.</strong> </p>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data"> 

       <x-forms.input label="Name *" name="name" placeholder="Full Name" />
       <x-forms.input label="Email *" placeholder="e-mail" name="email" type="email" />
       <x-forms.input label="Password * (6 characters minimun) " placeholder="Password" name="password" type="password"/>
       <x-forms.input label="Confirm Password *" placeholder="Confirm Password" name="password_confirmation" type="password" />
       
              <i class="fa-solid fa-id-card fa-xl p-3">  </i>
        <x-forms.input label="School Credential Photo * (Visible, showing name and photo) (Only .png, .jpg or .webp)" name="card" type="file" />
        
       <x-forms.input label="(Optional) If you are a professional in the industry please share your IMDb Link" name="imdb" placeholder="IMDb Link"/>


       <x-forms.divider/>

       <x-page-heading-2> <i class="fa-solid fa-circle-user fa-xl m-5"></i> Profile Information </x-page-heading-2> 

       <p class="p-3"> <i class="fa-solid fa-circle-exclamation fa-xl m-5"> </i> This will appear in all your posts.</p>
       <x-forms.input label="Profile Name *" name="employer" placeholder="Your name or your organization's name" />
       
              <i class="fa-solid fa-id-badge fa-xl p-3">  </i>

       <x-forms.input label="Profile Photo * (Only .png, .jpg or .webp)" name="logo" type="file" />

       
       <x-forms.button> Create Account </x-forms.button>

    </x-forms.form> 

</x-layout>