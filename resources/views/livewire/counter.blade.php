<div class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <button class="btn btn-primary" wire:click="decrement">-</button>
                        </div>
                        <h2>{{ $number }}</h2>
                        <div>   
                            <button class="btn btn-primary" wire:click="increment">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
