<html>
    <head>
        <style>
            body{
                background-color:coral;
            }
        </style>
    </head>
    <body>
        <form action="{{url('register')}}" method="post">
            @csrf
            Name:<input type="text" name="name"><br/>
            Phone:<input type = 'text' name ="phone"><br/>
            Password:<input type="text" name="password"><br/>
            <input type="Submit" name="submit" >
        </form>
        <a href="{{ url('register')}}"><button>Register</button></a>
        <a href="{{ url('display')}}"><button>Display</button></a>
        <a href="{{ url('update')}}"><button>Update</button></a>

    </body>
</html>