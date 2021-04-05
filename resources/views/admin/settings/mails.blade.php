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
        <h4 class="tx-gray-800 mg-b-5">Mail Settings</h4>
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
            @include('notification')
    </div>
        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <form action="{{ route('admin.settings.store') }}" method="POST">

                    @csrf

                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Mail Settings List</h6>

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
                            <td class="text-capitalize">Send Welcome Email
                            <br />
                                welcome_mail
                            </td>
                            <td>
                                <select required name="welcome_mail" class="form-control">
                                    <option value="{{ setting('welcome_mail',1) }}">{{ setting('welcome_mail','YES') }}</option>
                                    <option {{ setting('welcome_mail') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('welcome_mail') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td class="text-capitalize">Send Enable Withdrawal Email
                            <br />
                                enable_withdraw_mail
                            </td>
                            <td>
                                <select required name="enable_withdraw_mail" class="form-control">
                                    <option {{ setting('enable_withdraw_mail') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('enable_withdraw_mail') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-capitalize">Send Suspend Trade Email
                            <br />
                                suspend_trade_mail
                            </td>
                            <td>
                                <select required name="suspend_trade_mail" class="form-control">
                                    <option {{ setting('suspend_trade_mail') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('suspend_trade_mail') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-capitalize">Send Deposit Email
                            <br />
                                deposit_mail
                            </td>
                            <td>
                                <select required name="deposit_mail" class="form-control">
                                    <option {{ setting('deposit_mail') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('deposit_email') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-capitalize">Send Message Email
                            <br />
                                message_email
                            </td>
                            <td>
                                <select required name="message_email" class="form-control">
                                    <option {{ setting('message_email') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('message_email') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="text-capitalize">Send Plan Upgrade Email
                            <br />
                                plan_upgrade_mail
                            </td>
                            <td>
                                <select required name="plan_upgrade_mail" class="form-control">
                                    <option {{ setting('plan_upgrade_mail') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('plan_upgrade_mail') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>

   <tr>
                            <td>7</td>
                            <td class="text-capitalize">Send User Activated Email
                            <br />
                                user_activated_mail
                            </td>
                            <td>
                                <select required name="user_activated_mail" class="form-control">
                                    <option {{ setting('user_activated_mail') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('user_activated_mail') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>
   <tr>
                            <td>8</td>
                            <td class="text-capitalize">Admin Receives Withdrawal Request Email
                            <br />
                                withdrawal_request
                            </td>
                            <td>
                                <select required name="withdrawal_request" class="form-control">
                                    <option {{ setting('withdrawal_request') == 1 ? 'selected' : '' }} value="1">YES</option>
                                    <option {{ setting('withdrawal_request') == 0 ? 'selected' : '' }} value="0">No</option>
                                </select>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

                <input value="Save" type="submit" class="btn btn-success float-right" />

                </form>

            </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

@endsection


