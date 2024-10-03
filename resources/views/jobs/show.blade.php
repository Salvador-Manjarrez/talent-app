<x-layout>

    <x-page-heading> Post Details </x-page-heading>


  <x-panel>

        <div class="grid lg:grid-cols-2 gap-4">
                <div>  
                    <x-image-test :width="600"/>
                </div>
                <!-- ... -->
                <div>

                        <div class="p-5">

                        <x-page-heading-2> {{ $job->title }} </x-page-heading-2> 

                            @foreach($job->tags as $tag)
                                                <x-tag :$tag />
                            @endforeach
                            <br>

                            <br>
                            <x-page-heading-3> Type: </x-page-heading-3>
                            <p class="text-lg text-lef"> {{ $job->type }} </p>
                            <br>

                            @auth

                            <x-page-heading-3> Description: </x-page-heading-3>
                            <p class="text-lg text-lef"> {{ $job->description }} </p>
                            <br>

                            <x-carbon-location class="w-10 mt-3"/>
                            <p class="text-lg text-lef"> {{ $job->location }} </p>
                            <br>

                            <!-- <x-page-heading-3> Salary: </x-page-heading-3>
                            <p class="text-lg text-lef"> {{ $job->salary }} </p>
                            <br> -->


                            <br>
                            <br>

                            <a href="mailto:{{ $job->employer->user->email }}?subject={{ $job->title }}"> 
                            <x-btn-1> SEND EMAIL > </x-btn-1>
                            </a>

                            <x-carbon-logo-instagram style="display:inline" class="w-10"/>
                            <x-carbon-logo-facebook style="display:inline" class="w-10" />

                            @endauth

                            @guest
                            <x-page-heading-3> <a href="/register"><u>Sign Up</u></a> or <a href="/login"><u>Log In</u></a> to see more about this post.</x-page-heading-3>

                            @endguest

                        </div>
                </div>
        </div>

  </x-panel>

 @auth
  <x-panel>
    <x-employer-logo :employer="$job->employer" :width="92"/>

    <h1 class="mt-3">Posted by:</h1>

    <x-page-heading-3>
         {{ $job->employer->name }} 
     </x-page-heading-3>
     <br>
     <p> Created: <strong>  {{ $job->created_at }} </strong> </p>

     <a href=" {{ $job->url }} " target="_blank"> 
        <x-btn-2> See Website ></x-btn-2>
     </a>

  </x-panel>
  @endauth
    

</x-layout>