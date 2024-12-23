@props(['job'])

<x-panel class="flex gap-x-6">

                  <div>
                    @if($job->img)
                    <img src="{{ asset('storage/' . $job->img) }}" alt="Job Image" class="rounded-xl d-block flex align-items-center p-5" width="600">
                    @else
                    <x-image-test :width="600"/> 
                    @endif

                    <a href="#" class="self-start text-sm text-gray-400 p-3">by: {{ $job->employer->name }} </a>
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
                            <p class="text-sm text-gray-400 mt-auto"> <i class="fa-solid fa-location-dot fa-xl m-5"> </i> {{ $job->location }} </p>

                    </div>

                    <div class="mob-hidden">

                        <p class="p-3">{{ $job->description }} </p>

                        @foreach($job->tags as $tag)
                            <x-tag :$tag />
                        @endforeach

                    </div>
</x-panel>