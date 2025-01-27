<div>
    <div class="text-center">
        <p>Do you really want to delete this contact?</p>
        <p>Name: <br> <strong class="text-white">{{$contact->name}}</strong></p>
        <p>Email: <br> <strong class="text-white">{{$contact->email}}</strong></p>
        <p>Phone: <br> <strong class="text-white">{{$contact->phone}}</strong></p>
        <button wire:click="cancel" class="px-5 btn btn-primary">No</button>
        <button wire:click="delete" class="px-5 btn btn-danger">Yes</button>
    </div>
</div>