<x-layout>
    <div class="space-y-10">

    @if (session()->has('success'))
    <div class="alert alert-success" id="message_id" style="color:white; background-color:green; padding:20px; margin:15px auto;">
        {{ session('success') }}
    </div>

    @endif


        <section class="text-center pt-6">
        <img style="max-width:80%; margin:0 auto;" src="https://assets.unlayer.com/projects/237/1735855967921-logo_raindance_x_cec_v2_-removebg-preview.png" alt="">
            <x-panel>
                <h1 class="font-bold text-4xl  p-5"> Welcome to our Film School Talent Network!</h1>

                <div class="px-5">
                    <p class="p-5 text-lg mt-3 text-center w-50"> We connect the film and arts school's community with a place where they can find and create contacts, connections and collaborations worldwide!
                        Start browsing and posting publications for all kind of Crews, Projects, Jobs and Talents.
                    </p>

                    <a href="/register">
                    <x-btn-1>Start now!</x-btn-1>
                    </a>

                    <a href="/about">
                    <x-btn-2>Learn More!</x-btn-2> 
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

        @auth

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
            <div class="grid lg:grid-cols-2 gap-4 mt-8" id="categories">
                
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
            <x-page-heading> PRO POSTS </x-page-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6" id="latest-post">


                @foreach($jobs as $job)
                @if($job->employer->pro == "pro")
                    <x-job-card :$job />
                    @else
                    @endif  
                @endforeach

            </div>

            <div>
            {{ $jobs->links() }}
            </div>



        </section>


        <section>
        <x-page-heading> ALL POSTS </x-page-heading>
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
        <x-page-heading> NEWS </x-page-heading>
            <div class="mt-6 mb-5 space-y-6" id="newpanel">
                <x-panel>
                    <div class="grid lg:grid-cols-2 gap-4">
                        <div>  
                          <!--  <x-image-test :width="600"/> -->
                          <x-page-heading-3>Raindance at <br> the University Shortfilm Festival (F.C.U)</x-page-heading-3>
                            <img style="width:600px" src="https://assets.unlayer.com/projects/237/1734638808598-74_still%20(6).png" alt=" '74' from The Best of Raindance">
                        </div>
                    
                        <div>
                            <p class="p-5 text-left"> 
                                 (Guadalajara, Mexico - November 2024) <br>
                                The University Shortfilm Festival acts as a powerful catalyst for culture, opening a space for collaboration between the general community, students, artists and spectators, 
                                fostering a meeting through the screening of short films for appreciation and critical evaluation. At the same time,
                                tourism in the state is promoted by bringing national and international celebrities to participate in the festival,
                                providing the opportunity to increase a work network beyond territorial limits from a safe environment,
                                 becoming a platform for professional development.
                            </p>
                            <a href="https://www.fcu.mx/single-project" class="p-5" target="_blank"><x-btn-1> See more > </x-btn-1></a>
                        </div>

                        

                    </div>
                </x-panel>
            </div>
        </section>

        @endauth

        <section>

        <x-page-heading> FAQs </x-page-heading>

        <x-faqs/>

            <div>
                <a href="/">
                <x-btn-2> Scroll Up <x-carbon-arrow-up class="w-10"/> </x-btn-2>
                </a>
            </div>

        </section>

    </div>





</x-layout>