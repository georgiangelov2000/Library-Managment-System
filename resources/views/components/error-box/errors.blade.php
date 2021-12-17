@if ($errors->any())
    <div class="alert alert-white pl-0 pb-0">
        <ul class="pl-3">
            @foreach ($errors->all() as $error)
                <li class="text-white bg-danger rounded mb-1 p-1" style="list-style: none;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
