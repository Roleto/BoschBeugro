@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 10px">
    <div id="productions">
    <form action="" method="get">
            <select name="Filter"  id="filter">
                <option value="" disabled selected>Choose option</option>
                     @foreach ($productions as $production)
                <option value={{$production['pcb_id']}}>{{$production['pcb_id']}}</option>
                     @endforeach
            </select>
            <input type="submit" name="submit" value="Filter"> 
        </form>
        <?php
        if(isset($_GET['submit'])){
            if(!empty($_GET['Filter'])) {
                $filter_data = $_GET['Filter'];
            } else {
                $filter_data =0;
            }
        }
        ?>
        <table class="table table-bordered text-lg-center">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Pcb id</th>
                    <th>Quantity</th>
                    <th>Stat Date</th>
                    <th>End Date</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @if (count($productions) > 0)
            @foreach ($productions as $production)
            @if($filter_data == 0)
                <tr>
                    <td>{{$production['id']}}</td>
                    <td>{{$production['pcb_id']}}</td>
                    <td>{{$production['quantity']}}</td>
                    <td>{{$production['startDate']}}</td>
                    <td>{{$production['endDate']}}</td>
                    <td><a href="{{ route('destroy', $production['id']) }}">X</a></td>
                </tr>
                @elseif($filter_data == $production['pcb_id'] )
                <tr>
                    <td>{{$production['id']}}</td>
                    <td>{{$production['pcb_id']}}</td>
                    <td>{{$production['quantity']}}</td>
                    <td>{{$production['startDate']}}</td>
                    <td>{{$production['endDate']}}</td>
                    <td><a href="{{ route('destroy', $production['id']) }}">X</a></td>
                </tr>
                @endif
                @endforeach
            @else
                <h2>There is no data in the database</h2>
            @endif
        </table>
@endsection