@extends('auth.app')

@section('content')
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Użytkownicy
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('user.create') }}" class="btn btn-primary">Dodaj nowego użytkownika</a>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="kt-widget5" id="sortable">
                @foreach($users as $user)
                    <div class="kt-widget5__item" data-id="{{$user -> id}}">
                        <div class="kt-widget5__content">
                            <div class="kt-widget5__section">
                                <a href="{{ route('user.edit',$user) }}" class="kt-widget5__title">
                                    {{ $user -> name }}
                                </a>
                                <p class="kt-widget5__desc">
                                    {!! $user -> email !!}
                                </p>
                            </div>
                        </div>
                        <div class="kt-widget5__content">
                            <div class="btn-group btn-group" role="group" aria-label="...">
                                <a href="{{ route('user.edit',$user) }}" class="btn-brand btn">Edytuj</a>
                                <button type="button" class="btn btn-label-brand delete" data-id="{{$user -> id}}">Usuń</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.delete').click(function(e) {
            swal.fire({
                title: 'Jesteś pewny?',
                text: "Nie będziesz miał możliwości cofnięcia tej akcji!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Tak, jestem pewny!',
                cancelButtonText: 'Jednak nie!',
                reverseButtons: true
            }).then(function(result){
                if (result.value) {
                    $.post('{{route('user.destroy')}}/'+$(e.target).data('id'),{
                        _method:'delete',
                        _token: '{{ csrf_token() }}'
                    }).done(function(e){
                        if(e == 'ok') {
                            $('.kt-widget5__item[data-id="' + $(e.target).data('id') + '"]').remove();
                            swal.fire(
                                'Usunięto!',
                                'Użytkownik został usunięty.',
                                'success'
                            )
                        }else{
                            swal.fire(
                                'Nie usunięto!',
                                'Nie możesz usunąć sam siebie :)',
                                'success'
                            )
                        }
                    }).fail(function(e){
                        swal.fire(
                            'Ooops!',
                            'Coś poszło nie tak!.',
                            'error'
                        )
                    });
                } else if (result.dismiss === 'cancel') {
                    swal.fire(
                        'Zrezygnowano',
                        'Użytkownik jest bezpieczny :)',
                        'error'
                    )
                }
            });
        });
    </script>
@endsection