@extends('layouts.app')

<style>
    .container {
        padding: 20px;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        margin-top: 30px;
    }
    .card-header {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }
    .card-body {
        text-align: center;
        font-size: 18px;
        margin-bottom: 30px;
    }
    .alert {
        padding: 20px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .iframe {
        background: red;
    }
</style>

@section('content')
<div class="iframe">
    <?php
        echo "<iframe src='http://localhost/x/chatboot-master/chatboot-master/public/chatbot/index.php' height='790px' width='100%' border='none' background= 'red' title='Iframe'></iframe>";
    ?>
</div>
@endsection
