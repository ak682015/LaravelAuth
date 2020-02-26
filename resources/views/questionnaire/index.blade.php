@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">All Questions</div>
                                
                @forelse ($questionnaire as $question)
                <li>{{ $question->title }}</li>
                @empty
                <p>No users</p>
                @endforelse

                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
