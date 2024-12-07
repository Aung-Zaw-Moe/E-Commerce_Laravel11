@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Contact Form Submissions</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped pyidaungsu">
                        <thead class="text-center">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <!-- Optionally, you can add action buttons like 'View' or 'Delete' -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-2 float-right">
                        {{ $contact->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection