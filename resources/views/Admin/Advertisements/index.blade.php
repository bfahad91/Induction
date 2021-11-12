<x-layouts.admin>
    @section('style')
    {{-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet"> --}}
    <style>
        #example1 tbody tr td{
            text-align: center;
            align-items: center;
        }
    </style>
    @endsection
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Advertisements</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Ad Post</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Applications</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ads as $ad)
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{ $ad->title }}</td>
                                            <td><a href="{{ asset($ad->adImg) }}" target="blank"><img
                                                        src="https://ogra.org.pk/public/assets/front/images/pdf.png"
                                                        alt=""></a>
                                            </td>
                                            <td>{{ $ad->description }}</td>
                                            <td>{{ $ad->start_date }}</td>
                                            <td>{{ $ad->end_date }}</td>
                                            <td>
                                                <input data-id="{{ $ad->id }}" class="toggle-class"
                                                    type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                    data-toggle="toggle" data-on="Active" data-off="InActive"
                                                    {{ $ad->is_active ? 'checked' : '' }}>
                                            </td>
                                            <td><a href="{{route('admin.advertisements.edit',$ad)}}"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="{{ route('admin.advertisements.applications', $ad) }}"
                                                    style="color: #5c84f3;font-weight: bold;">Applications <i
                                                        class="fas fa-angle-right right"></i></a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No Records Found!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Ad Post</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                        <th>edit</th>
                                        <th>Applications</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="mt-4">
                                {!! $ads->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('javascript')
        <script>
            $(function() {

                $('.toggle-class').change(function() {

                    var status = $(this).prop('checked') == true ? 1 : 0;
                    var ad_id = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '/admin/active/ad',
                        data: {
                            'is_active': status,
                            'ad_id': ad_id
                        },
                        success: function(data) {
                            // console.log(data.success)
                            toastr.success('Status change successfully.', 'Success');
                        },
                        error: function(error) {
                            toastr.error('Someting went wrong! Failed to update Status.');
                            // console.log(error);
                        }
                    });
                })

            })
        </script>
        {{-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> --}}
    @endsection
</x-layouts.admin>
