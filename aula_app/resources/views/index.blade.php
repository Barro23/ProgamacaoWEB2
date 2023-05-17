@extends('templates.template')

@section('content')

<center>
<h1>Usuarios:</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>SENHA</th>
                <th>ATUALIZAR</th>
                <th>VISUALIZAR</th>
                <th>EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuario as $usuarios)
                <form action='{{url("/user/{$usuarios->id}")}}' method="post">
                @csrf
                @method("PUT")
                    <tr>
                        <td>{{$usuarios->id}}</td>
                        <td><input type="name" class="form-control" id="floatingInput" placeholder="name" name="name" value="{{$usuarios->name}}"></td>
                        <td><input type="name" class="form-control" id="floatingInput" placeholder="name" name="email" value="{{$usuarios->email}}"></td>
                        <td><input type="name" class="form-control" id="floatingInput" placeholder="name" name="password" value="{{$usuarios->password}}"></td>
                        <td><button>Atualizar</button></td>
                        
                   
                </form>

                <td><a href='{{url("user/$usuarios->id")}}'><button>Visualizar</button></a></td>
                <td><a href='{{url("user/destroy/$usuarios->id")}}'><button>Excluir</button></a></td>
             </tr>
            @endforeach
        </tbody>
    </table>
</center>


    
    <center>
    <div  style="border: solid 2px black; width: 14%; margin: 100px; padding-bottom: 25px;">
        <h1>Criar Novo usuario:</h1>
        <form action='{{url("/user")}}' method="POST">
            @csrf
            <div class="form-floating">
                <input type="name" class="form-control" id="floatingInput" placeholder="name" name="name">
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
    
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Password" name="password">
        
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-primary" value="Criar">  
            </div>
        </form>
    </div>
    </center>

@endsection