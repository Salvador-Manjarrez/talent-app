@props(['job'])

<x-panel class="flex gap-x-6">


                  <div>
                    @if($job->employer->pro == "pro")
                        <i class="fa-solid fa-certificate fa-2xl p-3" style="color:#bcdc04"> <p style="font-size:10px; color:black; margin-left:5px;"> PRO </p> </i> 
                    @else
                    @endif


                    @if($job->img)
                    <img src="{{ asset('storage/' . $job->img) }}" alt="Job Image" class="rounded-xl d-block flex-wrap align-items-center p-5" width="250">
                    @else
                    <x-image-test :width="250"/> 
                    @endif


                    <a href="/jobs/details/{{ $job['id'] }}">
                            <x-btn-1> SEE MORE > </x-btn-1>
                            </a>

                  </div>

                  <div class="flex-1 flex flex-col">
                        
                            <h3 class="font-bold text-xl mt-3 group-hover:text-red-600 transition-colors duration-300 p-3">
                                    <a href=" /jobs/details/{{ $job['id'] }}" target="_blank">
                                    {{ strtoupper($job->title) }}
                                    </a>
                                </h3>

                            <p class="p-3 mob-hidden">{{ $job->description }} </p>
                            <p class="text-sm text-gray-400 mt-auto"> <i class="fa-solid fa-location-dot fa-xl m-5"> </i> {{ $job->location }} </p>

                    </div>

                    <div class="mob-hidden">

                        

                        @foreach($job->tags as $tag)
                            <x-tag :$tag />
                        @endforeach

                        <a href=" /jobs/details/{{ $job['id'] }}" class="self-start text-sm text-gray-400 p-3">by: <strong>{{ $job->employer->name }}</strong> </a>

                    </div>


</x-panel>