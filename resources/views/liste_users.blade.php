@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Compétences</p>
                    <p>
                    <ul>
                        @foreach($liste as $liste)
                            <li>id : {{ $liste -> id }}</li>
                            <li>Name : {{ $liste -> name }}</li>
                            <li>email : {{ $liste -> email }}</li>
                            <li>competences : <ul> 
                            @foreach($liste->skills as $skill)
                            <li>id : {{ $skill -> id }} Compétences : {{ $skill -> name }} Niveau : {{ $skill -> pivot -> level }}</li>
                            @endforeach
                            </ul></li>
                            
                        @endforeach
                        </ul>
                    </p>
                    <p>
        Remerciements à Alexandre 'Lolo' Lorenzo pour son aide précieuse
    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class ="skills_container">
    

</div>
@endsection
