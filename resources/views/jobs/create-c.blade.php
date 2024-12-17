<x-layout>
    <x-page-heading> New Post - CREW <i class="fa-solid fa-screwdriver-wrench fa-xl m-5"></i></x-page-heading>
    <hr>

    <x-forms.form method="POST" action="/jobs/create-c" enctype="multipart/form-data">
        <x-panel>
             <x-forms.select label="Please select if you are looking for / or offering this item *" name="status" placeholder="Looking for? or Offering?">
                        <option selected disabled> Select </option>
                        <option value="look"> I am looking for</option>
                        <option value="offer"> I am offering </option>
            </x-forms.select>
            <x-forms.input label="Title" name="title" placeholder="Crew Title" maxlength="50"/>
            <x-forms.input label="Description" name="description" placeholder="Your description here..."/>
            <x-forms.select label="Gender" name="gender" placeholder="Gender">
                        <option selected disabled> Gender </option>
                        <option> Male </option>
                        <option> Female </option>
                        <option> Non-binary </option>
                        <option> Trans-male </option>
                        <option> Trans-female </option>
                        <option> Any </option>

            </x-forms.select>
            <x-forms.input label="Image - (Type any text for now)" name="img" placeholder="..."/> 
        </x-panel>

        <x-panel>
             <!-- START of 2 columns div -->
            <div class="grid lg:grid-cols-2 gap-x-4 gap-y-8">
              <!-- First Column -->
                <div>  
                <x-forms.input label="Link to work" name="url" placeholder="https://acme.com/careers/actress"/>
                <x-forms.input label="Salary" name="salary" placeholder="$50,000"/>
                </div>
             <!-- Second Column -->
                <div>
                    <x-forms.select label="Location" name="location">
                        <option selected disabled> Location </option>
                        <option> London, United Kingdom</option>
                        <option> Guadalajara, México</option>
                        <option> Dubai, United Arab Emirates</option>
                        <option> Toronto, Canada</option>
                        <option> Vancouver, Canada</option>
                        <option> Montreal, Canada</option>
                        <option> Los Angeles, California</option>
                        <option>Berlin, Germany</option>
                        <option> Barcelona, Spain</option>
                        <option> Paris, France</option>
                        <option> Brussels, Belgium</option>
                        <option> New York, New York</option>
                    </x-forms.select>
                    <x-forms.input label="Nationality" name="nationality" placeholder="e.g. Mexican"/> 
                </div>          
            </div>
             <!-- END of 2 columns div -->

            <x-forms.input label="Contact" name="contact" placeholder="diana@contact.com"/>

            <x-forms.select name="type" label="" hidden>
                <option selected> Crew</option>
            </x-forms.select>

            <x-forms.checkbox label="Feature" name="featured" />
            <x-forms.input label="Tags (comma separated)" name="tags    " placeholder="Filmmaking, Acting, Music"/>
            <x-forms.input label="Instagram URL" name="insta" placeholder="https://www.instagram.com/yourusername/"/>
            <x-forms.input label="Facebook URL" name="fb" placeholder="https://www.facebook.com/yourusername/"/>

            <div id="checbox-field" class="p-5">
                {{ $error = $errors->first() }}
                @if ($error)
                    <p class="text-sm text-red-500 mt-1">{{ $error }}</p>
                @endif

                <h2 class="font-bold">* Type of crew:</h2>
                <p>Choose all that apply.</p>

                <label>
                <input type="checkbox" name="c_type[]" value="Director"/>
                Director
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Producer"/>
                Producer
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Writer"/>
                Writer
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Production Designer"/>
                Production Designer
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Cinematographer/ D.O.P"/>
                Cinematographer/ D.O.P
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Gaffer"/>
                Gaffer
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="A.D"/>
                A.D
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Make-up Artist & Hair"/>
                Make-up Artist & Hair
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Sound Recordist"/>
                Sound Recordist
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Editor"/>
                Editor
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Composer"/>
                Composer
                </label>
                <br>
                <label>
                <input type="checkbox" name="c_type[]" value="Other"/>
                Other
                </label>
                <br>

            </div>
            <x-forms.button> Publish </x-forms.button> 
        </x-panel>

    </x-forms.form>

</x-layout>
