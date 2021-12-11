{{__('helper.welcome')}}
@lang('helper.welcome')
{!! Form::open(['url'=>'admin/books/create']) !!}
{!! Form::label('name', __('form.name')) !!}
{!! Form::select('size', ['L' => 'Large', 'S' => 'Small']) !!}
{!! Form::date('date') !!}
{!! Form::submit('Tıkla') !!}
{!! Form::close() !!}
