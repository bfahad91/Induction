<table id="example1" class="table table-bordered alignCenter">
    <thead>
        <tr>

            <th>Id</th>
            <th>CV</th>
            <th>Ad title</th>
            <th>Name</th>
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
            <th>Degree</th>
            <th>Institute</th>
            <th>To</th>
            <th>From</th>
            <th>Passing Year</th>
            <th>Marks</th>
            <th>Total</th>
            <th>GPA/Grade</th>
            <th>Remarks</th>
            <th>Course</th>
            <th>Institute</th>
            <th>To</th>
            <th>From</th>
            <th>Description</th>
            <th>Employer</th>
            <th>To</th>
            <th>From</th>
            <th>Position</th>
            <th>Responsibilities</th>
        </tr>

    </thead>
    <tbody>
        <tr></tr>
        @forelse ($applications as $item)
            @php
                $rowspan = $item->education_info->count();
                if ($rowspan == 0) {
                    $rowspan = 1;
                }

                $ed = $item->education_info->count();
                $prof = $item->professional_info->count();
                $emp = $item->employment_info->count();
                $rowspan = max([$ed, $prof, $emp]);
            @endphp
            <tr>
                <td rowspan="{{ $rowspan }}">{{ $item->id }}</td>
                <th rowspan="{{ $rowspan }}"><a href="{{ asset($item->cv) }}" target="blank">cv</a></th>
                <td rowspan="{{ $rowspan }}">{{ $item->advertisement->title }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->fullName }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->fatherName }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->dob }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->domicile }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->age }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->birthPlace }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->maritalStatus }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->religion }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->nationality }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->cnic }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->permanentAddress }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->presentAddress }}</td>
                <td rowspan="{{ $rowspan }}">{{ $item->cell }}</td>
                @php
                    $education = $item->education_info;
                    $professions = $item->professional_info;
                    $employments = $item->employment_info;

                    if ($education->isNotEmpty()) {
                        $educationFirst = $education->first();
                        $degreeName = $educationFirst->degreeName;
                        $institute = $educationFirst->institute;
                        $to_institute = $educationFirst->to_institute;
                        $from_institute = $educationFirst->from_institute;
                        $passingYear = $educationFirst->passingYear;
                        $marksObtained = $educationFirst->marksObtained;
                        $totalMarks = $educationFirst->totalMarks;
                        $GPA_or_grade = $educationFirst->GPA_or_grade;
                        $remarks = $educationFirst->remarks;
                        unset($education[0]);
                    }
                    if ($professions->isNotEmpty()) {
                        $professionFirst = $professions->first();
                        $courseName = $professionFirst->courseName;
                        $instituteName = $professionFirst->instituteName;
                        $to_prof_inst = $professionFirst->to_prof_inst;
                        $from_prof_inst = $professionFirst->from_prof_inst;
                        $description = $professionFirst->description;
                        unset($professions[0]);
                    }
                    if ($employments->isNotEmpty()) {
                        $employmentFirst = $employments->first();
                        $employerName = $employmentFirst->employerName;
                        $to_employer = $employmentFirst->to_employer;
                        $from_employer = $employmentFirst->from_employer;
                        $position = $employmentFirst->position;
                        $responsibilities = $employmentFirst->responsibilities;
                        // unset($employments[0]);
                    }
                @endphp

                <td>
                    @if (!is_null($degreeName))
                        {{ $degreeName }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($institute))
                        {{ $institute }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($to_institute))
                        {{ $to_institute }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($from_institute))
                        {{ $from_institute }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($passingYear))
                        {{ $passingYear }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($marksObtained))
                        {{ $marksObtained }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($totalMarks))
                        {{ $totalMarks }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($GPA_or_grade))
                        {{ $GPA_or_grade }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($remarks))
                        {{ $remarks }}
                    @else
                        --
                    @endif
                </td>
                {{-- Prof --}}
                <td>
                    @if (!is_null($courseName))
                        {{ $courseName }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($instituteName))
                        {{ $instituteName }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($to_prof_inst))
                        {{ $to_prof_inst }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($from_prof_inst))
                        {{ $from_prof_inst }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($description))
                        {{ $description }}
                    @else
                        --
                    @endif
                </td>
                {{-- Employment --}}
                <td>
                    @if (!is_null($employerName))
                        {{ $employerName }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($to_employer))
                        {{ $to_employer }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($from_employer))
                        {{ $from_employer }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($position))
                        {{ $position }}
                    @else
                        --
                    @endif
                </td>
                <td>
                    @if (!is_null($responsibilities))
                        {{ $responsibilities }}
                    @else
                        --
                    @endif
                </td>
            </tr>
            @php $x = 0; @endphp
            @for ($i = 1; $i < $rowspan; $i++)
                <tr>
                    @php $x++; @endphp
                    @if ($ed > $x)
                        <td>{{ $education[$x]->degreeName }}</td>
                        <td>{{ $education[$x]->institute ? $education[$i]->institute : '--' }}
                        </td>
                        <td>{{ $education[$x]->to_institute ? $education[$i]->to_institute : '--' }}
                        </td>
                        <td>{{ $education[$x]->from_institute ? $education[$i]->from_institute : '--' }}
                        </td>
                        <td>{{ $education[$x]->passingYear ? $education[$i]->passingYear : '--' }}
                        </td>
                        <td>{{ $education[$x]->marksObtained ? $education[$i]->marksObtained : '--' }}
                        </td>
                        <td>{{ $education[$x]->totalMarks ? $education[$i]->totalMarks : '--' }}
                        </td>
                        <td>{{ $education[$x]->GPA_or_grade ? $education[$i]->GPA_or_grade : '--' }}
                        </td>
                        <td>{{ $education[$x]->remarks ? $education[$i]->remarks : '--' }}
                        </td>

                    @else
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    @endif

                    @if ($prof > $x)
                        <td>{{ $professions[$x]->courseName }}</td>
                        <td>{{ $professions[$x]->instituteName }}</td>
                        <td>{{ $professions[$x]->to_prof_inst }}</td>
                        <td>{{ $professions[$x]->from_prof_inst }}</td>
                        <td>{{ $professions[$x]->description }}</td>

                    @else
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    @endif

                    @if ($emp > $x)
                        <td>{{ $employments[$x]->employerName }}</td>
                        <td>{{ $employments[$x]->to_employer }}</td>
                        <td>{{ $employments[$x]->from_employer }}</td>
                        <td>{{ $employments[$x]->position }}</td>
                        <td>{{ $employments[$x]->responsibilities }}</td>
                    @else
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    @endif

                </tr>
            @endfor

            @php
                $education = collect();
                $segmentFirst = null;
            @endphp
        @empty
            <tr>
                <td colspan="100%" style="text-align: center">No data available for
                    Education</td>
            </tr>
        @endforelse
    </tbody>
</table>
