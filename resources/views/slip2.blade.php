<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: whitesmoke">
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-7" style="background-color: white">
            <div class="row">
                <div class="col-2">
                    <img style="width: 80px" class="mt-5" src="{{ asset('images/ASF_PK_Logo.png') }}" alt="">
                </div>
                <div class="col-8">
                    <div class="text-center">
                        <h2 class="fw-bold">ASF RECRUITMENT–2021/22</h2>
                        <h4 class="fw-bold">ROLL NUMBER SLIP (OFFICE COPY)</h4>
                    </div>
                    <div class="row border-3">
                        <div class="row border border-dark">
                            <div class="col-8 row">
                                <label for="post" class="col-5 border-end fw-bold p-2">For the Post of</label>
                                <div class="col-7 w-auto border-end fw-bold">{{ $application->advertisement->title }}
                                </div>
                            </div>
                            <div class="col-4 row">
                                <label for="post" class="col-5 border-end fw-bold p-2">BPS</label>
                                <div class="col-7 w-auto border-end fw-bold"></div>
                            </div>
                        </div>
                        <div class="row border border-dark">
                            <div class="col-8 row">
                                <span class="col-5 border-end fw-bold p-2">Roll Number</span>
                                <span class="col-7 w-auto border-end fw-bold">123456</span>
                            </div>
                            <div class="col-4 row">
                                <label for="post" class="border-end fw-bold p-2">Test Center</label>
                                <div class="col-7 w-auto border-end fw-bold"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 p-3">
                    <img class="col-10" src="{{ asset($application->picture) }}" alt="">
                </div>
                <div class="text-sm-center">(For Official Use Only)</div>
                <hr>
                <div class="col-12 border-2">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12 row border border-2">
                                <span class="col-3 border-end fw-bold p-2">Name</span>
                                <span class="col-9 w-auto border-end fw-bold" style="width: 10rem">{{ $application->fullName }}</span>
                            </div>
                            <div class="col-12 row border border-2">
                                <span class="col-3 border-end fw-bold p-2">Father Name</span>
                                <span class="col-9 w-auto border-end fw-bold" style="width: 10rem">{{ $application->fullName }}</span>
                            </div>
                            <div class="col-12 row border border-2">
                                <span class="col-3 border-end fw-bold p-2">CNIC No</span>
                                <span class="col-9 w-auto border-end fw-bold" style="width: 10rem">{{ $application->fullName }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 row border border-2">
                                <span class="col-3 border-end fw-bold p-2">Contact No</span>
                                <span class="col-9 w-auto border-end fw-bold" style="width: 10rem">{{ $application->fullName }}</span>
                            </div>
                            <div class="col-12 row">
                                <span class="col-3 border-end fw-bold p-2">Name</span>
                                <span class="col-9 w-auto border-end fw-bold" style="width: 10rem">{{ $application->fullName }}</span>
                            </div>
                            <div class="col-12 row">
                                <span class="col-3 border-end fw-bold p-2">Name</span>
                                <span class="col-9 w-auto border-end fw-bold" style="width: 10rem">{{ $application->fullName }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
