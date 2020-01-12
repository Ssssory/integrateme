@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Terms</div>
                @if ($terms)
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>phone</td>
                                <td>date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($terms as $term)
                                <tr>
                                    <td>{{$term->id}}</td>
                                    <td>{{$term->phone}}</td>
                                    <td>{{$term->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection