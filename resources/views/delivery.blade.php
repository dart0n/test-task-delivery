@extends('layout')

@section('content')
    <form action="{{ route('delivery.create') }}" method="POST">
        @csrf

        <div class="col-6">
            <h1>Отправить посылку</h1>

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="ФИО" name="customer_name" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Номер телефона" name="phone_number" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Адрес отправителя" name="sender_address" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Адрес доставки" name="delivery_address" required>
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ширина посылки" name="parcel_width" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Высота посылки" name="parcel_height" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Длина посылки" name="parcel_length" required>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Вес посылки" name="parcel_weight" required>
            </div>

            <select name="deliveryService" class="custom-select">
                @foreach ($deliveryServices as $deliveryService)
                    <option value="{{ $deliveryService->id }}">{{ $deliveryService->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="mt-4 btn btn-outline-success">Отправить</button>
        </div>
    </form>
@endsection
