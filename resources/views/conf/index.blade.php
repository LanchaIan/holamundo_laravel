@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('conf.update') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">Color:</label>

                            <div class="col-md-6">
                                <input id="color" type="color" class="form-control" name="header" value="{{ session('header', '#333') }}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="letra" class="col-md-4 col-form-label text-md-end">Estilo de letra</label>

                            <div class="col-md-6">
                                <select class="form-control" id="letra" name="letra">
                                    <option value="Arial" {{ session('letra', 'Arial') == 'Arial' ? 'selected' : '' }}>Arial
                                    </option>
                                    <option value="Courier New" {{ session('letra', 'Arial') == 'Courier New' ? 'selected' : '' }}>Courier New
                                    </option>
                                    <option value="Georgia" {{ session('letra', 'Arial') == 'Georgia' ? 'selected' : '' }}>Georgia
                                    </option>
                                    <option value="Tahoma" {{ session('letra', 'Arial') == 'Tahoma' ? 'selected' : '' }}>Tahoma
                                    </option>
                                    <option value="Verdana" {{ session('letra', 'Arial') == 'Verdana' ? 'selected' : '' }}>Verdana
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection