{{ Form::label('name', 'Название') }}<br>
{{ Form::text('name') }}<br>

@error('name')
    <p>{{ $message }}</p>
@enderror

{{ Form::label('body', 'Содержание') }}<br>
{{ Form::textarea('body') }}<br>

@error('body')
    <p>{{ $message }}</p>
@enderror
