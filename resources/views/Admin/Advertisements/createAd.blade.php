<x-layouts.admin>
    <div class="card card-primary container">
        <div class="card-header">
          <h3 class="card-title">Generate Advertisement for new Induction</h3>
        </div>

        <form action="{{route('admin.advertisements.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body container row">
            <div class="form-group col-10">
              <label for="PostTitle">Post Title</label>
              <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Post Title">
              @error('title')
                    <div class="error alert text-danger">{{ $message }}</div>
                @enderror
            </div>

              <div class="form-group col-4">
                <label for="start_date">Post Start Date</label>
                <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}" placeholder="Post Start Date">
                @error('start_date')
                    <div class="error alert text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-4">
                <label for="end_date">Post End Date</label>
                <input type="date" class="form-control" name="end_date" value="{{ old('end_date') }}" placeholder="Post End Date">
                @error('end_date')
                    <div class="error alert text-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group col-4">
              <label for="exampleInputFile">Post Ad <span class="text-muted">(pdf)</span></label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="ad" value="{{ old('image') }}">
                  <label class="custom-file-label" for="ad">Choose file</label>
                </div>

              </div>
              @error('image')
                    <div class="error alert text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-12">
                <label for="description">Post Description</label>
                <textarea class="form-control" name="description" value="{{ old('description') }}" id="description" cols="30" rows="10"></textarea>
                @error('description')
                    <div class="error alert text-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-check">
              <input type="checkbox" name="is_active" class="form-check-input" id="exampleCheck1" value="1">
              <label class="form-check-label" for="exampleCheck1">Active Post</label>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</x-layouts.admin>
