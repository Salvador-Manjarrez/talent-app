@props(['job'])

<x-panel class="flex gap-x-6">

                  <div>
                    <x-employer-logo :employer="$job->employer"/>

                  </div>

                  <div class="flex-1 flex flex-col">
                        <a href="#" class="self-start text-sm text-gray-400"> {{ $job->employer->name }} </a>

                        
                            <h3 class="font-bold text-xl mt-3 group-hover:text-red-600 transition-colors duration-300">
                                    <a href=" /jobs/details/{{ $job['id'] }}" target="_blank">
                                    {{ $job->title }}
                                    </a>
                                </h3>

                            <p class="text-sm text-gray-400 mt-auto"> {{ $job->salary }} </p>
                            <p class="text-sm text-gray-400 mt-auto"> {{ $job->location }} </p>

                            <a href="/jobs/details/{{ $job['id'] }}">
                            <x-btn-1> + DETAILS </x-btn-1>
                            </a>

                    </div>

                    <div>

                        @foreach($job->tags as $tag)
                            <x-tag :$tag />
                        @endforeach

                    </div>
</x-panel>