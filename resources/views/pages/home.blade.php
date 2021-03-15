@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')


<header class="masthead">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
            <br>
            <h1>HELLO, I'm {{ $name }}</h1>
           <h2>Informatika A 2019</h2>
           </div>
        </div>
    </div>
</div>
</header>

<x-modal dn="primary">
    Next
</x-modal>
@stop