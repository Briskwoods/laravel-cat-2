@extends('inc.messages')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
            
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        @include('inc.messages')
        <div class="title m-b-md">
            Register Students
        </div>
        <div class="links">
            <a href="{{ route('home') }}">Home</a>
            <a href="/fees">Fees</a>
            <a href="/students">Search for Student Records</a>

        </div>
        <div class="flex-center position-ref full-height">
                       
                <div class="content">
                    {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}
                        <div class="form-group" >
                            <h2>{{Form::label('title','Students Registration Form')}}</h2><br>
                            {{Form::label('fname_title','First Name:')}}
                            {{Form::text('fname', '',['class'=>'form-control','placeholder'=>'First Name'])}}<br>
                            {{Form::label('lname_title','Last Name:')}} 
                            {{Form::text('lname', '',['class'=>'form-control','placeholder'=>'Last Name'])}}<br>
                            {{Form::label('email_title','E-Mail  :')}}
                            {{Form::email('email', '',['class'=>'form-control','placeholder'=>'E-Mail Address'])}}<br>
                            {{Form::label('sno_title','Student Number:')}}
                            {{Form::number('student_number', '',['class'=>'form-control','placeholder'=>'Student Number'])}}<br>
                        </div>
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

                    {!! Form::close() !!}

                
            </div>
        </div>
    </body>
</html>
