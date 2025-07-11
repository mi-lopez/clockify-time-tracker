<x-filament-panels::page.simple>

    <style>
        .google-btn {
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
        }
        .google-btn:hover {
            box-shadow: 0 0 6px rgba(66,133,244,.3);
        }
        .google-btn:active {
            background: #1976d2;
            box-shadow: 0 0 6px rgba(66,133,244,.3);
        }
        .google-logo {
            background: url("data:image/svg+xml,%3csvg width='18' height='18' xmlns='http://www.w3.org/2000/svg'%3e%3cg fill='%23000' fill-rule='evenodd'%3e%3cpath d='M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z' fill='%23EA4335'/%3e%3cpath d='M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z' fill='%234285F4'/%3e%3cpath d='M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z' fill='%23FBBC05'/%3e%3cpath d='M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z' fill='%2334A853'/%3e%3c/g%3e%3c/svg%3e") no-repeat center;
            background-size: 18px 18px;
        }
    </style>

    <hr class="my-4">

    <div class="text-center">
        <a href="{{ route('google.redirect') }}"
           class="google-btn inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm transition-all duration-200 w-full">
            <div class="google-logo w-5 h-5 mr-3"></div>
            Login with Google
        </a>
    </div>
</x-filament-panels::page.simple>
