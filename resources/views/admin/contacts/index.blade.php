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
                    <h4 class="text-warning">Contact Form Submissions List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped pyidaungsu">
                        <thead class="text-center">
                            <tr>
                                <th class="text-warning">Name</th>
                                <th class="text-warning">Email</th>
                                <th class="text-warning">Phone</th>
                                <th class="text-warning">Message</th>
                                <th class="text-warning">Actions</th>
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
                     {{-- Pagination Links --}}
                    <div class="pagination mt-2 float-right">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
