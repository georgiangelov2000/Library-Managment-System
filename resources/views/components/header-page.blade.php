<div>
    <div class="card-header-page card shadow-sm flex-row align-items-center pt-3 pb-3 justify-content-between">
        <div class="col-md-3 d-flex align-items-center">
                <a href="{{route($routeLink)}}" id="{{$buttonID}}" class="btn btn-danger btn-sm col-md-12" tabindex="0" aria-controls="deleteAllRecords" type="submit">
                    {{ $button }}
                </a>
                <p class="text-white mb-0 col-md-12" style="text-shadow:1px 1px black; font-size:1rem">
                    {{ $message !== '' ? $message : '' }}
                </p>
        </div>
        <div class="col-md-2">
            <h5 class="col-md-12 mb-0 text-end pr-0" style="color:white; text-shadow:1px 1px black;">
                 {{ $heading }} 
            </h5>
        </div>
    </div>
</div>