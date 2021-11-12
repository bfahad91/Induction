<x-layouts.admin>
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
                                        <th>Title</th>
                                        <th>Ad Post</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Active</th>
                                        <th>Applications</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ads as $ad)
                                        <tr>
                                            <td>{{ $ad->title }}</td>
                                            <td><a href="{{ asset($ad->adImg) }}" target="blank"><img
                                                src="https://ogra.org.pk/public/assets/front/images/pdf.png"
                                                alt=""></a>
                                            </td>
                                            <td>{{ $ad->description }}</td>
                                            <td>{{ $ad->start_date }}</td>
                                            <td>{{ $ad->end_date }}</td>
                                            <td><form action="">
                                                @csrf
                                                <select name="is_active" class="form-control w-20 is_active" id="{{$ad->id}}">
                                                    <option value="1" id="1">Active</option>
                                                    <option value="0" id="0">InActive</option>
                                                </select>
                                            </form></td>
                                            <td><a href="{{route('admin.advertisements.applications',$ad)}}" style="color: #5c84f3;font-weight: bold;">Applications <i class="fas fa-angle-right right"></i></a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No Records Found!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Ad Post</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Applications</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('javascript')
        <script>
            $(".is_active").change(function(value){
                var value = $(this).children(":selected").attr("value");
                var id = $(this).attr("id");
                $.ajax({
                type: 'get',
                url: '{{ URL::to('ajax/active/ad') }}',
                dataType: "json",
                data: {
                    'id' : id,
                },
                success: function(data)
                {
                    jQuery.noConflict();

                },
                error: function(error){
                    document.write(error);
                }
            });
            });
        </script>
    @endsection
</x-layouts.admin>

