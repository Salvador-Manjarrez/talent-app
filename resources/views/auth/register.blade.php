<x-layout>

    <x-page-heading> Create Account </x-page-heading> 
    <hr>
    
    <x-page-heading-2> Personal Information </x-page-heading-2> 
        <p class="text-center font-xl"> First we need to know you! The email and password will be your credentials to log in.

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data"> 

       <x-forms.input label="Name" name="name" placeholder="What's your name?" />
       <x-forms.input label="Email" name="email" type="email" />
       <x-forms.input label="Password" name="password" type="password"/>
       <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

       <x-forms.divider/>

       <x-page-heading-2> Profile Information </x-page-heading-2> 

       <p class="p-3"> Your profile information will appear in all your posts.</p>
       <x-forms.input label="Profile Name" name="employer" placeholder="eg. Raindance Film School" />
       <x-forms.input label="Profile Picture (Only .PNG, .JPG or .WEBP)" name="logo" type="file" />

       
       <x-forms.button> Create Account </x-forms.button>

    </x-forms.form> 

</x-layout>