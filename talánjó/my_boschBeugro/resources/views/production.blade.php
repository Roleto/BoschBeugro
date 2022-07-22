@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 10px">
    <div id="productions">
        <table>
            <tr>
                <th>Id</th>
                <th>Pcb id</th>
                <th>Quantity</th>
                <th>Stat Date</th>
                <th>End tDate</th>
            </tr>
            @if (count($productions) > 0)
                 @foreach ($productions as $production)
                 <tr>
                     <th>{{$production['id']}}<th>
                     <th>{{$production['pcb_id']}}<th>
                     <th>{{$production['quantity']}}<th>
                     <th>{{$production['startDate']}}<th>
                     <th>{{$production['endDate']}}<th>
                     <th>Delete</th>
                     <th>Update</th>
                    </tr>
                @endforeach
            @else
                <h2>There is no guitar</h2>
            @endif
        </table>
    </div>
</div>
@endsection