<x-layout>

          @switch($job->type)
          @case('Job')
          <x-page-heading-2> <i class="fa-solid fa-briefcase fa-xl m-5"></i> JOB </x-page-heading-2>
              @break
      
          @case('Talent')
          <x-page-heading-2> <i class="fa-regular fa-star fa-xl m-5"></i> TALENT </x-page-heading-2>
              @break
    
          @case('Crew')
          <x-page-heading-2> <i class="fa-solid fa-screwdriver-wrench fa-xl m-5"></i> CREW </x-page-heading-2>
              @break
    
          @case('Project')
          <x-page-heading-2> <i class="fa-solid fa-list-check fa-xl m-5"></i> PROJECT </x-page-heading-2>
              @break
    
           @endswitch


  <x-panel>

        <div class="grid lg:grid-cols-2 gap-4">
                <div>  
                    <h1 class="font-bold text-left text-2xl mb-8 mt-6 ml-6 text-red-500" > {{ $job->title }} </h1 > 
                    <h2 class="ml-6"> <strong>This post is:</strong></h2>
                    @if($job->status == 'offer')
                          <x-page-heading-3> <i class="fa-solid fa-hand-holding-heart fa-xl m-5"></i> Presenting </x-page-heading-3>
                    @elseif($job->status == 'look')
                          <x-page-heading-3> <i class="fa-solid fa-person-circle-question fa-xl m-5"></i> Looking for </x-page-heading-3>
                    @endif

                    <!-- <x-image-test :width="600"/>  -->
                     @if($job->img)
                    <img src="{{ asset('storage/' . $job->img) }}" alt="Job Image" class="rounded-xl d-block flex align-items-center p-5" width="600">
                    @else
                    <x-image-test :width="600"/> 
                    @endif

                </div>
                
                
                <div>

                        <div class="p-5">

                      
                              @auth


                              <x-page-heading-3> Description: </x-page-heading-3>
                              <p class="text-lg text-left empty:hidden"> {{ $job->description }} </p>
                              <br>

                              <!-- TALENT SPECIFICS TYPES -->
                               @if($job->t_type)
                              <x-page-heading-3> <i class="fa-solid fa-star fa-xl m-5"></i> Talent  Types: </x-page-heading-3>
                               @foreach($job->t_type as $tt)
                                                  <x-label> {{ $tt }} </x-label>
                              @endforeach
                              <br>
                              @endif

                               @if($job->c_type)
                              <x-page-heading-3> <i class="fa-solid fa-wrench fa-xl m-5"></i> Crew  Types: </x-page-heading-3>
                               @foreach($job->c_type as $cc)
                                                  <x-label> {{ $cc }} </x-label>
                              @endforeach
                              <br> 
                              @endif

                              <!-- JOB SPECIFICS -->

                              @if($job->type == 'Job')
                              <div class="flex">
                                <i class="fa-solid fa-hand-holding-dollar fa-xl m-5">  </i>
                                <p class="ml-3"> Salary: <strong> {{ $job->salary }} </strong> </p>
                              </div>
                              <div class="flex">
                                <i class="fa-solid fa-location-dot fa-xl m-5">  </i>
                                <p class="ml-3"> Location: <strong> {{ $job->location }} </strong> </p>
                              </div>
                              @endif
                              
                              <!-- TAGS -->
                              <p> <strong> <i class="fa-solid fa-tags fa-xl m-5"></i> Tags: </strong> </p>
                              <br>
                              @foreach($job->tags as $tag)
                                                  <x-tag :$tag />
                              @endforeach
                              <br> 


                              <!-- CONTACT BUTTON -->
                              <a href="#show-contact"> <x-btn-1> <i class="fa-solid fa-circle-check fa-xl m-5">  </i> CONTACT > </x-btn-1> </a>
                          


                              @endauth

                              @guest
                              <x-page-heading-3> <a href="/register"><u>Sign Up</u></a> or <a href="/login"><u>Log In</u></a> to see more about this post.</x-page-heading-3>

                              @endguest

                        </div>
                </div>
        </div>

  </x-panel>

    <!-- ======= TALENT DETAILS ICONS ====== -->

    @auth

    @if($job->type == 'Talent')

    <x-panel>
        
      <h1  class="mb-5 p-3 font-bold text-2xl">- Talent Details - </h1>

      <div class="grid lg:grid-cols-2 gap-4 text-left"> 
                    <div> 
                          <div class="flex">
                            <i class="fa-solid fa-location-dot fa-xl m-5">  </i>
                            <p class="ml-3"> Location: <strong> {{ $job->location }} </strong> </p>
                          </div>
                          <div class="flex">
                            <i class="fa-solid fa-eye fa-xl m-5">  </i>
                            <p class="ml-3">Eye Color: <strong> {{ $job->t_eye_color }} </strong> </p>
                          </div>
                          <div class="flex">
                            <i class="fa-solid fa-face-smile fa-xl m-5">  </i>
                            <p class="ml-3"> Hair Color: <strong> {{ $job->t_hair_color }} </strong> </p>
                          </div>
                          <div class="flex">
                            <i class="fa-solid fa-face-smile fa-xl m-5">  </i>
                            <p class="ml-3"> Hair Length: <strong> {{ $job->t_hair_length }} </strong> </p>
                          </div>
                    </div>

                    <div>
                        <div class="flex">
                          <i class="fa-solid fa-weight-scale fa-xl m-5">  </i>
                          <p class="ml-3"> Weight: <strong> {{ $job->t_weight }} </strong> </p>
                        </div>
                        <div class="flex">
                          <i class="fa-solid fa-ruler-vertical fa-xl m-5">  </i>
                          <p class="ml-3"> Height: <strong> {{ $job->t_height }} </strong> </p>
                        </div>
                        <div class="flex">
                          <i class="fa-solid fa-arrow-up-wide-short fa-xl m-5">  </i>
                          <p class="ml-3"> Play Age Range: <strong> {{ $job->t_age_range }} </strong> </p>
                        </div>
                        <div class="flex">
                            <i class="fa-solid fa-genderless fa-xl m-5">  </i>
                            <p class="ml-3"> Gender: <strong> {{ $job->gender }} </strong> </p> 
                        </div>
                    </div>
          </div>

          
          <p style="text-wrap:wrap; overflow-wrap: break-word;">
              <i class="fa-solid fa-face-smile fa-xl m-5"> </i> 
                <strong> Appearance: </strong> <br> {{ $job->t_appearance }} 
          </p>

          

      </x-panel>

      @elseif($job->type !== 'Talent')
      @endif

  <!-- ====== "POSTED BY" CARD ========= -->


  <x-panel>
    <div id="show-contact"></div>
    <h1  class="mb-5 font-bold text-2xl"> <i class="fa-solid fa-circle-user fa-xl m-5">  </i>   Contact </h1>
    <x-employer-logo :employer="$job->employer" :width="92"/>

    <h1 class="mt-3">by:</h1>

    <x-page-heading-3>
         {{ $job->employer->name }} 
     </x-page-heading-3>
     <br>
     <p> Created at: <strong>  {{ $job->created_at }} </strong> </p>

     <a href=" {{ $job->url }} " target="_blank"> 
        <x-btn-2> <i class="fa-solid fa-link fa-xl m-5">  </i> Link to work ></x-btn-2>
     </a>


     <a href="mailto:{{ $job->employer->user->email }}?subject={{ $job->title }}"> 
                              <x-btn-1> <i class="fa-solid fa-envelope fa-xl m-5">  </i> SEND EMAIL > </x-btn-1>
                              </a>
                              @if($job->insta)
                              <a href=" {{ $job->insta }}" target="_blank"><x-carbon-logo-instagram style="display:inline" class="w-10"/></a>
                              @endif
                              @if($job->fb)
                              <a href=" {{ $job->fb }}" target="_blank"><x-carbon-logo-facebook style="display:inline" class="w-10"/></a>
                              @endif


  </x-panel>
  @endauth
    

</x-layout>