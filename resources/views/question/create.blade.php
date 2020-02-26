@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                        <input name="question[question]" value="{{ old('question.question') }}" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Question">
                            
                            <small id="emailHelp" class="form-text text-muted">Ask Questions.</small>

                            @error('question.question')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="ChoicesHelp" class="form-text text-muted">Give CHoices.</small>


                                    <div>
                                        <label for="answer1">Choice 1</label>
                                        <input name="answers[][answer]" value="{{ old('answer.0.answer') }}" type="text" class="form-control" id="answer1" aria-describedby="emailHelp" placeholder="ChoiceHelp">            
                                        
                                        @error('answer.0.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                            </fieldset>
                        </div>
                        

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="ChoicesHelp" class="form-text text-muted">Give CHoices.</small>


                                    <div>
                                        <label for="answer2">Choice 2</label>
                                        <input name="answers[][answer]" value="{{ old('answer.1.answer') }}" type="text" class="form-control" id="answer2" aria-describedby="emailHelp" placeholder="ChoiceHelp">            
                                        
                                        @error('answer.1.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="ChoicesHelp" class="form-text text-muted">Give CHoices.</small>


                                    <div>
                                        <label for="answer3">Choice 3</label>
                                        <input name="answers[][answer]"  value="{{ old('answer.2.answer') }}" type="text" class="form-control" id="answer3" aria-describedby="emailHelp" placeholder="ChoiceHelp">            
                                        
                                        @error('answer.2.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="ChoicesHelp" class="form-text text-muted">Give CHoices.</small>


                                    <div>
                                        <label for="answer4">Choice 4</label>
                                        <input name="answers[][answer]" value="{{ old('answer.3.answer') }}" type="text" class="form-control" id="answer4" aria-describedby="emailHelp" placeholder="ChoiceHelp">            
                                        
                                        @error('answer.3.answer')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Question</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
