@extends('auth.app')

@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="row justify-content-between border-bottom border-gray pb-2 px-3 mb-0">
            <h6 class="">Oferty pracy</h6>
            <a href="{{ route('offer.create') }}" class="btn btn-primary">Dodaj nową ofertę</a>
        </div>
        <ul id="sortable">
        @foreach($offers -> sortBy('priority') as $offer)
        <li class="text-muted p-3 row" data-id="{{$offer -> id}}">
            <div class="col-md-12 ">
                <div class="row justify-content-between">
                    <h3 class="d-block text-gray-dark">{{ $offer -> title }}</h3>
                    <div>
                        <a href="{{ route('offer.edit',$offer) }}" class="btn btn-primary">Edytuj ofertę</a>
                        <form method="post" action="{{ route('offer.destroy',$offer) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Usuń ofertę</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="pb-3 mb-0 border-bottom border-gray col-md-12">
                <p>{{ $offer -> description }}</p>
                <p>{{ $offer -> range }}</p>
                <p>{{ $offer -> offer }}</p>
                <p>{{ $offer -> requirements }}</p>
                <a href="{{ route('offer.show',$offer) }}">CVs</a>
            </div>
        </li>
        @endforeach
        </ul>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#sortable" ).sortable({
            revert: true,
            stop:function( event, ui ) {
                var priority = [];
                $('#sortable li').each(function(key){
                    priority.push({ priority: key+1, id: $(this).attr('data-id')});
                });
                $.post('{{route('offer.update.priority')}}',{
                    _token : '{{ csrf_token() }}',
                    priority:  priority
                }).done(function(done) {
                    console.log(done);
                })
                .fail(function(error) {
                    console.log(error);
                })
            }
        });
        $( "ul, li" ).disableSelection();
    } );
</script>
@endsection