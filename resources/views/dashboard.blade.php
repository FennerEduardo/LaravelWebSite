<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" w-10/12 mx-auto py-12">
        <h1 class="text-center font-bold text-4xl text-blue-900 my-5">Contacts</h1>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Id</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Company Name</th>
                    <th class="px-4 py-2">Phone Number</th>
                    <th class="px-4 py-2">Company Email</th>
                    <th class="px-4 py-2">Solution Type</th>
                    <th class="px-4 py-2">Referred</th>
                    <th class="px-4 py-2">Additional Comments</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr class="{{ $loop->odd ? 'bg-gray-200' : '' }}">
                        <td class="border px-4 py-2">{{ $contact->id }}</td>
                        <td class="border px-4 py-2">{{ $contact->name }}</td>
                        <td class="border px-4 py-2">{{ $contact->company_name }}</td>
                        <td class="border px-4 py-2">{{ $contact->phone_number }}</td>
                        <td class="border px-4 py-2">{{ $contact->company_email }}</td>
                        <td class="border px-4 py-2">{{ $contact->solutionType }}</td>
                        <td class="border px-4 py-2">{{ $contact->referred }}</td>
                        <td class="border px-4 py-2">{{ $contact->additional_comments }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $contacts->links() }}  <!-- This line adds the pagination links -->
        
    </div>
</x-app-layout>
