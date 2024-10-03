<x-layout>
    <x-page-heading> New Post </x-page-heading>
    <hr>
    
    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">

        <x-forms.input label="Title" name="title" placeholder="Actress"/>
        <x-forms.input label="Description" name="description" placeholder="Your description here..."/>
        <x-forms.input label="Salary" name="salary" placeholder="$50,000"/>

        <x-forms.select label="Location" name="location">
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

        <x-forms.input label="Post Image (For now just type the letter 'x', this will be implemented in the following wokrdays)" name="img" placeholder="..."/> 
       <!--  <x-forms.input label="Post Image (Only .PNG, .JPG or .WEBP)" name="img" type="file" /> -->

        <x-forms.select label="Type (What are you?)" name="type">
            <option> Project</option>
            <option> Crew</option>
            <option> Talent</option>
            <option> Job</option>
        </x-forms.select>

        
        <x-forms.input label="Website URL" name="url" placeholder="https://acme.com/careers/actress"/>
        <x-forms.checkbox label="Feature" name="featured" />
        <x-forms.input label="Tags (comma separated)" name="tags    " placeholder="Filmmaking, Acting, Music"/>
        <x-forms.button> Publish </x-forms.button> 

    </x-forms.form>

</x-layout>