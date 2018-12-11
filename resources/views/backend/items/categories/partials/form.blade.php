            @csrf
            <div class="control-group">
                <label class="control-label" for="date01">category name:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="cat_name" id="date01" value="{{old('cat_name',isset($cat->cat_name)?$cat->cat_name:'' )}}"
                           placeholder="cat">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date011">subcategory name:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="sub_cat_name" id="date011" value="{{old('sub_cat_name',isset($subcategories->sub_cat_name)?$subcategories->sub_cat_name:'' )}}"
                           placeholder="sub category ">
                </div>
            </div>

            <div class="control-group hidden-phone">
                <label class="control-label" for="textarea1">a little about category:</label>
                <div class="controls">
                    <textarea class="form-control" name="cat_desc" id="textarea1" rows="3">{{old('cat_desc',isset($cat->cat_desc)?$cat->cat_desc:'')}}</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="optionsCheckbox2">status:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" id="optionsCheckbox2" name="cat_status" value="1" {{isset($cat->cat_status)&&$cat->cat_status==1?'checked':''}}>
                    </label>
                </div>
            </div>


