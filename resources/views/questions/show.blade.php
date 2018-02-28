@extends('questions/layout')

@section('content')
<section id="banner" class="banner-sm">
    <div class="container">
        <h1>Questions</h1>
    </div>
</section>

<section id="question">
    <div class="container">
        <div class="question-left">
            <div class="user-avatar">
                <img class="img-fluid"
                     src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
            </div>
            <div class="user-name">John Doe</div>
            <div class="user-stats">
                <div class="user-stat">
                    <span>3</span>
                    <label>responses</label>
                </div>
                <div class="user-stat">
                    <span>5</span>
                    <label>votes</label>
                </div>
            </div>

        </div>
        <div class="question-right">
            <h2>{{$question->title}}</h2>
            {{$question->text}}

        </div>
    </div>
</section>

<section id="answers">

    <div class="container">
    {{count($question->answers)}}
    @foreach($question->answers as $answer)

        <div class="answer">
            <div class="answer-left">
                <div class="user-avatar">
                    <img class="img-fluid"
                         src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                </div>
                <div class="user-name">John Doe</div>
                <div class="user-stats">
                    <div class="user-stat">
                        <span>3</span>
                        <label>responses</label>
                    </div>
                    <div class="user-stat">
                        <span>5</span>
                        <label>votes</label>
                    </div>
                </div>
            </div>
            <div class="answer-right">
              {{ $answer->text}}
            </div>
        </div>
    @endforeach
    </div>

    <div class="card-block">
        <h3>Answer this question</h3>
        @include('layouts.errors')


        {!! Form::open(['action' => 'AnswerController@store']) !!}
        {{Form::hidden('question_id', $question->id) }}


        <div class="form-row">
            <label>Text
            {{  Form::text('text')  }}
            </label>
        </div>
        <div class="form-row">
        {{ Form::submit('Place an answer!')}}
        </div>

    {!! Form::close() !!}




</section>
@endsection