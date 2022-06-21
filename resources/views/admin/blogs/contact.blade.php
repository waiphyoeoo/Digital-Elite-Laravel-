<x-admin-layout>
    
    <h3 class="text-center">Contact Form</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Ph number</th>
                <th>Message</th>
                <th>Contact Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($contacts as $contact)
                    <tr>
                        <th>{{ $contact->name }}</th>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->ph_number }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->created_at->format("F j,Y,g:i a") }}</td>
                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
    {{ $contacts->links() }}

</x-admin-layout>