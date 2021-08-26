@extends('layouts.bs4-template')
@section('container')
    <div class="row">
        <div class="col-6 offset-3">
            <x-form-card method="post" action="/login">
                @if ($errors->any() && $retries > 0)
                <x-alert type="warning">
                        Remaining {{ $retries }} attempt.
                </x-alert>
                @endif

                @if ($retries <= 0)
                <x-alert type="danger">
                    Please try again after {{ $seconds }} seconds.
                </x-alert>
                @endif

                @csrf

                <x-input label="Email" name="email" type="email" />
                <x-input label="Password" name="password" type="password" />

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                </div>
            </x-form-card>
        </div>
    </div>
@endsection
