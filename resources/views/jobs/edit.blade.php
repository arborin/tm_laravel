<x-layout>
    <x-slot name='title'>Edit Job</x-slot>
    <form action="{{ route('jobs.update', $job->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')



        <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
            <h2 class="text-4xl text-center font-bold mb-4">
                Edit Job Listing
            </h2>

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Job Info
            </h2>

            <x-inputs.text id="title" :value="old('title', $job->title)" label="Job Title" name='title'
                placeholder="Software engineere" />

            <x-inputs.text-area id='description' :value="old('description', $job->description)" label='Job Description' name='description'
                placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team..." />

            <x-inputs.text id="salary" type="number" name="salary" placeholder="90000" />

            <div class="mb-4">
                <label class="block text-gray-700" for="requirements">Requirements</label>
                <textarea id="requirements" name="requirements" class="w-full px-4 py-2 border rounded focus:outline-none"
                    placeholder="Bachelor's degree in Computer Science"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="benefits">Benefits</label>
                <textarea id="benefits" name="benefits" class="w-full px-4 py-2 border rounded focus:outline-none"
                    placeholder="Health insurance, 401k, paid time off"></textarea>
            </div>

            <x-inputs.text id="salary" label='Salary' type="text" name="salary" placeholder="90000" />
            <x-inputs.text id="tags" label='Tags (comma-separated)' type="text" name="tags"
                placeholder="tags" />

            <x-inputs.select-box id="job_type" name="job_type" :options="[
                'Full-Time' => 'Full-Time',
                'Part-Time' => 'Part-Time',
                'Contract' => 'Contract',
                'Temporary' => 'Temporary',
                'Internship' => 'Internship',
                'Volunteer' => 'Volunteer',
                'On-Call' => 'On-Call',
            ]" />

            {{-- <div class="mb-4">
                <label class="block text-gray-700" for="job_type">Job Type</label>
                <select id="job_type" name="job_type" class="w-full px-4 py-2 border rounded focus:outline-none">
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part-Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Temporary">Temporary</option>
                    <option value="Internship">Internship</option>
                    <option value="Volunteer">Volunteer</option>
                    <option value="On-Call">On-Call</option>
                </select>
            </div> --}}

            <div class="mb-4">
                <label class="block text-gray-700" for="remote">Remote</label>
                <select id="remote" name="remote" class="w-full px-4 py-2 border rounded focus:outline-none">
                    <option value="false">No</option>
                    <option value="true">Yes</option>
                </select>
            </div>



            <x-inputs.text id="address" label='Address' type="text" name="address" placeholder="123 Main St" />
            <x-inputs.text id="city" label='City' type="text" name="address" placeholder="Albany" />
            <x-inputs.text id="state" label='State' type="text" name="state" placeholder="NY" />
            <x-inputs.text id="zipcode" label='ZIP Code' type="text" name="zipcode" placeholder="12201" />


            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
                Company Info
            </h2>

            <x-inputs.text id="company_name" label='ZIP Code' type="text" name="company_name"
                placeholder="Company name" />

            <x-inputs.text id="company_description" label='Company Description' type="text"
                name="company_description" placeholder="Company Description" />

            <x-inputs.text id="company_website" label='Company Website' type="text" name="company_website"
                placeholder="Company Website" />

            <x-inputs.text id="contact_phone" label='Contact Phone' type="text" name="contact_phone"
                placeholder="Contact Phone" />

            <x-inputs.text id="contact_email" label='Contact Email' type="text" name="contact_email"
                placeholder="Contact Email" />

            <x-inputs.file id="company_logo" label='Company Logo' name="company_logo" />

            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>

        </div>
    </form>
</x-layout>
