@extends('admin.layouts.admin-app')

@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('admin.settings.index') }}"> Settings</a>
                {{--            <span class="breadcrumb-item active">Settings Layouts</span>--}}
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5"> Settings</h4>
        </div>

        <div class="br-pagebody">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="br-section-wrapper">

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit {{ $setting->key }}</h6>

                <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-layout form-layout-1">
                        <div class="row mg-b-25">

                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Setting Key: <span class="tx-danger">*</span></label>
                                    <input class="form-control" disabled type="text" value="{{ old('key',  optional($setting)->key) }}" required placeholder="Enter Key">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Setting Value: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" value="{{ old('value', optional($setting)->value) }}" name="value" required placeholder="Enter Value">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Type:  <span class="tx-danger">*</span></label>
                                    <select name="type" class="form-control" required data-placeholder="Select type:">
                                        {{--                                    <option label="Choose Category"></option>--}}
                                        <option selected value="{{ $setting->type }}">{{ $setting->type }}</option>
                                        <option value="text">Text</option>
                                        <option value="image">Image</option>
                                        <option value="textarea">Textarea</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-primary" type="submit">Update Setting</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->
                </form>
            </div><!-- br-section-wrapper -->

        </div>
@endsection


