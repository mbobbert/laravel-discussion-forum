@extends ('questions/layout')

@section('content')
<section id="banner">
    <div class="container">
        <h1>Create a question</h1>
    </div>
</section>

<section id="questions">
    <div class="container">
    {!! Form::open(['action' => 'QuestionController@store']) !!}

        <div clas="form-row">
            <label>Title
            {{  Form::text('title') }}
            </label>
        </div>
        <div clas="form-row">
            <label>Text
            {{  Form::text('text')  }}
            </label>
        </div>
        <div clas="form-row">
        {{ Form::submit('Place a question!')}}
        </div>

        {!! Form::close() !!}

    </div>
</section>
@endsection