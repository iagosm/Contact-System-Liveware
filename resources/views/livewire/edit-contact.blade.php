<div class="p-5 card">
    <form wire:submit="editContact">
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" wire:model="name">
            @error('name') 
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" wire:model="email">
            @error('email') 
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" wire:model="phone">
            @error('phone') 
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-end">
            <button class="px-5 btn btn-secondary">Save</button>
        </div>
        @if($error)
            <div class="mt-3 text-center alert alert-danger"
                x-data="{ show: true }"
                x-show="show"
                x-init="setTimeout(() => show = false, 2000)"
            >
                {{ $error }}
            </div>
        @endif
        @if($success)
            <div class="mt-3 text-center alert alert-success"
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 2000)"
            >
                {{ $success }}
            </div>
        @endif
    </form>
</div>