

            @csrf
            <div class="control-group">
                <label class="control-label" for="date01">facebook:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="facebook" id="date01" value="{{old('facebook',isset($siteinfo->facebook)?$siteinfo->facebook:'' )}}"
                           placeholder="facebook">
                </div>
            </div>

            <div class="control-group hidden-phone">
                <label class="control-label" for="textarea1">twitter:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="twitter" id="textarea1" value="{{old('twitter',isset($siteinfo->twitter)?$siteinfo->twitter:'' )}}"
                           placeholder="twitter">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date04">linked in:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="linked_in" id="date04" value="{{old('linked_in',isset($siteinfo->linked_in)?$siteinfo->linked_in:'')}}" placeholder="linked in">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date05">google +:</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="google" id="date05" value="{{old('google',isset($siteinfo->google)?$siteinfo->google:'')}}" placeholder="google +">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date06">Email:</label>
                <div class="controls">
                    <input type="text"  class="input-xlarge" name="gmail" id="date06" value="{{old('gmail',isset($siteinfo->gmail)?$siteinfo->gmail:'')}}" placeholder="email">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="optionsCheckbox2">phone:</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="text" id="optionsCheckbox2" name="phone" value="{{old('phone',isset($siteinfo->phone)?$siteinfo->phone:'')}}" placeholder="phone">
                    </label>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="date043">slide image:</label>
                <div class="controls">
                    <input type="file" accept=".jpg, .jpeg, .png" class="input-xlarge" name="logo" id="date043" value="">
                </div>
            </div>


