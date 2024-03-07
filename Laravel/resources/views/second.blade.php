<html>
    <head>
        <title>Database data</title>
        <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>
            @foreach($employees as $emp)
            <tr>
                <td> {{ $emp->name }}</td>
                <td> {{ $emp->phone }}</td>
                <td> {{ $emp->password }}</td>
            </tr>
            @endforeach

        </table>
        <a href="{{ url('register')}}"><button>Register</button></a>
        <a href="{{ url('display')}}"><button>Display</button></a>
        <a href="{{ url('update')}}"><button>Update</button></a>
    </body>
</html>