<x-auth-layout>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">Email Address</label>
        <input id="email" type="email" name="email" required>

        <button type="submit">Send Password Reset Link</button>
    </form>
</x-auth-layout>