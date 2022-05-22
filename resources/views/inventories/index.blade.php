@extends('layout.index')


@section('content')
<br>
<div class="container-fluid">
    <div class="text-right">
        <a href="{{ route('create') }}" class="btn btn-primary">
            Add New Item
        </a>
    </div>
            <div class="text-center">
                        <h1>Manage Inventories</h1>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">driver_id</th>
                            <th scope="col">driver_name</th>
                            <th scope="col">car_plate</th>
                            <th scope="col">car_type</th>
                            <th scope="col">dispatch_time</th>
                            <th scope="col">dispatch_date</th>
                            <th scope="col">type_of_goods</th>
                            <th scope="col">manufacturer</th>
                            <th scope="col">additional_info</th>
                            <th scope="col" width="280px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($inventories as $inventory)
                            <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $inventory->driver_id}}</td>
                            <td>{{ $inventory->driver_name}}</td>
                            <td>{{ $inventory->car_plate}}</td>
                            <td>{{ $inventory->car_type}}</td>
                            <td>{{ $inventory->dispatch_time}}</td>
                            <td>{{ $inventory->dispatch_date}}</td>
                            <td>{{ $inventory->type_of_goods}}</td>
                            <td>{{ $inventory->manufacturer}}</td>
                            <td>{{ $inventory->additional_info}}</td>
                            <td>
                                <form action="{{ route('delete', $inventory->id) }}" method="post">

                                @csrf 
                                    @method('DELETE')

                                    <a href="{{ route('edit', $inventory->id ) }}" class="btn btn-info"> Edit</a>

                                    

                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
</table>
</div>
</div>

@endsection