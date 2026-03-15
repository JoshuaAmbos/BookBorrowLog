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
            <hr>

            <!-- display records -->
            @forelse ($records as $record)
                <div class="col-2 g-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-1">{{ $record -> borrowerName }}</h2>
                            <h4 class="card-subtitle text-muted">{{ $record -> bookTitle }}</h4>
                        </div>
                        <p class="d-flex justify-content-end mx-2">
                            <span class="badge {{ $record->status == 'Borrowed' ? 'bg-warning' : 'bg-success' }} p-2 fs-7">
                                {{ $record->status }}
                            </span>
                        </p>
                            
                    </div>
                </div>
            @empty
                <p>No records found.</p>
            @endforelse
        </div>
       

        
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>