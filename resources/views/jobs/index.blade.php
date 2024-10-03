<x-layout>
    <div class="space-y-10">

    @if (session()->has('success'))
    <div class="alert alert-success" id="message_id" style="color:white; background-color:green; padding:20px; margin:0 auto;">
        {{ session('success') }}
    </div>

    @endif


        <section class="text-center pt-6">
        <img style="max-width:30%; margin:0 auto;" src=" {{ Vite::asset('resources/images/raindance-logo-white.png') }} " alt="">
            <x-panel>
                <h1 class="font-bold text-4xl  p-5"> Welcome to Raindance Talent Network!</h1>
                <div class="px-5">
                    <p class="p-5 text-lg mt-3 text-center w-50"> We connect the Raindance community and make everything possible with a place where they can find and create contacts, connections and collaborations worldwide!
                        What are you waiting for? Start browsing and posting refreshing publications for all kind of Crews, Projects, Jobs and Talents.
                    </p>

                    <a href="/register">
                    <x-btn-1>Start now!</x-btn-1>
                    </a>

                    <a href="/about">
                    <x-btn-2>Learn More</x-btn-2> 
                    </a>

                </div>
                <br>
                <div style=" width:60vw; height:50vh; margin:0 auto; background-image: url('https://raindance.ac.uk/wp-content/uploads/2023/04/2023-04-13-4.png');
                            /* background-attachment: fixed; */
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;">

                </div>
                
            </x-panel>
        </section class="pt-6">

        <section>
            <style>
                #tt {
                    transition:.3s;
                }
                #tt:hover {
                    transform: scale(1.05);
                    transition: .3s;
                }
            </style>

            <hr class="mb-5">

            <x-page-heading> CATEGORIES </x-page-heading>

            <x-panel>
            <div class="grid lg:grid-cols-2 gap-4 mt-8">
                
                <div> 
                    <a href="/crew">
                    
                    <img id="tt" src="https://cecinematograficos.edu.mx/assets/img/raindance/rd-crew-img-edit.png"  alt="">
                    </a>
                    
                </div>
                <div>
                    <a href="/talent">
                    
                    <img id="tt" src="https://cecinematograficos.edu.mx/assets/img/raindance/rd-talent-img-edit.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="/projects">
                   
                    <img id="tt" src="https://cecinematograficos.edu.mx/assets/img/raindance/rd-projects-img-edit.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="/jobs">
                   
                    <img id="tt" src="https://cecinematograficos.edu.mx/assets/img/raindance/rd-jobs-img-edit.png" alt="">
                    </a>
                </div>
            </div>
            </x-panel>

        </section>
        
        <section id="search">
          <x-panel>
            <x-page-heading> Searching for something specific?</x-page-heading>
                
            <div>
                <x-forms.form action="/search" class="mt-6 max-w-3xl">

                    <div class="grid lg:grid-cols-[80%_20%] gap-4">
                        <div>
                        <x-forms.input name="q" placeholder="Creative Art Director..." :label="false" /> 
                        </div>
                        <div>
                        <button type="submit"> 
                            <x-carbon-search class="w-10 mt-3 p-3" style="display:block; background-color:red; border-radius:10px;"/>
                         </button>
                        </div>
                    </div>

                </x-forms.form>

            </div>
                <x-section-heading> TAGS </x-section-heading>

                <div class="mt-6 space-x-1">
                @foreach($tags as $tag)

                    <x-tag :$tag /> 

                @endforeach
                </div>

          </x-panel>
        </section>



        <section class="pt-10">
            <x-page-heading> LATEST POSTS </x-page-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">

                @foreach($jobs as $job)
                    <x-job-card :$job />
                @endforeach

            </div>

            <div>
            {{ $jobs->links() }}
            </div>



        </section>


        <section>
            <x-section-heading> All Posts </x-section-heading>
            <div class="mt-6 space-y-6">

                @foreach($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach

            </div>

            <div>
            {{ $jobs->links() }}
            </div>

        </section>


        <section>
            <x-section-heading> NEWS </x-section-heading>
            <div class="mt-6 mb-5 space-y-6" id="newpanel">
                <x-panel>
                    <x-page-heading-2> A test new panel</x-page-heading-2>
                    <x-image-test :width="400"/>
                    <p class="p-5 text-left"> This is a new testing panel, we are looking at it to see if it would be viable to showcase specific information,
                         news or other kind of content apart from the conventional
                        posts that the app supports already. Woooooh!! Fireeeeee! 
                        <br>
                        <br>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                         in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                         sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <x-btn-1> Learn more > </x-btn-1>
                </x-panel>
            </div>
        </section>


        <section>

        <x-page-heading>FAQs</x-page-heading>

        <x-faqs/>

            <div>
                <a href="/">
                <x-btn-2> Scroll Up <x-carbon-arrow-up class="w-10"/> </x-btn-2>
                </a>
            </div>

        </section>

    </div>





</x-layout>