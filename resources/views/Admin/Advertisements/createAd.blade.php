<x-layouts.admin>
    <form action="{{route('ad.post')}}" method="POST" style="display: flex;flex-direction: column; width:250px;" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" id="">
        <input type="text" name="title_urdu" id="">
        <input type="file" name="image" id="">
        <input type="text" name="description" id="description">
        <input type="date" name="start_date" id="start_date">
        <input type="date" name="end_date" id="end_date">
        <button class="btn btn-dark">Submit</button>
    </form>
</x-layouts.admin>
