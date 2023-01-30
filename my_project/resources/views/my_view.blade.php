@extends("my_base")

@section("my_content")

    @if(isset($object_list))
        @foreach ($object_list as $object)
            {{ $object['id'] }}
            <br />
            {{ $object['first_name'] }}
            <br />
            {{ $object['last_name'] }}
            <br />
            {{ $object['description'] }}
            <hr />
        @endforeach
    @endif

@endsection
