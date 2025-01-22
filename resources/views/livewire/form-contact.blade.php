<div class="p-5 card">
    <form>
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone">
        </div>
        <div class="text-end">
            <button class="px-5 btn btn-secondary">Save</button>
        </div>
    </form>
</div>
