@props(['job'])


<x-panel class="flex flex-col text-center">

    <div class="self-start text-sm"> {{ $job->employer->name }} </div>
                <div class="py-8">
                    <h3 class="group-hover:text-red-600 text-xl font-bold transition-colors duration-300">
                        <a href=" /jobs/details/{{ $job['id'] }} " target="_blank">
                        {{ $job->title }}
                        </a>
                    </h3>

                    <h4 class="text-red-500 text-xl font-bold"> {{ $job->type }} </h4>
                    <p class="text-md mt-4"> {{ $job->salary }} </p>
                    <p class="text-md mt-4"> {{ $job->location }} </p>
                    <a href="/jobs/details/{{ $job['id'] }}">
                    <x-btn-1>+ DETAILS</x-btn-1>
                    </a>
                    
                    
                </div>

                <div class="flex justify-between items-center mt-auto">
                    <div>

                        @foreach($job->tags as $tag)
                            <x-tag :$tag size="small" />
                        @endforeach
                       
                    </div>

                    <x-employer-logo :employer="$job->employer" :width="92"/>
                    
    </div>

</x-panel>
