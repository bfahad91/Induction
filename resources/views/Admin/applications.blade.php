<x-layouts.admin>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>

                        <div class="card-body" style="overflow-x:auto;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>advertisement_id</th>
                                        <th>fullName</th>
                                        <th>picture</th>
                                        <th>fatherName</th>
                                        <th>dob</th>
                                        <th>domicile</th>
                                        <th>age</th>
                                        <th>birthPlace</th>
                                        <th>maritalStatus</th>
                                        <th>religion</th>
                                        <th>nationality</th>
                                        <th>cnic</th>
                                        <th>permanentAddress</th>
                                        <th>presentAddress</th>
                                        <th>cell#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applications as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->advertisement_id }}</td>
                                            <td>{{ $item->fullName }}</td>
                                            <td>{{ $item->picture }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.admin>
