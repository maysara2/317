<section>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="name_site" class="form-control" placeholder="Website Name" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="gmail" class="form-control" placeholder="Gmail" required>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="github" class="form-control" placeholder="Github" required>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="contentimage_en" class="form-control" placeholder="contentimage_en" required>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="contentimage_ar" class="form-control" placeholder="contentimage_ar" required>
            </div>
        </div>




         <div class="col-lg-12">
            <input type="file" name="image"  class="form-control">
            @if ($setting->image)
            <img width="80" src="{{ asset('uploads/setting/'.$setting->image) }}"  alt="" placeholder="Image" >
            @endif

        </div>
        <br>

    </div>
</section>
