<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile_intro') }}
        </h2>
    </x-slot>

    <div class="container py-5">
    <div class="card text-center border-0 shadow-lg" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-primary text-white py-3">
            <h4 class="mb-0">
                <i class="bi bi-person-check me-2"></i> Welcome to Your Dashboard
            </h4>
        </div>
        <div class="card-body p-4">
            <div class="d-flex justify-content-center mb-3">
                <div class="rounded-circle bg-light p-3 shadow-sm" style="width: 80px; height: 80px;">
                    <i class="bi bi-person-fill text-primary" style="font-size: 2.5rem;"></i>
                </div>
            </div>
            <h3 class="card-title mb-3 text-gradient text-primary">
                Hello, {{ Auth::user()->name }}!
            </h3>
            <p class="card-text text-muted mb-4">
                You've successfully logged in to your account.
            </p>
            
        </div>
        <div class="card-footer bg-light text-muted py-3">
            <small>
                <i class="bi bi-shield-lock me-1"></i> Your account is secure
            </small>
        </div>
    </div>
</div>
</x-app-layout>
</body>
</html>