<x-layout>
    <div>
        <!-- Be present above all else. - Naval Ravikant -->
        <h1>Log in</h1>
        <form action="/login" method="POST">
            @csrf
    <div>
    <x-input title="Email"      
    type="text" nombre="email"/>
           @error("email")
           <p>{{ $message }}</p>
           @enderror
    </div>

    <div>
        <x-input title="password"
     type="password" nombre="password">
           @error("password")
           <p>{{ $message }}</p>
           @enderror
    </div>
    <button type="submit" class="text-x1 border p-6">Log in</button>

        </form>
    </div>
    </x-layout>
