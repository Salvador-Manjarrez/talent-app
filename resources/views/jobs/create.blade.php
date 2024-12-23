<x-layout>
    <x-page-heading> New Post - JOB <i class="fa-solid fa-briefcase fa-xl m-5"></i> </x-page-heading>
    <hr>
    
    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">
    <p class=" text-center"><i class="fa-solid fa-circle-exclamation fa-xl m-5"> </i> Labels marked with <strong> *  are required</strong></p>

        <x-forms.select label="Are you looking for / or offering this item? *" name="status" placeholder="Looking for? or Offering?">
                        <option selected disabled> Select </option>
                        <option value="look"> I am looking for</option>
                        <option value="offer"> I am offering </option>
        </x-forms.select>
        <x-forms.input label="Title *" name="title" placeholder="Job title" maxlength="50"/>
        <x-forms.input label="Description *" name="description" placeholder="Your description..." maxlength="500" />
        <x-forms.input label="Salary *" name="salary" placeholder="$1,000" maxlength="15" />

        <x-forms.select label="Location *" name="location">
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

        <x-forms.input label="Image (Recommended)" name="img" id="img" type="file" placeholder="..."/> 
       <!--  <x-forms.input label="Post Image (Only .PNG, .JPG or .WEBP)" name="img" type="file" /> -->

        <x-forms.select label="" name="type" hidden>
            <option selected> Job</option>
        </x-forms.select>

        
        <x-forms.input label="Link to work (Recommended, must be an active URL)" name="url" placeholder="https://yoursite.com/careers/actress"/>
        <x-forms.input label="Instagram (Recommended)" name="insta" placeholder="https://www.instagram.com/yourusername/"/>
        <x-forms.input label="Facebook (Recommended)" name="fb" placeholder="https://www.facebook.com/yourusername/"/>
        <x-forms.checkbox label="Feature" name="featured" />
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Filmmaking, Acting, Music" maxlength="50"/>
        <x-forms.button> Publish </x-forms.button> 

    </x-forms.form>

</x-layout>