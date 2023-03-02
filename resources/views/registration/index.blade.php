{{-- Extend the name of the layout/ more like including --}}
@extends('layouts.admin')

{{-- We have to wrap out content into the section contect --}}
{{-- NOTE: -> The 'content' param is/must be the param 
    filled in the @yield option in the app.blade.php file 
--}}
@section('content')

    <h1>Student Registration</h1>
    <hr>

  <div class="row rounded" style="border: 2px solid green;">
    <div class="card">
      <div class="card-body">

        {!! Form::open(['route'=>'registration.store']) !!}
          <div class="form-group">

            {!! Form::label('First Name', '', ['class'=>'text-dark']) !!}
            <div style="border: 1px solid green; height:auto">
              {!! Form::text('firstname', '', ['placeholder'=>'Enter first name', 'class'=>['form-control']]) !!}
            </div>

            {!! Form::label('Last Name', '', ['class'=>'text-dark']) !!}
            <div style="border: 1px solid black; height:auto">
              {!! Form::text('secondname', '', ['placeholder'=>'Enter second name', 'class'=>['form-control']]) !!}
            </div>

            {!! Form::label('Gender', '', ['class'=>'text-dark']) !!}
            <div style="border: 1px solid black; height:auto">
              {!! Form::text('gender', '', ['placeholder'=>'Select gender', 'class'=>['form-control']]) !!}
            </div>

            {!! Form::label('Class', '', ['class'=>'text-dark']) !!}
            <div style="border: 1px solid black; height:auto">
              {!! Form::text('class', '', ['placeholder'=>'Enter class', 'class'=>['form-control']]) !!}
            </div>

            {!! Form::label('Stream', '', ['class'=>'text-dark']) !!}
            <div style="border: 1px solid black; height:auto">
              {!! Form::text('stream', '', ['placeholder'=>'Enter stream', 'class'=>['form-control']]) !!}
            </div>

            {!! Form::label('Yution', '', ['class'=>'text-dark']) !!}
            <div style="border: 1px solid black; height:auto">
              {!! Form::text('tution', '', ['placeholder'=>'Enter amount paid', 'class'=>['form-control']]) !!}
            </div>

            
              {!! Form::submit('Submit', ['class'=>'btn btn-outline-success mt-4  float-start']) !!}

              {!! Form::submit('Cancel', ['class'=>'btn btn-primary mt-4  float-end']) !!}
            

          </div>
        {!! Form::close() !!}

      </div>
    </div>
  </div>

@endsection
