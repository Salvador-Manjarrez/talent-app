@props(['job'])


<x-panel class="flex flex-col text-center">

                <div>
                @if($job->img)
                    <img src="{{ asset('storage/' . $job->img) }}" alt="Job Image" class="rounded-xl d-block flex align-items-center p-5" width="600" style="min-height:340px;">
                    @else
                    <x-image-test :width="600"/> 
                    @endif
                </div>

                <div class="py-5">
                    <h3 class="group-hover:text-red-600 text-xl font-bold transition-colors duration-300">
                        <a href=" /jobs/details/{{ $job['id'] }} " target="_blank">
                        {{ strtoupper($job->title) }}
                        </a>
                    </h3>

                    <h4 class="text-red-500 text-xl font-bold">
                         @switch($job->type)
                            @case('Job')
                            <i class="fa-solid fa-briefcase fa-lg m-5">  </i>
                                @break
                        
                            @case('Talent')
                            <i class="fa-regular fa-star fa-lg m-5">  </i> 
                                @break
                        
                            @case('Crew')
                            <i class="fa-solid fa-screwdriver-wrench fa-lg m-5">  </i> 
                                @break
                        
                            @case('Project')
                            <i class="fa-solid fa-list-check fa-lg m-5">  </i> 
                                @break
                        
                            @endswitch

                         {{ $job->type }}

                     </h4>
                     @if($job->status == 'look')
                    <p class="text-md mt-4"> <i class="fa-solid fa-person-circle-question fa-xl m-5"> </i> Looking for </p>
                    @elseif($job->status == 'offer')
                    <p class="text-md mt-4"> <i class="fa-solid fa-hand-holding-heart fa-xl m-5"> </i> Presenting </p>
                    @endif
                    <!-- <p class="text-md mt-4"> <i class="fa-solid fa-location-dot fa-xl m-5"> </i> {{ $job->location }} </p> -->

                    <div class="mob-hidden">

                        @foreach($job->tags as $tag)
                            <x-tag :$tag size="small" />
                        @endforeach
                       
                    </div>
                    
                    <a href="/jobs/details/{{ $job['id'] }}">
                    <x-btn-1> SEE MORE ></x-btn-1>
                    </a>
                    
                    
                </div>

                <div class="flex justify-between items-center mt-auto">


                    <x-employer-logo :employer="$job->employer" :width="92"/>
                        by: {{ $job->employer->name }} 

                    
    </div>

</x-panel>
