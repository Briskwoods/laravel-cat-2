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
            Search for Student Records
        </div>
        <div class="links">
            <a href="{{ route('home') }}">Home</a>
            <a href="/fees">Fees</a>
            <a href="/students/create">Register Students</a>
        </div>
        <div class="flex-center position-ref full-height">
                       
                <div class="content">

                    <p>Please use the Student Number or Student ID to search for the required information.</p>
                    
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="search"
                                    placeholder="Search users"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <div class="container">
                                @if(isset($details))
                                    <p> The Search results for your search <b> {{ $query }} </b> are :</p>
                                <h2>Student Payment details</h2>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Student Last Name</th>
                                            <th>Name of Payer</th>
                                            <th>Student Number</th>
                                            <th>Amount Paid</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->student_last_name}}</td>
                                            <td>{{$user->name_of_payer}}</td>
                                            <td>{{$user->student_number}}</td>
                                            <td>{{$user->amount_paid}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                
            </div>


        </div>
    </body>
</html>
