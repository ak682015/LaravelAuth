@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>{{ $questionnaire->title }}</h1>

              <form action="/surveys/{{ $questionnaire->id }}-{{ Str::slug($questionnaire->title) }}" method="POST">
                @csrf

                @foreach($questionnaire->questions as $key => $question)
                
                    <div class="card mt-4">
                        <div class="card-header"><strong>{{ $key + 1 }} .   </strong>{{ $question->question }}</div>

                        <div class="card-body">

                            @error('responses.' . $key . '.answer_id')
                                <small class="text-danger"> {{ $message }} </small>
                            @enderror


                            <ul class="list-group">    
                                @foreach($question->answers as $answer)

                                <label for="answer{{ $answer->id }}">
                                
                                    <li class="list-group-item">
                                        <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" 
                                        {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : ''}}
                                        class="mr-2" value="{{ $answer->id }}">
                                            {{ $answer->answer }}

                                        <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                    </li>

                                </label>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                @endforeach

                   




            <div class="card">
                <div class="card-header">Your Info</div>

                <div class="card-body">
                
                    @csrf

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input name="survey[name]" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Name">
                        <small id="nameHelp" class="form-text text-muted">Your Name</small>

                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                        
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input name="survey[email]" type="email" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Email">
                        <small id="emailHelp" class="form-text text-muted">Email Please</small>
                        
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>


                    <div>
                        <button class="btn btn-dark" type="submit" >Submit Button</button>
                    </div>
                </div>
           
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
