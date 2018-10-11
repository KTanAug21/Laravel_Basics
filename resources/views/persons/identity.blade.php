<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!--Bootstrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="links">
            <a href="/persons/list"><h3>Back</h3></a>
            </div>
            
        </header>

        <section id="information_section">
            <div class="flex-center position-ref full-height">
                <div class="content">
                <!--Back button-->
            
                @if($user)
                    <!--Introduction Part-->
                    <div class="title m-b-md">
                        Profile of {{$user->name}}
                    </div>
                
                    <!--End Introduction-->
                    
                    <!--Form Part-->
                    <!--Hide Show Buttons-->
                    <a id="btn_showForm" hre="#" class="btn btn-primary">Update User</a>
                  
                    <!--End Buttons-->
                    <!--Form for updating-->
                    <div id="form_person" style="display:none">
                        <form class="form-inline" action="/persons/update/{{$user->id}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="name" style="align:left">Edit Name</label>
                                <input class="form-control" type="text" name="name" value="{{$user->name}}">
                            </div>
                            <input class="btn btn-success" type="submit" value="Update">
                        </form>
                        <a id="btn_hideForm" hre="#" class="btn btn-warning" style="display:none">Hide Form</a>
                    </div>
                    <!--End Form-->
                    <!--End Form Part-->
                @endif
                </div>
            </div>
        </section>
        
        <script>
            $('#btn_showForm').click(function()
            {
                $('#form_person').show();
                $('#btn_hideForm').show();
                $('#btn_showForm').hide();  
            });

            $('#btn_hideForm').click(function()
            {
                $('#form_person').hide();
                $('#btn_showForm').show();
                $('#btn_hideForm').hide();  
            });
        </script>
    </body>
</html>
