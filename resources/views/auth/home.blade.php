@extends('auth.app')

@section('content')
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Oferty pracy
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="{{ route('cv.export.all') }}" class="btn-secondary btn">Eksportuj CV</a>
                <a href="{{ route('offer.create') }}" class="btn btn-primary">Dodaj nową ofertę</a>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="kt-widget5" id="sortable">
                @foreach($offers -> sortBy('priority') as $offer)
                <div class="kt-widget5__item" data-id="{{$offer -> id}}">
                    <div class="kt-widget5__content">
                        <div class="kt-widget5__section">
                            <a href="{{ route('offer.edit',$offer) }}" class="kt-widget5__title">
                                {{ $offer -> title }}
                            </a>
                            <p class="kt-widget5__desc">
                                {{--{!! $offer -> description !!}--}}
                            </p>
                            <div class="kt-widget5__info">
                                <span>Lokacja:</span>
                                <span class="kt-font-dark">@lang('pages.career.location.'.$offer -> location)</span>
                                <span>Start:</span>
                                <span class="kt-font-dark">{{$offer -> start_date}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget5__content">
                        <div class="kt-widget5__stats">
                            <span class="kt-widget5__number">{{ $offer -> cvs() -> count() }}</span>
                            <span class="kt-widget5__sales">CVs</span>
                        </div>
                        <div class="btn-group btn-group" role="group" aria-label="...">
                            <a href="{{ route('offer.edit',$offer) }}" class="btn-brand btn">Edytuj</a>
                            <a href="{{ route('cv.export',$offer) }}" class="btn-secondary btn">Eksportuj CV</a>
                            <button type="button" class="btn @if($offer -> active) btn-brand @else btn-secondary @endif activate" data-id="{{$offer -> id}}">@if($offer -> active) Aktywna @else Nieaktywna @endif</button>
                            <button type="button" class="btn btn-label-brand delete" data-id="{{$offer -> id}}">Usuń</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
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
                $('.kt-widget5__item').each(function(key){
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
    } );
    $('.activate').click(function(){
        var id = $(this).data('id');
        button =$(this);
        button.addClass('kt-spinner kt-spinner--right kt-spinner--dark disabled');
        $.post('{{route('offer.update.active')}}/'+id,{ _token : '{{ csrf_token() }}'})
            .done(function(){
                setTimeout(function(){
                    button.toggleClass('btn-brand').toggleClass('btn-secondary');
                    button.hasClass('btn-secondary')?button.text('Nieaktywna'):button.text('Aktywna');
                    button.removeClass('kt-spinner kt-spinner--right kt-spinner--dark disabled');
                },500)
            })
            .fail(function(e){
                console.log(e);
                swal.fire(
                    'Ooops!',
                    'Coś poszło nie tak!.',
                    'error'
                );
                setTimeout(function(){ button.removeClass('kt-spinner kt-spinner--right kt-spinner--lg kt-spinner--light disabled');},500)

            });


    });
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
                $.post('{{route('offer.destroy')}}/'+$(e.target).data('id'),{
                    _method:'delete',
                    _token: '{{ csrf_token() }}'
                }).done(function(){
                    $('.kt-widget5__item[data-id="'+ $(e.target).data('id') +'"]').remove();
                    swal.fire(
                        'Usunięto!',
                        'Oferta została usunięta.',
                        'success'
                    )
                }).fail(function(e){
                    console.log(e);
                    swal.fire(
                        'Ooops!',
                        'Coś poszło nie tak!.',
                        'error'
                    )
                });

                // result.dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
            } else if (result.dismiss === 'cancel') {
                swal.fire(
                    'Zrezygnowano',
                    'Twoja oferta jest bezpieczna :)',
                    'error'
                )
            }
        });
    });
</script>

@endsection