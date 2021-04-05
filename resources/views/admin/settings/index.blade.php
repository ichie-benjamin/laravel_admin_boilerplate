@extends('admin.layouts.master')

@section('head_title')
    Settings
@endsection

@section('content')
<!-- ########## START: MAIN PANEL ########## -->

            <div class="br-section-wrapper">

                <form action="{{ route('admin.settings.store') }}" method="POST">

                    @csrf

                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> Settings List</h6>

                <input value="Save" type="submit" class="btn btn-success float-right" />

                <div class="table-wrapper">
                    <table class="table table-bordered display table-condensed responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-10p"> S.No</th>
                            <th class="wd-30p"> Name</th>
                            <th class="wd-60p">Value</th>
                            @if (auth()->user()->hasRole('super_admin'))
                            <th></th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($settings as $setting)
                        <tr>
                            <td>{{ $setting->id }}</td>
                            <td class="text-capitalize">{{ str_replace('_',' ',$setting->key) }}</td>

{{--                            <td><img src="{{ $setting->banner }}" height="70" /></td>--}}
                            <td>
                                @if ($setting->type == 'text')
                                    <input class="form-control" width="70%" name="{{ $setting->key }}" value="{{ $setting->value }}">
                                @endif
                                    @if ($setting->type == 'textarea')
                                        <textarea class="form-control" name="{{ $setting->key }}">{{ $setting->value }}</textarea>
                                    @endif
                                @if ($setting->type == 'image')
                                        <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="{{ $setting->key }}_thumbnail" data-preview="{{ $setting->key }}" class="btn btn-primary">
       <i class="fas fa-picture"></i> Choose Image
     </a>
   </span>
                                                <input id="{{ $setting->key }}_thumbnail" class="form-control" type="text" value="{{ $setting->value }}" name="{{ $setting->key }}">
{{--                                                <input disabled class="form-control" value="{{ $image }}" type="text">--}}
                                        </div>
                                        <div id="{{ $setting->key }}" style="margin-top:15px; margin-bottom:20px;max-height:200px;">
                                            <img src="{{ $setting->value }}" height="60">
                                        </div>

                                    @endif
                            </td>
                            @if (auth()->user()->hasRole('super_admin'))
                            <td>
                                <a href="{{ route('admin.settings.edit', $setting->id ) }}" class="btn btn-primary btn-sm" title="Edit Settings">
                                    <span class="fa fa-edit" aria-hidden="true"></span>
                                </a>
                            </td>
                                @endif
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

                <input value="Save" type="submit" class="btn btn-success float-right" />

                </form>

            </div><!-- br-pagebody -->

@endsection


