@section('content')
    <p>
        This livewire view is loaded from module: {{ $module }}
    </p>
    <p>
        But no phrase "Hello, World!" from the module's Resources/livewire/header/frontend shown at the top, called in layouts/master.
    </p>
    <p>
        And a link component from the module's Resources/views/components directory does not show up and generate error if uncomment as well.
        {{--        <x-link>A link component</x-link>--}}
    </p>
@endsection
