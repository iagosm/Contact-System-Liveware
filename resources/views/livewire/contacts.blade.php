<div class="p-5 card">
    <h3>Contacts</h3>
    <hr>
    @if($contacts->count() == 0)
    <div class="opacity-50">No contacts Found</div>
    @else
        @foreach ($contacts as $contact)
            <div class="p-3 mb-1 bg-dark card">
                <div class="row">
                    <div class="col">Name: {{$contact->name}}</div>
                    <div class="col">Email: {{$contact->email}}</div>
                    <div class="col">Phone: {{$contact->phone}}</div>
                    <div class="col">Phone: {{$contact->phone}}</div>
                    <div class="col">
                        <a href="{{route('contacts.edit', ['id' => $contact->id])}}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{ route('contacts.delete', ['id' => $contact->id ])}}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

