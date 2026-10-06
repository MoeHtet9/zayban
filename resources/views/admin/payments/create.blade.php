@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">New Payment</h1>
        <a href="{{route('admin.payments.index')}}" class="btn btn-danger float-end">Back</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.payments.index')}}">Payments</a></li>
        <li class="breadcrumb-item active">New Payment</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            New Payment
        </div>
        <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="code-no" class="form-label">Payment Name</label>
                <input type="text" class="form-control" name="code_no" id="code-no" >
               
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Payment Logo</label>
                <input type="file" accept="image/*" class="form-control" name="image" id="image">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Account Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Account Number</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
