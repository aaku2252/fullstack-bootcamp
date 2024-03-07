<html>
<head>
    <style>
        body{
            background-color: aqua;
        }
    </style>
</head>

    <body>
        <form action="{{url('update')}}" method="post">
            @csrf
            Name:<input type="text" name="name"><br/>
            Phone:<input type = 'text' name ="phone"><br/>
            <button type="Submit" name="submit" >Submit</button>
        </form>
        <a href="{{ url('register')}}"><button>Register</button></a>
        <a href="{{ url('display')}}"><button>Display</button></a>
        <a href="{{ url('update')}}"><button>Update</button></a>
    </body>
</html>