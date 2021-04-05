@extends('admin.layouts.master')

@section('content')
<!-- ########## START: MAIN PANEL ########## -->

    <div class="">
        @if (auth()->user()->hasRole('super_admin'))
                <p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Add Setting
                    </button>
                </p>
        @endif

        <div class="collapse" id="collapseExample">
        <div class="br-section-wrapper">

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Settings</h6>

            <form action="{{ route('admin.settings.store') }}" method="POST">
                @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Setting Key: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="key" value="{{ old('key') }}" required placeholder="Enter Key">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Setting Value: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ old('value') }}" name="value" required placeholder="Enter Value">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Type:  <span class="tx-danger">*</span></label>
                                <select name="type" class="form-control" required data-placeholder="Select type:">
                                    {{--                                    <option label="Choose Category"></option>--}}
                                    <option value="text">Text</option>
                                    <option value="image">Image</option>
                                    <option value="textarea">Textarea</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->

                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-primary" type="submit">Add Setting</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- br-section-wrapper -->
        </div>

    </div>

<div class="br-pagebody bg-white" style="padding: 10px 10px;">

                <form action="{{ route('admin.settings.store') }}" method="POST">

                    @csrf

                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Settings List</h6>

                <input value="Save" type="submit" class="btn btn-success float-right" />

                <div class="table-wrapper">
                    <table class="table table-bordered display table-condensed responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-10p"> S.No</th>
                            <th class="wd-20p"> Name</th>
                            <th class="wd-70p">Value</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-capitalize">Site Logo</td>
                            <td>
{{--                                @include('admin.partials.image-upload',['field' => 'logo','image' => setting('logo'),'id' => 'logo'])--}}

{{--                                <textarea class="form-control" name="first_banner_text">{{ setting('first_banner_text') }}</textarea>--}}
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-capitalize">Site Name</td>
                            <td>
                                <input class="form-control" width="70%" name="site_name" required value="{{ setting('site_name') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-capitalize">Wallet ID</td>
                            <td>
                                <input class="form-control" width="70%" name="wallet_id" required value="{{ setting('wallet_id') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-capitalize">Wallet Barcode</td>

                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-capitalize">Support Email</td>
                            <td>
                                <input class="form-control" width="70%" name="support_email" required value="{{ setting('support_email') }}">
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-capitalize">Contact Phone</td>
                            <td>
                                <input class="form-control" width="70%" name="phone" required value="{{ setting('phone') }}">
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td class="text-capitalize">Site Currency</td>
                            <td>
                                <select required name="currency" class="form-control">
                                    <option value="{{ setting('currency') }}">{{ setting('currency','Select Currency') }}</option>
                                    <option value="USD">USD</option>
                                    <option value="BTC">BTC</option>
                                </select>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

                <input value="Save" type="submit" class="btn btn-success float-right" />

                </form>

            </div><!-- br-pagebody -->
@endsection


