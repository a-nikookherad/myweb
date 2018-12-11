            @csrf
            <div class="control-group">
                <label class="control-label" for="date01">brand name:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="brand_name" id="date01" value="{{old('brand_name',isset($brand->brand_name)?$brand->brand_name:'' )}}"
                           placeholder="brand">
                </div>
            </div>

            <div class="control-group hidden-phone">
                <label class="control-label" for="textarea1">a little about brand:</label>
                <div class="controls">
                    <textarea class="form-control" name="brand_desc" id="textarea1" rows="3">{{old('brand_desc',isset($brand->brand_desc)?$brand->brand_desc:'')}}</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="optionsCheckbox2">status:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" id="optionsCheckbox2" name="brand_status" value="1" {{isset($brand->brand_status)&&$brand->brand_status==1?'checked':''}}>
                    </label>
                </div>
            </div>


