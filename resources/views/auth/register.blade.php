@extends('layouts.master')
@section('title', 'Register Page')

@section('content')
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <h1 class="text-center fw-bold">Register</h1>
            <div class="mt-3 bg-dark mx-auto rounded" style="height: 3px;width: 75px"></div>

            <div class="grid mx-3 mt-4">
                <div class="row row-gap-4 justify-content-center">
                    <div class="col-4">

                        <!-- error message -->
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card bg-white w-100">
                            <div class="card-body">
                                <form action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                            name="name" required>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" required>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" required>
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                                        <div class="input-group">
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                id="password_confirmation" name="password_confirmation" required>
                                            <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirmation">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </div>
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="age" class="form-label">Age</label>
                                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" required>
                                        @error('age')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                                            <option selected disabled>Select Role</option>
                                            <option value="superadmin">SuperAdmin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary w-100">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            const togglePasswordConfirmation = document.querySelector('#togglePasswordConfirmation');
            const passwordConfirmation = document.querySelector('#password_confirmation');

            togglePassword.addEventListener('click', function (e) {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });

            togglePasswordConfirmation.addEventListener('click', function (e) {
                const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordConfirmation.setAttribute('type', type);
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        });
    </script>
@endsection
