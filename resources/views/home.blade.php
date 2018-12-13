


@section('content1')

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                @extends('temp_0.master')
                @include ('temp_1.booksThumb')


@endsection
@extends('layouts.app')