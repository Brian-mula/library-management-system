@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                   <div class="row">
                       <div class="col">
                       <h4>List of Issued books</h4>
                       </div>
                       <div class="col">
                           <a href="#" class="btn btn-success float-right">Issue book</a>
                       </div>
                   </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered border-primary">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Book no.</th>
                                <th>Student name</th>
                                <th>Admission</th>
                                <th>Return date</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection