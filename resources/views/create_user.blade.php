<!-- resources/views/create_user.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Kustom untuk Gradasi Latar Belakang -->
    <style>
        body {
            /* Gradasi warna dari biru ke ungu */
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi putih */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h4 class="mb-4 text-center">Form Create User</h4>
        
        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    
        <!-- Menampilkan pesan error jika validasi gagal -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    
        <!-- Form untuk input nama, npm, dan kelas -->
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
    
            <!-- Input Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input 
                    type="text" 
                    class="form-control @error('nama') is-invalid @enderror" 
                    id="nama" 
                    name="nama" 
                    value="{{ old('nama') }}" 
                    required 
                    placeholder="Masukkan Nama Anda"
                >
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <!-- Input NPM -->
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input 
                    type="text" 
                    class="form-control @error('npm') is-invalid @enderror" 
                    id="npm" 
                    name="npm" 
                    value="{{ old('npm') }}" 
                    required 
                    placeholder="Masukkan NPM Anda"
                >
                @error('npm')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <!-- Input Kelas -->
            <div class="mb-4">
                <label for="kelas" class="form-label">Kelas</label>
                <input 
                    type="text" 
                    class="form-control @error('kelas') is-invalid @enderror" 
                    id="kelas" 
                    name="kelas" 
                    value="{{ old('kelas') }}" 
                    required 
                    placeholder="Masukkan Kelas Anda"
                >
                @error('kelas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
    
            <!-- Tombol Submit -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
    <!-- Bootstrap JS dan Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
