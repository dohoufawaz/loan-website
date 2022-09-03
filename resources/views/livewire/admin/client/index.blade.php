 <div>
    <div wire:ignore.self class="modal fale" id="deleteModal" tabindex="-1" aria-labelledby="exempleModalLable" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exempleModalLable"> Client Delete </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"> </button>
                    </div>
                    <form wire:submit.prevent ="destroyClient">
                        <div class="modal-body">
                            <h6>Are your sure  to delete this ?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                            <button type="submit" class="btn btn-danger" > Yes Delete</button>
                        </div>
                    </form>
                        
                </div>
        </div>
    </div>

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4> Clients
                    <a href="{{url('admin/dashboard')}}" class="btn btn-success float-end">Back To Home</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th> Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Phone </th>
                            <th>Icome</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->first_name }}</td>
                            <td>{{ $client->last_name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone_number }}</td>
                            <td>{{ $client->monthly_income }}</td>
                            <td>{{ $client->loant }}</td>
                            <td>{{ $client->loana }}</td>
                            <td>{{ $client->gender }}</td>
                            <td> 
                                <a href="" wire:click="deleteClient({{$client->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal"  class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container">
                    {{ $clients->links() }}
                </div>
                </div>
            </div>
            </div>

    
 </div>
 