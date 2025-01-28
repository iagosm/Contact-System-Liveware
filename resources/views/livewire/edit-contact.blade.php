<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="p-5 card">
                <h3>Edit Contact</h3>
                <hr>
                <form wire:submit="updateContact">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" wire:model="name" value="{{$contact->name}}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" wire:model="email" value="{{$contact->email}}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" id="phone" wire:model="phone" value="{{$contact->phone}}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-end">
                        <a href="{{ route('home')}}" class="px-5 btn btn-secondary">Cancel</a>
                        <button class="px-5 btn btn-secondary">Update</button>
                    </div>
                </form>
                @if(session()->has('error'))
                    <div class="mt-3 text-center alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
