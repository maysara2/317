<section>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="bigtitle_en" class="form-control" placeholder="big Title En" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="bigtitle_ar" class="form-control" placeholder="big Title Ar" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="bigcontent_en" class="form-control" placeholder="Big Content En" required>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="bigcontent_ar" class="form-control" placeholder="Big Content Ar" required>
            </div>

        </div>

        <div class="col-lg-12">
            <input type="file" name="bigimage"  class="form-control">
            @if ($about->bigimage)
            <img width="80" src="{{ asset('uploads/about/'.$about->bigimage) }}"  alt="" placeholder="Image" >
            @endif

        </div>
<div class="col-lg-12">
    <h5>Content smail is Start</h5>
</div>
        <hr>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="stitle_en" class="form-control" placeholder="Smail Title en 1" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="stitle_ar" class="form-control" placeholder="Smail Title ar 1" required>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="stitle_en1" class="form-control" placeholder="Smail Title en 2" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="stitle_ar1" class="form-control" placeholder="Smail Title ar 2" required>
            </div>
        </div>











        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="scontent_en" class="form-control" placeholder="Smail Content en 1" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="scontent_ar" class="form-control" placeholder="Smail Content ar 1" required>
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="scontent_en1" class="form-control" placeholder="Smail Content en 2" required>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" name="scontent_ar1" class="form-control" placeholder="Smail Content ar 2" required>
            </div>
        </div>



        <div class="col-lg-6">
            <input type="file" name="simage"  class="form-control">
            @if ($about->simage)
            <img width="80" src="{{ asset('uploads/about/'.$about->image) }}"  alt="" placeholder=" smailImage1" >
            @endif

        </div>
        <div class="col-lg-6">
           <input type="file" name="simage1"  class="form-control">
           @if ($about->simage1)
           <img width="80" src="{{ asset('uploads/about/'.$about->simage1) }}"  alt="" placeholder="smail image2" >
           @endif

       </div>



        <br>

    </div>
</section>
