@extends('admin.layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endsection

@section('head_title')
    {{ $title }}
@endsection
@section('content')




            <div class="br-pagebody bg-white" style="padding: 10px 10px;">

                <div class=" mb-4">
                    <div class="">
                        <div class="bd-gray-300  table-responsive table-bordered table-striped">
                            @if (count($users) > 0)
                                <table id="datatable1" class="table mg-b-0">
                                    <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Is Admin</th>
                                        <th>Date Joined</th>
                                        <th>Delete</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $item)
                                        <tr>
                                            <td class="">
                                                <img src="{{ $item->avatar }}" class="wd-40 rounded-circle" alt="">
                                            </td>
                                            <td>
                                               {{ $item->name }}
                                            </td>
                                            <td>
                                               {{ $item->email }}
                                            </td>
                                            <td class="text-uppercase">
                                               {{ $item->is_admin ? 'YES' : 'NO' }}
                                            </td>
                                            <td>{{ $item->created_at->format('Y-M-d') }}</td>
                                            <td class="pd-r-0-force tx-center"><a href="{{ route('admin.user.destroy',$item) }}" class="btn btn-xs btn-danger">Delete</a></td>
                                            @if ($item->is_admin)
                                                <td class="pd-r-0-force tx-center"><a href="{{ route('admin.make.admin',$item->id) }}" class="btn btn-xs btn-danger btn-oblong">Remove Admin</a></td>
                                            @else
                                                <td class="pd-r-0-force tx-center"><a href="{{ route('admin.make.admin',$item->id) }}" class="btn btn-outline-info btn-oblong">Make Admin</a></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h3 class="text-center mt-4 mb-4">No Users Yet</h3>
                            @endif
                        </div>
                    </div>
{{--                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Basic Responsive DataTable</h6>--}}
                </div>
            </div>

@endsection

@section('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable1').DataTable();
        } );
    </script>
@endsection
