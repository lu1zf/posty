@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Seu nome"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Nome de usuário</label>
                    <input type="text" name="username" id="username" placeholder="Seu username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('username') border-red-500 @enderror" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="E-mail"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg
                     @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirme a senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme a senha"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Registrar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
