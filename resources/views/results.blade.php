<x-layout>
    <x-page-heading> Results </x-page-heading>
    <hr>
 

        <div class="mt-6 space-y-6">

            @foreach($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
    
        </div>

        <div class="mt-10">

            <a href="/#search">
                <x-btn-1> Make another search > </x-btn-1>
            </a>

        </div>


</x-layout>
