<x-layout>
    <x-page-heading> ALL PROJECTS </x-page-heading>
    <hr>

    <div class="mt-10">
            <a href="/">
                <x-btn-1>
                    Make another search >
                </x-btn-1>
            </a>
        </div>


        <div class="mt-6 space-y-6">

            @foreach($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
    
        </div>



</x-layout>
