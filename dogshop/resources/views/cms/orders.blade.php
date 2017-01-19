@extends('cms.master')

@section('cms_content')
<h1 class="page-header">Orders</h1>

@if ($orders)
<br>
          <div class="table-responsive">
            <table class="table table-striped">
        <tr style="background-color: #e5e5f0">
        <thead>
            <th>Order Date</th>
            <th>Order Details</th>
            <th>Total</th>
            <th>User Details</th>
        </thead>
        </tr>
        <tbody>    
        @foreach ($orders as $row)
        <tr>
            <td>{{ $row->created_at }}</td>
            
            <td>
                <ul>
                    @foreach ( unserialize ($row->data) as $item )
                    <li>
                        <a href="{{url( 'shop/' .  $item['attributes']['catUrl']. '/' . $item['attributes']['url'] )}}" target="_blank" style="color:blue">{{$item['name']}}</a>:
                    <b>quantity: </b>{{$item['quantity']}},
                    <b>price: </b>${{$item['price']}}
                    </li>
                    @endforeach
                </ul>
            </td>
            <td>${{ $row->total }}</td>
            
            <td>
                <b>Name: </b>{{ $row->name }} <br>
                <b>Email: </b>{{ $row->email }} <br>
                <b>Address: </b>{{ $row->address }} 
            </td>
         
        </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endif


@endsection

