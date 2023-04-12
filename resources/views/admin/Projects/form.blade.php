<section>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="name_en" class="form-control" placeholder="Arabic Name" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="name_ar" class="form-control" placeholder="Arabic Name" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="content_en" class="form-control" placeholder="English Content" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="content_ar" class="form-control" placeholder="Arabic Content" required>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-group">
                <input type="text" name="link" class="form-control" placeholder="Link" required>
            </div>
        </div>
        <div class="col-lg-5">
            <input type="file" name="image_a"  class="form-control">
            @if ($project->image_a)
            <img width="80" src="{{ asset('uploads/project/'.$project->image) }}"  alt="" placeholder="Image" >
            @endif
        </div>
        <div class="col-lg-4">
            <input type="file" name="image_b"  class="form-control">
            @if ($project->image_b)
            <img width="80" src="{{ asset('uploads/project/'.$project->image) }}"  alt="" placeholder="Image" >
            @endif
        </div> <div class="col-lg-4">
            <input type="file" name="image_c"  class="form-control">
            @if ($project->image_c)
            <img width="80" src="{{ asset('uploads/project/'.$project->image) }}"  alt="" placeholder="Image" >
            @endif
        </div> <div class="col-lg-4">
            <input type="file" name="image_d"  class="form-control">
            @if ($project->image_d)
            <img width="80" src="{{ asset('uploads/project/'.$project->image) }}"  alt="" placeholder="Image" >
            @endif
        </div>
        <
    </div>
</section>