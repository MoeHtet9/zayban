@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="my-3">
                <h1 class="mt-4 d-inline">Orders</h1>
                <a href="" class="btn btn-primary float-end">Create Order</a>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Orders List
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>voucher_no</th>
                                <th>total</th>    
                                <th>qty</th>
                                <th>slip</th>
                                <th>status</th>
                                <th>address</th>
                                <th>user_id</th>
                                <th>item_id</th>
                                <th>payment_id</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>voucher_no</th>
                                <th>total</th>    
                                <th>qty</th>
                                <th>slip</th>
                                <th>status</th>
                                <th>address</th>
                                <th>user_id</th>
                                <th>item_id</th>
                                <th>payment_id</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp            
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$order->voucher_no}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->qty}}</td>
                                    <td>{{$order->slip}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->user_id}}</td>
                                    <td>{{$order->item_id}}</td>
                                    <td>{{$order->payment_id}}</td>
                                </tr>
                            @endforeach
                        </tbody>            
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection