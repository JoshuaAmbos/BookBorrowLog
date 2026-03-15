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
                    Edit Record
                </h1>
                <p class="text-secondary">Edit and update specific records</p>
                <hr>
            </div>
        

            <!-- routing -->
            <form action="{{ route('records.update', $record -> id) }}" method="POST">
            @csrf
            @method('PUT')

                <!-- edit forms -->
                <div class="col d-flex justify-content-center">
                    <div class="card w-25 align-items-center">
                        <div class="card-body m-3">

                            <div class="mb-3">
                                <div><label for="borrowerName" class="small fw-bold ">Borrower's Name</label></div>
                                <input type="text" name="borrowerName" value="{{ $record -> borrowerName }}">
                            </div>

                            <div>
                                <div><label for="bookTitle" class="small fw-bold">Title of the Book</label></div>
                                <input type="text" name="bookTitle" value="{{ $record -> bookTitle }}">
                            </div>   

                            <div class="my-3">
                                <div><label for="bookTitle" class="small fw-bold">Status</label></div>
                                <select class="form-select" name="status">
                                    <option value="Returned">Returned</option>
                                    <option value="Borrowed">Borrowed</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <div>
                                    <a href="{{ route('records.index') }}" class="btn btn-secondary me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
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