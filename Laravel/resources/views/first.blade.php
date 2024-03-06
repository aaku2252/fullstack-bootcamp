<html>
    <body>
        <form action="{{url('register')}}" method="post">
            @csrf
            Name:<input type="text" name="name"><br/>
            Phone:<input type = 'text' name ="phone"><br/>
            Password:<input type="text" name="password"><br/>
            <input type="Submit" name="submit" >
        </form>
    </body>
</html>