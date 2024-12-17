<x-layout>

@if (session()->has('success'))
    <div class="alert alert-success" id="message_id" style="color:white; background-color:green; padding:20px; margin:15px auto;">
        {{ session('success') }}
    </div>

    @endif

    <x-page-heading>Publish a post for everyone to see!</x-page-heading>
    <p  class=" text-center"><i class="fa-solid fa-circle-exclamation fa-xl m-5"> </i> <strong>NOTE:</strong> You are not limited to one post, and can always create more if needed.</p> <br>
    <p class="p-3 text-center">Please, select the type of post you want to publish: </p>


    <div class="text-center">
    <a href="/jobs/create-t">
                   <x-btn-1> <i class="fa-regular fa-star fa-xl m-5"></i> AN ART TALENT</x-btn-1>
                </a>
                <a href="/jobs/create-c">
                   <x-btn-1> <i class="fa-solid fa-screwdriver-wrench fa-xl m-5"></i> A CREW ROLE</x-btn-1>
                </a>
                <a href="/jobs/create-p">
                   <x-btn-1> <i class="fa-solid fa-list-check fa-xl m-5"></i>  A PROJECT</x-btn-1>
                </a>
                <a href="/jobs/create" >
                   <x-btn-1 > <i class="fa-solid fa-briefcase fa-xl m-5"></i> A JOB</x-btn-1>
                </a>
    </div>

</x-layout>