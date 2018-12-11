

            @csrf
            <div class="control-group">
                <label class="control-label" for="date01">slide title:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="slide_title" id="date01" value="{{old('slide_title',isset($slide->slide_title)?$slide->slide_title:'' )}}"
                           placeholder="slide">
                </div>
            </div>

            <div class="control-group hidden-phone">
                <label class="control-label" for="textarea1">description for slide:</label>
                <div class="controls">
                    <textarea class="form-control" name="slide_desc" id="textarea1" rows="3">{{old('slide_desc',isset($slide->slide_desc)?$slide->slide_desc:'')}}</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date04">slide image:</label>
                <div class="controls">
                    <input type="file" accept=".jpg, .jpeg, .png" class="input-xlarge" name="slide_img" id="date04" value="">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date05">offer image:</label>
                <div class="controls">
                    <input type="file" accept=".jpg, .jpeg, .png" class="input-xlarge" name="slide_offer_img" id="date05" value="">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="optionsCheckbox2">status:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" id="optionsCheckbox2" name="slide_status" value="1" {{isset($slide->slide_status)&&$slide->slide_status==1?'checked':''}}>
                    </label>
                </div>
            </div>


