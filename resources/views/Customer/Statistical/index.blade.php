@extends('Customer.layout')


@section('Customer-main-content')
<div class="content-wrapper" style="min-height: 415px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <table class="data-table table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"><input type="checkbox" name="check-all" id="check-all"></th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">CMND</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Customer type</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Email verify</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Created at</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @if ($user->count() > 0)
                            @foreach ($user as $key => $collection)
                                @php
                                    $id = $collection->id;
                                    $email = $collection->email;
                                    $name = $collection->name;
                                    $CMND = $collection->CMND;
                                    $phoneNumber = $collection->phone_number;
                                    $customerType = $collection->customer_type;
                                    $avatar = $collection->customer_type;
                                    $emailVerifyAt = $collection->email_verified_at;
                                    $updatedAt = $collection->updated_at;
                                    $createdAt = $collection->created_at;
                                @endphp
                                <tr>
                                    <td><input type="checkbox" name="cbid[]" value="{{ $id }}"></td>
                                    <td>{{ $email }}</td>
                                    <td>{{ $name }}</td>
                                    <td>{{ $CMND }}</td>
                                    <td>{{ $phoneNumber }}</td>
                                    <td>{{ $customerType }}</td>
                                    <td>{{ $avatar }}</td>
                                    <td>{{ $emailVerifyAt }}</td>
                                    <td>{{ $updatedAt }}</td>
                                    <td>{{ $createdAt }}</td>
                                  </tr>
                            @endforeach
                        @endif --}}
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection