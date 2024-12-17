<x-layout>
    <x-page-heading> New Post - TALENT <i class="fa-regular fa-star fa-xl m-5">  </i>    </x-page-heading> 
    <hr>

    
    <x-forms.form method="POST" action="/jobs/create-t" enctype="multipart/form-data">
        <x-panel>
        <x-forms.select label="Please select if you are looking for / or offering this item *" name="status" placeholder="Looking for? or Offering?">
                        <option selected disabled> Select </option>
                        <option value="look"> I am looking for</option>
                        <option value="offer"> I am offering </option>
            </x-forms.select>
            <x-forms.input label="Title" name="title" placeholder="Talent Title" maxlength="50"/>
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
        </x-panel>

        <x-panel>
             <!-- START of 2 columns div -->
            <div class="grid lg:grid-cols-2 gap-x-4 gap-y-8">
              <!-- First Column -->
                <div>  
                <x-forms.input label="Link to work" name="url" placeholder="https://acme.com/careers/actress"/>
                <x-forms.input label="Salary" name="salary" placeholder="$50,000"/>
                <x-forms.input label="Eye Color" name="t_eye_color" placeholder=" e.g. Brown"/>
                <x-forms.input label="Hair Length" name="t_hair_length" placeholder="e.g. Long"/>
                <x-forms.input label="Height" name="t_height" placeholder="e.g. 180 cm"/>
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
                    <x-forms.input label="Image - (Type any text for now)" name="img" placeholder="..."/> 
                    <x-forms.input label="Hair Color" name="t_hair_color" placeholder="e.g. Black"/> 
                    <x-forms.input label="Weight" name="t_weight" placeholder="e.g. 100 Kg"/> 
                    <x-forms.input label="Nationality" name="nationality" placeholder="e.g. Mexican"/> 
                </div>          
            </div>
             <!-- END of 2 columns div -->

            <x-forms.input label="Appearence" name="t_appearance" placeholder="e.g. Tall, Tanned and Handsome"/> 
            <x-forms.input label="Contact" name="contact" placeholder="diana@contact.com"/>
            <x-forms.input label="Age Play Range" name="t_age_range" placeholder="e.g. From 20 to 30" />
            <x-forms.input label="Instagram URL" name="insta" placeholder="https://www.instagram.com/yourusername/"/>
            <x-forms.input label="Facebook URL" name="fb" placeholder="https://www.facebook.com/yourusername/"/>

            <x-forms.select name="type" label="" hidden>
                <option selected> Talent</option>
            </x-forms.select>

            <x-forms.checkbox label="Feature" name="featured" />
            <x-forms.input label="Tags (comma separated)" name="tags    " placeholder="Filmmaking, Acting, Music"/>

            <div id="checbox-field" class="p-5">
            {{ $error = $errors->first() }}
                @if ($error)
                    <p class="text-sm text-red-500 mt-1">{{ $error }}</p>
                @endif

                <h2 class="font-bold">Type of talent *</h2>
                <p>Choose all that apply.</p>

                <label>
                <input type="checkbox" name="t_type[]" value="Actor"/>
                Actor
                </label><br>
                <label>
                <input type="checkbox" name="t_type[]" value="Dancer"/>
                Dancer
                </label><br>
                <label>
                <input type="checkbox" name="t_type[]" value="Voice Actor
                "/>
                Voice Actor
                </label><br>

            </div>
            <x-forms.button> Publish </x-forms.button> 
        </x-panel>

    </x-forms.form>

</x-layout>
