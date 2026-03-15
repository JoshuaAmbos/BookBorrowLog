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
    <div class="container mt-5 justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="fw-bold">
                    Create Record
                </h1>
                <p class="text-secondary">Create and submit records</p>
                <hr>
            </div>

            <!-- routing -->
            <form action="{{ route('records.store') }}" method="POST">
                @csrf
                
                <!-- create form -->
                <div class="col d-flex justify-content-center">
                    <div class="card w-25 align-items-center">
                        <div class="card-body m-3">
                            <div class="mb-3">
                                <label for="borrowerName">Borrower's Name</label>
                                <input type="text" name="borrowerName" id="borrowerName" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="bookTitle">Title of the Book</label>
                                <input type="text" name="bookTitle" id="bookTitle" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-between gap-2 mt-5">
                                <button type="submit" class="btn btn-primary">
                                    Add Record
                                </button>
                                <a href="{{ route('records.index') }}" class="btn btn-secondary w-50">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>     
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>