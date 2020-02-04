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

                    You are logged in ! 

                    <p>Compétences</p>
                    <p>
                        <ul>
                            <li>id : {{ $users -> id }}</li>
                            <li>Name : {{ $users -> name }}</li>
                            <li>email : {{ $users -> email }}</li>
                            <li>competences : {{ $users -> competences }}</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class ="skills_container">
    

</div>
@endsection
