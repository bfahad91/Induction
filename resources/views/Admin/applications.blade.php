<x-layouts.admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Applications</h3>
                        </div>
                        @if ($advertisement != null)
                            <div class="card">
                                <a href="{{ route('admin.export', $advertisement->id) }}"
                                    class="btn btn-success col-1 right">Export</a>
                            </div>
                        @else

                        @endif

                        <div class="card-body" style="overflow-x:auto;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>CV</th>
                                        <th>Ad title</th>
                                        <th>Name</th>
                                        <th>picture</th>
                                        <th>Father Name</th>
                                        <th>D.O.B</th>
                                        <th>Domicile</th>
                                        <th>Age</th>
                                        <th>Birth Place</th>
                                        <th>Marital Status</th>
                                        <th>Religion</th>
                                        <th>Nationality</th>
                                        <th>Cnic</th>
                                        <th>Permanent Address</th>
                                        <th>Present Address</th>
                                        <th>Cell#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applications as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <th><a href="{{ asset($item->cv) }}" target="blank"><img
                                                        src="https://ogra.org.pk/public/assets/front/images/pdf.png"
                                                        alt=""></a></th>
                                            <td>{{ $item->advertisement->title }}</td>
                                            <td>{{ $item->fullName }}</td>
                                            <td><a href="{{ asset($item->picture) }}" target="blank"><img
                                                        src="{{ asset($item->picture) }}" alt=""></a></td>
                                            <td>{{ $item->fatherName }}</td>
                                            <td>{{ $item->dob }}</td>
                                            <td>{{ $item->domicile }}</td>
                                            <td>{{ $item->age }}</td>
                                            <td>{{ $item->birthPlace }}</td>
                                            <td>{{ $item->maritalStatus }}</td>
                                            <td>{{ $item->religion }}</td>
                                            <td>{{ $item->nationality }}</td>
                                            <td>{{ $item->cnic }}</td>
                                            <td>{{ $item->permanentAddress }}</td>
                                            <td>{{ $item->presentAddress }}</td>
                                            <td>{{ $item->cell }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="ml-3 mb-3">{!! $applications->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.admin>
