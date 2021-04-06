@extends('admin.layouts.master')

@section('head_title')
    Welcome to {{ env('APP_NAME') }} Amin Dashboard
@endsection
@section('content')
        <div class="">
            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-teal rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-android-people tx-40 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">All Users</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">0</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="bg-danger rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-ios-person tx-40 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Admins</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">0</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="bg-primary rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-monitor tx-40 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Active Cars</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $cars }}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="bg-br-primary rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-clock tx-40 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Purchased Tickets</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $tickets }}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
            </div><!-- row -->

            <div class="row row-sm mg-t-20">
                <div class="col-8">
                    <div class="card bd-0 shadow-base pd-30 mg-t-20">
                        <div class="d-flex align-items-center justify-content-between mg-b-30">
                            <div>
                                <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Recent Users</h6>
                                <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i>All Recent Users </p>
                            </div>
                            <a href="{{ route('admin.users') }}" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a>
                        </div><!-- d-flex -->

                        <table class="table table-valign-middle mg-b-0">
                            @if (count($users) > 0)
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td class="pd-l-0-force">
{{--                                            <img src="{{ $item->user->avatar }}" class="wd-40 rounded-circle" alt="">--}}
                                        </td>
                                        <td>
                                            <h6 class="tx-inverse tx-14 mg-b-0">{{ $item->email }}</h6>
                                            <span class="tx-12">{{ $item->name }}</span>
                                        </td>
                                        <td class="text-uppercase">{{ $item->phone }}</td>
                                        <td>{{ $item->created_at->format('Y-M-d') }}</td>
                                        <td class="pd-r-0-force tx-center"><a href="" class="btn btn-outline-info btn-oblong">View Article</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @else
                                <h3 class="text-center mt-4 mb-4">No Users Yet</h3>
                            @endif

                        </table>
                    </div><!-- card -->
                </div><!-- col-9 -->
                <div class="col-4">

                    <div class="card bd-0 mg-t-20">
                        <div id="carousel2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel2" data-slide-to="1"></li>
{{--                                <li data-target="#carousel2" data-slide-to="2"></li>--}}
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="bg-br-primary pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                                        <div class="tx-white">
                                            <h5 class="lh-5 mg-b-20">RAMADECH
                                                is an open-access
                                                multi-disciplinary peer-reviewed
                                                </h5>
                                        </div>
                                    </div><!-- d-flex -->
                                </div>
                                <div class="carousel-item">
                                    <div class="bg-info pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                                        <div class="tx-white">
                                            <h5 class="lh-5 mg-b-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequuntur dolorum iure
                                                molestias perspiciatis.
                                            </h5>
                                        </div>
                                    </div><!-- d-flex -->
                                </div>
                            </div><!-- carousel-inner -->
                        </div><!-- carousel -->
                    </div><!-- card -->

                </div><!-- col-3 -->
            </div><!-- row -->

        </div><!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; {{ date('Y') }}. {{ env('APP_NAME') }}. All Rights Reserved.</div>
            </div>
        </footer>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/dashboard.js')}}"></script>
@endsection


