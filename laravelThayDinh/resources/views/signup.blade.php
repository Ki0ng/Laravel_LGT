{{-- Hiển thị 1 sản phẩm}}
{{-- <!DOCTYPE html>
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
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Enter phone number">
                </div>
                <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="url" class="form-control" name="web" placeholder="Enter website URL">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter address">
                </div>
                <div>
                    @include ('block.error') 
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">User Form</h2>
            <form action="{{ route('signup.submit') }}" method="POST">
                @csrf
                
                <!-- Hiển thị danh sách users đã nhập trước đó -->
                @foreach($users as $index => $user)
                    <input type="hidden" name="users[{{ $index }}][name]" value="{{ $user['name'] }}">
                    <input type="hidden" name="users[{{ $index }}][age]" value="{{ $user['age'] }}">
                    <input type="hidden" name="users[{{ $index }}][date]" value="{{ $user['date'] }}">
                    <input type="hidden" name="users[{{ $index }}][phone]" value="{{ $user['phone'] }}">
                    <input type="hidden" name="users[{{ $index }}][web]" value="{{ $user['web'] }}">
                    <input type="hidden" name="users[{{ $index }}][address]" value="{{ $user['address'] }}">
                @endforeach

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
                    <input type="url" class="form-control" name="web" placeholder="Enter website URL">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter address">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <!-- Hiển thị danh sách users đã nhập -->
                @if (!empty($users))
                    <h3 class="mt-4">User List</h3>
                    <div class="row">
                        @foreach ($users as $user)
                            <div class="col-md-6">
                                <div class="card mb-3 shadow">
                                    <div class="card-body">
                                        <p><strong>Name:</strong> {{ $user['name'] }}</p>
                                        <p><strong>Age:</strong> {{ $user['age'] }}</p>
                                        <p><strong>Date:</strong> {{ $user['date'] }}</p>
                                        <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
                                        <p><strong>Website:</strong> <a href="{{ $user['web'] }}" target="_blank">{{ $user['web'] }}</a></p>
                                        <p><strong>Address:</strong> {{ $user['address'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </form>
        </div>
    </div>
</body>
</html>