<x-layout>
    <form action="/register" method="post">
        @csrf
        <div>
            <label for="name">
                Name
            </label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="username">
                Username
            </label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
        </div>
        <div>
            <label for="email">
                Email
            </label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password">
                Password
            </label>
            <!-- maybe add toggle to view password characters -->
            <input type="password" name="password" id="password" required>
            <!-- following is an alternative to the foreach loop below -->
            <!-- @error('password')
                <p>{{ $message }}</p>
            @enderror -->
        </div>
        <div>
            <button type="submit">
                Submit
            </button>
        </div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>