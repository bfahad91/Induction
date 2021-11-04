<x-layouts.admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Title Urdu</th>
                                        <th>Ad Img</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <td>Applications</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($ads as $ad)
                                        <tr>
                                            <td>{{ $ad->title }}</td>
                                            <td>{{ $ad->title_urdu }}</td>
                                            <td><img style="width:100px" src="{{ asset($ad->adImg) }}" />
                                            </td>
                                            <td>{{ $ad->description }}</td>
                                            <td>{{ $ad->start_date }}</td>
                                            <td>{{ $ad->end_date }}</td>
                                            <td><a href="{{route('ads.applications',$ad)}}">Applications</a></td>
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
                                        <th>Title Urdu</th>
                                        <th>Ad Img</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.admin>
