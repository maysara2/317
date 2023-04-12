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
        <div class="col-lg-12">
            <input type="file" name="image"  class="form-control">
            @if ($service->image)
            <img width="80" src="{{ asset('uploads/service/'.$service->image) }}"  alt="" placeholder="Image" >
            @endif
        
        </div>
        <br>
        <hr>
        <hr>
        <hr>
    </div>
</section>