{{-- Renders request validation errors all at once --}}
@if ($errors->any())
    <div class="max-w-lg mx-auto mt-10">
        <div role="alert" class="max-w-lg">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Validation Error
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
    </div>
@endif
