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
            Fees
        </div>
        <div class="links" text-align="center">
            <a href="{{ route('home') }}">Home</a>         
            <a href="/students">Search Student Records</a>
            <a href="/students/create">Register Students</a>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="content">


                    {!! Form::open(['action' => 'FeesController@store', 'method' => 'POST']) !!}
                    <div class="form-group" >
                        <h2>{{Form::label('title','Fees Payment Form')}}</h2><br>
                        {{Form::label('t1','Student Last Name: ')}}
                        {{Form::text('student_last_name', '',['class'=>'form-control','placeholder'=>'Last Name'])}}<br>
                        {{Form::label('t2','Name of Payer :')}} 
                        {{Form::text('name_of_payer', '',['class'=>'form-control','placeholder'=>'Name of Payer'])}}<br>
                        {{Form::label('t3','Student Number:  ')}}
                        {{Form::number('student_number', '',['class'=>'form-control','placeholder'=>'Student Number'])}}<br>
                        {{Form::label('t4','Amount: ')}} 
                        {{Form::number('amount', '',['class'=>'form-control','placeholder'=>'Amount'])}}<br>
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

                {!! Form::close() !!}

               

                <h1>All Fees Paid for Students</h1>
                
            <h3>{{$sum}}</h3>
                
            </div>
        </div>
    </body>
</html>
