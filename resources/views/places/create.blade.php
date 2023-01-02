@extends('layouts.template')

@section('content')
    <div class="container mb-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3">
            <h1 style="color: #475B74">Add Place</h1>
        </div>
        <div class="col">
            <form action="/places" method="post" enctype="multipart/form-data">
                @csrf
                {{-- Nama --}}
                <div class="mb-3">
                    <label for="name" class="form-label fs-4">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                          {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Province --}}
                <div class="mb-3">
                    <label for="province_id" class="form-label fs-4">Province</label>
                    <select class="form-control @error('province_id') is-invalid @enderror" id="province_id" name="province_id" required value="{{ old('province_id') }}">
                    <option value="" disabled selected hidden>--Open this select menu--</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                    @endforeach
                    </select>
                    @error('province_id')
                    <div class="invalid-feedback">
                          {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Location --}}
                <div class="mb-3">
                    <label for="location" class="form-label fs-4">Location</label>
                    <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" required value="{{ old('location') }}">
                    @error('location')
                    <div class="invalid-feedback">
                          {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label fs-4">Description</label>
                    <textarea rows="5" cols="173" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description') }}">{{ old('description') }}</textarea>
                    {{-- <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description') }}"> --}}
                    @error('description')
                    <div class="invalid-feedback">
                          {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Tiket Price --}}
                <div class="mb-3">
                    <label for="price" class="form-label fs-4">Tiket Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price') }}">
                    @error('price')
                    <div class="invalid-feedback">
                          {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label for="image" class="form-label fs-4">Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror  
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark col">Create</button>
                </div>
            </form>
        </div>
        
    </div>
@endsection