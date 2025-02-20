<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">User Form</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter age" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Enter phone number" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="url" class="form-control" name="web" placeholder="Enter website URL" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter address" required>
                </div>
                <div>
                    @include ('block.error') {{-- đây là cách gọi file error.blade.php --}}
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- Hiển thị thông tin người dùng, đỗ dữ liệu ra view-->
                <div class="display-infor">
                    @if(isset($user))
                        <p>Name: {{$user['name']}}</p>
                        <p>Age: {{$user['age']}}</p>
                        <p>Date: {{$user['date']}}</p>
                        <p>Phone: {{$user['phone']}}</p>
                        <p>Website: {{$user['web']}}</p>
                        <p>Add: {{$user['address']}}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>