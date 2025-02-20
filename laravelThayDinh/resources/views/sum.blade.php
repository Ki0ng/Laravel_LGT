<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính tổng</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .container { width: 300px; margin: auto; text-align: center; }
        input, button { margin-top: 10px; padding: 10px; width: 100%; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Máy tính tổng</h2>
        <form action="{{ url('tinhtong') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Số a" name="soA" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Số b" name="soB" required>
            </div>
            <button type="submit" class="btn btn-primary">Tính</button>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Kết quả" value="{{ isset($sum) ? $sum : '' }}" readonly>
            </div>
        </form>
    </div>
</body>
</html>
