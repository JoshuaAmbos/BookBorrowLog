<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Book Log</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar -->
    <div class="navbar bg-body-tertiary px-3">
        <h1>Book Borrow Log <span style="font-size: 35%; margin-left: 10px; color: gray;">by Ambos, Joshua</span></h1>
    </div>

    <!-- content area -->
    <div class="container mt-5">
        <div class="row">

            <h1 class="fw-bold">
                Records
            </h1>
            <p class="text-secondary">Manage records of borrowed books</p>

            <!-- add btn -->
            <div class="col-2">
                <a href="{{ route('records.create') }}">
                    <button class="btn btn-outline-dark mb-3">Add Record</button>
                </a>
            </div>
            
            <hr>


            <!-- display records -->
            @forelse ($records as $record)
                <div class="col-4 g-3">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="card-title mb-1 fw-semibold">{{ $record -> bookTitle }}</h2>
                                <span class="badge {{ $record->status == 'Borrowed' ? 'bg-warning' : 'bg-success' }} p-2 fs-6">
                                    {{ $record->status }}
                                    </span>
                            </div>
                    
                            <h5 class="card-subtitle" style="color: gray">Borrowed by: {{ $record -> borrowerName }}</h5>
                            
                            <div class="dropdown d-flex justify-content-end mt-5">
                                <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown">Actions</button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{  route('records.edit', $record -> id) }}">
                                            Edit
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('records.destroy', $record -> id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button type="submit" class="dropdown-item">
                                                Remove
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No record found.</p>
            @endforelse
        </div>
       

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>