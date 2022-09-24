<div class="container">
    <div class="row my-4">
        <div class="col-8">
            <label for="name">Category name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}">
            @include('includes.validation_error', ['input' => 'name'])
        </div>
        <div class="col-4">
            <label for="color">Select color </label>
            <input type="color" name="color" id="color" class="form-control" value="{{ old('color'), $category->color }}">
            @include('includes.validation_error', ['input' => 'color'])
        </div>
    </div>
    <div class="row my-4">
        <div class="col-4">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </div>
</div>