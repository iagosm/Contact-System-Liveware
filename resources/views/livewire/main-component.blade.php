<div>
    <div class="my-5 text-center">
        <img src="{{asset('assets/images/logo.png')}}" alt="Logo" width="128px">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @livewire('form-contact')
            </div>
            <div class="col-md-8">
                @livewire('contacts')
            </div>
        </div>
    </div>
</div>
