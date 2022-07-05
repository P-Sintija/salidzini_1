@extends('admin.layouts.main')

@section('content')

    <div id="registration-grid">
        <registration-grid
            modal-title="{{ $modalTitle }}"
            modal-content="{{ $modalContent }}"
        ></registration-grid>
    </div>

@endsection
